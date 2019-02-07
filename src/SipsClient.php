<?php

namespace Worldline\Sips;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Worldline\Sips\Common\Seal\JsonSealCalculator;
use Worldline\Sips\Common\Seal\PostSealCalculator;
use Worldline\Sips\Common\SipsEnvironment;
use Worldline\Sips\Paypage\InitializationResponse;
use Worldline\Sips\Paypage\PaypageRequest;
use Worldline\Sips\Paypage\PaypageResult;

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
     * @return null|string
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
     * @param PaypageRequest $paymentRequest
     * @return InitializationResponse
     * @throws \Exception
     */
    public function initialize(PaypageRequest &$paymentRequest): InitializationResponse
    {
        $paymentRequest->setMerchantId($this->getMerchantId());
        $paymentRequest->setKeyVersion($this->getKeyVersion());

        $sealCalculator = new JsonSealCalculator();
        $sealCalculator->calculateSeal($paymentRequest, $this->secretKey);
        $json = json_encode($paymentRequest->toArray());
        $client = new Client(["base_uri" => $this->environment->getEnvironment()]);
        $headers = [
            "Content-Type" => "application/json",
            "Accept" => "application/json",
        ];
        $request = new Request("POST", $paymentRequest->getServiceUrl(), $headers, $json);
        $response = $client->send($request);
        $initialisationResponse = new InitializationResponse(json_decode($response->getBody()->getContents(), true));
        if (!is_null($initialisationResponse->getSeal())) {
            $validSeal = $sealCalculator->isCorrectSeal($initialisationResponse, $this->getSecretKey());
            if (!$validSeal) {
                var_dump($initialisationResponse);
                var_dump($sealCalculator->getSealData($initialisationResponse->toArray()));
                throw new \Exception("Invalid seal in response. Response not trusted.");
            }
        }

        return $initialisationResponse;
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