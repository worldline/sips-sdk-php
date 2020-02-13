<?php

namespace Worldline\Sips\Wallet;

class AddCardResponse
{
    protected $walletActionateTime;

    protected $paymentMeanId;

    protected $maskedPan;

    protected $walletResponseCode;

    protected $errorFieldName;

    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            if ($key === 'walletPaymentMeanDataList') {
                $result = [];
                foreach ($value as $walletPaymentMeanData) {
                    $result[] = new \Worldline\Sips\Common\Field\WalletPaymentMeanData($walletPaymentMeanData);
                }
                $value = $result;
            }
            $this->$key = $value;
        }
    }

    public function getWalletActionateTime()
    {
        return $this->walletActionateTime;
    }

    public function getPaymentMeanId()
    {
        return $this->paymentMeanId;
    }

    public function getMaskedPan()
    {
        return $this->maskedPan;
    }

    public function getWalletResponseCode()
    {
        return $this->walletResponseCode;
    }

    public function getErrorFieldName()
    {
        return $this->errorFieldName;
    }

    public function setWalletActionateTime($walletActionateTime)
    {
        $this->walletActionateTime = $walletActionateTime;
        return $this;
    }

    public function setPaymentMeanId($paymentMeanId)
    {
        $this->paymentMeanId = $paymentMeanId;
        return $this;
    }

    public function setMaskedPan($maskedPan)
    {
        $this->maskedPan = $maskedPan;
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