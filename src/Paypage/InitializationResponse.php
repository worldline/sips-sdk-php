<?php

namespace Worldline\Sips\Paypage;

/**
 * Class InitializationResponse
 * @package Worldline\Sips\Paypage
 */
/**
 * Class InitializationResponse
 * @package Worldline\Sips\Paypage
 */
class InitializationResponse
{
    protected $errorFieldName;
    protected $redirectionData;
    protected $redirectionStatusCode;
    protected $redirectionStatusMessage;
    protected $redirectionUrl;
    protected $redirectionVersion;
    protected $responseCode;
    protected $seal;

    /**
     * InitializationResponse constructor.
     * @param array $responseArray
     */
    public function __construct(array $responseArray)
    {
        foreach ($responseArray as $key => $value) {
            switch ($key) {
                case "errorFieldName" :
                    $this->errorFieldName = $value;
                    break;
                case "redirectionData" :
                    $this->redirectionData = $value;
                    break;
                case "redirectionStatusCode" :
                    $this->redirectionStatusCode = $value;
                    break;
                case "redirectionStatusMessage" :
                    $this->redirectionStatusMessage = $value;
                    break;
                case "redirectionUrl" :
                    $this->redirectionUrl = $value;
                    break;
                case "redirectionVersion" :
                    $this->redirectionVersion = $value;
                    break;
                case "responseCode" :
                    $this->responseCode = $value;
                    break;
                case "seal" :
                    $this->seal = $value;
                    break;
            }
        }
    }

    /**
     * @return null|string
     */
    public function getErrorFieldName(): ?string
    {
        return $this->errorFieldName;
    }

    /**
     * @return null|string
     */
    public function getRedirectionData(): ?string
    {
        return $this->redirectionData;
    }

    /**
     * @return null|string
     */
    public function getRedirectionStatusCode(): ?string
    {
        return $this->redirectionStatusCode;
    }

    /**
     * @return null|string
     */
    public function getRedirectionStatusMessage(): ?string
    {
        return $this->redirectionStatusMessage;
    }

    /**
     * @return null|string
     */
    public function getRedirectionUrl(): ?string
    {
        return $this->redirectionUrl;
    }

    /**
     * @return null|string
     */
    public function getRedirectionVersion(): ?string
    {
        return $this->redirectionVersion;
    }

    /**
     * @return null|string
     */
    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    /**
     * @return null|string
     */
    public function getSeal(): ?string
    {
        return $this->seal;
    }



    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        foreach ($this as $key => $value) {
            if ($value != null && $key != "seal") {
                if (is_int($value) || is_string($value)) {
                    $array[$key] = $value;
                } else {
                    $array[$key] = $value->toArray();
                }
            }
        }
        ksort($array);

        return $array;
    }
}
