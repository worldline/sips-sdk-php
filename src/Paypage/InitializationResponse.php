<?php

namespace Worldline\Sips\Paypage;

class InitializationResponse
{
    private $errorFieldName;
    private $redirectionData;
    private $redirectionStatusCode;
    private $redirectionStatusMessage;
    private $redirectionUrl;
    private $redirectionVersion;
    private $responseCode;
    private $seal;

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
     * @return mixed
     */
    public function getErrorFieldName()
    {
        return $this->errorFieldName;
    }

    /**
     * @return mixed
     */
    public function getRedirectionData()
    {
        return $this->redirectionData;
    }

    /**
     * @return mixed
     */
    public function getRedirectionStatusCode()
    {
        return $this->redirectionStatusCode;
    }

    /**
     * @return mixed
     */
    public function getRedirectionStatusMessage()
    {
        return $this->redirectionStatusMessage;
    }

    /**
     * @return mixed
     */
    public function getRedirectionUrl()
    {
        return $this->redirectionUrl;
    }

    /**
     * @return mixed
     */
    public function getRedirectionVersion()
    {
        return $this->redirectionVersion;
    }

    /**
     * @return string
     */
    public function getResponseCode(): string
    {
        return $this->responseCode;
    }

    /**
     * @return mixed
     */
    public function getSeal()
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
