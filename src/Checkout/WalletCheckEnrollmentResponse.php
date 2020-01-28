<?php

namespace Worldline\Sips\Checkout;

class WalletCheckEnrollmentResponse
{
    protected $redirectionUrl;
    protected $errorFieldName;
    protected $paReqMessage;
    protected $redirectionData;
    protected $redirectionStatusCode;
    protected $messageVersion;
    protected $responseCode;

    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    public function getRedirectionUrl()
    {
        return $this->redirectionUrl;
    }

    public function getErrorFieldName()
    {
        return $this->errorFieldName;
    }

    public function getPaReqMessage()
    {
        return $this->paReqMessage;
    }

    public function getRedirectionData()
    {
        return $this->redirectionData;
    }

    public function getRedirectionStatusCode()
    {
        return $this->redirectionStatusCode;
    }

    public function getMessageVersion()
    {
        return $this->messageVersion;
    }

    public function getResponseCode()
    {
        return $this->responseCode;
    }


}