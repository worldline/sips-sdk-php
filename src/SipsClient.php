<?php

namespace Worldline\Sips;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Worldline\Sips\Common\Seal\JsonSealCalculator;
use Worldline\Sips\Common\Seal\PostSealCalculator;
use Worldline\Sips\Common\SipsEnvironment;
use Worldline\Sips\Paypage\InitializationResponse;
use Worldline\Sips\Paypage\PaypageResult;
use Worldline\Sips\Paypage\SipsMessage;

class SipsClient
{
    /**
     * @var SipsEnvironment
     */
    private $environment;
    /**
     * @var string
     */
    private $merchantId;
    /**
     * @var string
     */
    private $secretKey;
    /**
     * @var int
     */
    private $keyVersion;
    /**
     * 
     * @var string
     */
    protected $sealAlgorithm;
    /**
     * @var string
     */
    private $lastRequestAsJson;
    /**
     * @var string
     */
    private $lastResponseAsJson;

    /**
     * SipsClient constructor.
     * @param SipsEnvironment $environment
     * @param string $secretKey
     */
    public function __construct(SipsEnvironment $environment, string $merchantId, string $secretKey, int $keyVersion)
    {
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
     * @param SipsMessage $paymentRequest
     * @return array|null
     * @throws \Exception
     */
    public function initialize(SipsMessage &$sipsRequest): ?array
    {
        $data = null;
        $sipsRequest->setMerchantId($this->getMerchantId());
        $sipsRequest->setKeyVersion($this->getKeyVersion());

        $sealCalculator = new JsonSealCalculator();
        $sealAlgorithm = $this->sealAlgorithm ?? JsonSealCalculator::ALGORITHM_DEFAULT;
        $sealCalculator->calculateSeal($sipsRequest, $this->secretKey, $sealAlgorithm);
        $json = json_encode($sipsRequest->toArray());
        $this->lastRequestAsJson = $json;
        $client = new Client([
            "base_uri" => $this->environment->getEnvironment($sipsRequest->getConnecter()),
            "timeout" => 5
            ]);
        $headers = [
            "Content-Type" => "application/json",
            "Accept" => "application/json",
            "timeout" => 5,
        ];
        $request = new Request("POST", $sipsRequest->getServiceUrl(), $headers, $json);
        $response = $client->send($request);
        $this->lastResponseAsJson = $response->getBody()->getContents();
        $initialisationResponse = new InitializationResponse(json_decode($this->lastResponseAsJson, true));
        if (!is_null($initialisationResponse->getSeal())) {
            $validSeal = $sealCalculator->isCorrectSeal($initialisationResponse, $this->getSecretKey(), $sealAlgorithm);
            if (!$validSeal) {
                throw new \Exception("Invalid seal in response. Response not trusted.");
            }
            $data = json_decode($response->getBody()->getContents(), true);            
        }

        return $data;
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
     * @return string|null
     */
    public function getLastRequestAsJson(): ?string
    {
        return $this->lastRequestAsJson;
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
     * 
     * @return string|null
     */
    public function getLastResponseAsJson(): ?string
    {
        return $this->lastResponseAsJson;
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
