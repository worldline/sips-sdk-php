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

    public function getWalletCreationDateTime()
    {
        return $this->walletCreationDateTime;
    }

    public function getWalletLastActionDateTime()
    {
        return $this->walletLastActionDateTime;
    }

    public function getWalletResponseCode()
    {
        return $this->walletResponseCode;
    }

    public function getWalletPaymentMeanDataList()
    {
        return $this->walletPaymentMeanDataList;
    }

    public function getErrorFieldName()
    {
        return $this->errorFieldName;
    }

    public function setWalletCreationDateTime($walletCreationDateTime)
    {
        $this->walletCreationDateTime = $walletCreationDateTime;
        return $this;
    }

    public function setWalletLastActionDateTime($walletLastActionDateTime)
    {
        $this->walletLastActionDateTime = $walletLastActionDateTime;
        return $this;
    }

    public function setWalletResponseCode($walletResponseCode)
    {
        $this->walletResponseCode = $walletResponseCode;
        return $this;
    }

    public function setWalletPaymentMeanDataList($walletPaymentMeanDataList)
    {
        $this->walletPaymentMeanDataList = $walletPaymentMeanDataList;
        return $this;
    }

    public function setErrorFieldName($errorFieldName)
    {
        $this->errorFieldName = $errorFieldName;
        return $this;
    }


}