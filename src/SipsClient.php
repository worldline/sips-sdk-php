<?php

namespace Worldline\Sips;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Worldline\Sips\Common\Seal\JsonSealCalculator;
use Worldline\Sips\Common\Seal\PostSealCalculator;
use Worldline\Sips\Common\SipsEnvironment;
use Worldline\Sips\Paypage\InitializationResponse;
use Worldline\Sips\Paypage\PaypageResult;
use Worldline\Sips\SipsMessage;

class SipsClient
{
    /**
     * @var SipsEnvironment
     */
    protected $environment;
    /**
     * @var string
     */
    protected $merchantId;
    /**
     * @var string
     */
    protected $secretKey;
    /**
     * @var int
     */
    protected $keyVersion;
    /**
     * 
     * @var string
     */
    protected $sealAlgorithm;
    /**
     * @var string
     */
    protected $lastRequestAsJson;
    /**
     * @var string
     */
    protected $lastResponseAsJson;

    /**
     * SipsClient constructor.
     * @param SipsEnvironment $environment
     * @param string|null $merchantId
     * @param string|null $secretKey
     * @param int|null $keyVersion
     */
    public function __construct(SipsEnvironment $environment, string $merchantId = null, string $secretKey = null, int $keyVersion = null)
    {
        if ($merchantId == null) {
            $merchantId = $_SERVER["SIPS_MERCHANTID"];
        }
        if ($secretKey = null) {
            $secretKey = $_SERVER["SIPS_SECRETKEY"];
        }
        if ($keyVersion = null) {
            $keyVersion = $_SERVER["SIPS_KEYVERSION"];
        }
        $this->setEnvironment($environment);
        $this->setMerchantId($merchantId);
        $this->setSecretKey($secretKey);
        $this->setKeyVersion($keyVersion);
    }

    /**
     * @return string|null
     */
    public function getEnvironment(): ?string
    {
        return $this->environment;
    }

    /**
     * @param SipsEnvironment $environment
     */
    public function setEnvironment(SipsEnvironment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * @param SipsMessage $sipsMessage
     * @return array|null
     * @throws Common\Exception\InvalidEnvironmentException
     */
    public function send(SipsMessage $sipsMessage): ?array
    {
        $timeout = 0;
        $sipsMessage->setMerchantId($this->getMerchantId());
        $sipsMessage->setKeyVersion($this->getKeyVersion());$sealCalculator = new JsonSealCalculator();
        $sealAlgorithm = $this->sealAlgorithm ?? JsonSealCalculator::ALGORITHM_DEFAULT;
        $sealCalculator->calculateSeal($sipsMessage, $this->secretKey, $sealAlgorithm);
        $json = json_encode($sipsMessage->toArray());
        $this->lastRequestAsJson = $json;
        $client = new Client([
            "base_uri" => $this->environment->getEnvironment($sipsMessage->getConnecter()),
            "timeout" => $timeout
        ]);
        $headers = [
            "Content-Type" => "application/json",
            "Accept" => "application/json",
            "timeout" => $timeout,
        ];
        $request = new Request("POST", $sipsMessage->getServiceUrl(), $headers, $json);
        $response = $client->send($request, ['timeout' => $timeout]);
        $this->lastResponseAsJson = $response->getBody()->getContents();
        $data = json_decode($this->lastResponseAsJson, true);
        if (!empty($data['seal'])) {
            $validSeal = $sealCalculator->checkSeal($data, $this->getSecretKey(), $sealAlgorithm);
            if (!$validSeal) {
                throw new \Exception("Invalid seal in response. Response not trusted.");
            }
        }

        return $data;
    }

    /**
     * @param SipsMessage $sipsMessage
     * @return InitializationResponse|null
     * @throws \Exception
     */
    public function initialize(SipsMessage $sipsMessage): ?InitializationResponse
    {
        return new InitializationResponse($this->send($sipsMessage));
    }

    /**
     * @return null|string
     */
    public function getSecretKey(): ?string
    {
        return $this->secretKey;
    }

    /**
     * @param string $secretKey
     */
    public function setSecretKey(string $secretKey)
    {
        $this->secretKey = $secretKey;
    }

    /**
     * @return null|string
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * @param string $merchantId
     */
    public function setMerchantId(string $merchantId)
    {
        $this->merchantId = $merchantId;
    }

    /**
     * @return int|null
     */
    public function getKeyVersion(): ?int
    {
        return $this->keyVersion;
    }

    /**
     * @param int $keyVersion
     */
    public function setKeyVersion(int $keyVersion)
    {
        $this->keyVersion = $keyVersion;
    }

    /**
     * @param bool $prettyPrint
     * @return string
     */
    public function getLastRequestAsJson($prettyPrint = false): string
    {
        if ($prettyPrint) {
            return json_encode(json_decode($this->lastRequestAsJson,true),JSON_PRETTY_PRINT);
        } else {
            return $this->lastRequestAsJson;
        }
    }

    /**
     * 
     * @return string|null
     */
    public function getSealAlgorithm(): ?string
    {
        return $this->sealAlgorithm;
    }

    /**
     * 
     * @param type $sealAlgorithm
     * @return $this
     */
    public function setSealAlgorithm($sealAlgorithm): SipsClient
    {
        $this->sealAlgorithm = $sealAlgorithm;
        return $this;
    }

    /**
     * @param bool $prettyPrint
     * @return string
     */
    public function getLastResponseAsJson($prettyPrint = false): string
    {
        if ($prettyPrint) {
            return json_encode(json_decode($this->lastResponseAsJson,true),JSON_PRETTY_PRINT);
        } else {
            return $this->lastResponseAsJson;
        }
    }

    /**
     * @return PaypageResult
     * @throws \Exception
     */
    public function finalizeTransaction(): PaypageResult
    {
        $data = $_POST['Data'];
        $seal = $_POST['Seal'];
        $sealCalculator = new PostSealCalculator();
        if (!$sealCalculator->isCorrectSeal($data, $this->secretKey, $seal)) {
            throw new \Exception("Invalid seal in response. Response not trusted.");
        }
        $paypageResult = new PaypageResult($data);

        return $paypageResult;
    }
}
