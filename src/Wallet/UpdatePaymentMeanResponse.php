<?php

namespace Worldline\Sips\Wallet;

class UpdatePaymentMeanResponse
{
    protected $walletActionDateTime;
    protected $walletResponseCode;

    protected $errorFieldName; //	Available if walletResponseCode 12 or 30

    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    public function getWalletActionDateTime()
    {
        return $this->walletActionDateTime;
    }

    public function getWalletResponseCode()
    {
        return $this->walletResponseCode;
    }

    public function getErrorFieldName()
    {
        return $this->errorFieldName;
    }

    public function setWalletActionDateTime($walletActionDateTime)
    {
        $this->walletActionDateTime = $walletActionDateTime;
        return $this;
    }

    public function setWalletResponseCode($walletResponseCode)
    {
        $this->walletResponseCode = $walletResponseCode;
        return $this;
    }

    public function setErrorFieldName($errorFieldName)
    {
        $this->errorFieldName = $errorFieldName;
        return $this;
    }


}