<?php

namespace Worldline\Sips\CashManagement;

class RefundRequest  extends \Worldline\Sips\SipsMessage
{
    protected $operationAmount;
    protected $currencyCode;
    protected $interfaceVersion;
    protected $transactionReference;
    protected $operationOrigin;
    protected $paymentMeanData;
    protected $s10TransactionReference;
    protected $shoppingCartDetail;
    protected $intermediateServiceProviderId;
    protected $seal;
    protected $keyVersion;
    protected $sealAlgorithm;
    protected $customerContact;

    public function __construct()
    {
        $this->connecter        = \Worldline\Sips\Common\SipsEnvironment::OFFICE;
        $this->serviceUrl       = "rs-services/v2/cashManagement/refund";
        $this->interfaceVersion = "CR_WS_2.3";
        $this->setTransactionReference($this->generateReference());
    }

    public function generateReference(): string
    {
        $microtime            = explode(' ', microtime());
        $microtime[0]         = $microtime[0] * 1000000;
        $transactionReference = $microtime[1] . $microtime[0];
        return $transactionReference;
    }



    function getOperationAmount()
    {
        return $this->operationAmount;
    }

    function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    function getTransactionReference()
    {
        return $this->transactionReference;
    }

    function getOperationOrigin()
    {
        return $this->operationOrigin;
    }

    function getPaymentMeanData()
    {
        return $this->paymentMeanData;
    }

    function getS10TransactionReference()
    {
        return $this->s10TransactionReference;
    }

    function getShoppingCartDetail()
    {
        return $this->shoppingCartDetail;
    }

    function getIntermediateServiceProviderId()
    {
        return $this->intermediateServiceProviderId;
    }

    function getCustomerContact()
    {
        return $this->customerContact;
    }

    function setOperationAmount($operationAmount)
    {
        $this->operationAmount = $operationAmount;

        return $this;
    }

    function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    function setTransactionReference($transactionReference)
    {
        $this->transactionReference = $transactionReference;

        return $this;
    }

    function setOperationOrigin($operationOrigin)
    {
        $this->operationOrigin = $operationOrigin;

        return $this;
    }

    function setPaymentMeanData($paymentMeanData)
    {
        $this->paymentMeanData = $paymentMeanData;

        return $this;
    }

    function setS10TransactionReference($s10TransactionReference)
    {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    function setShoppingCartDetail($shoppingCartDetail)
    {
        $this->shoppingCartDetail = $shoppingCartDetail;

        return $this;
    }

    function setIntermediateServiceProviderId($intermediateServiceProviderId)
    {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;

        return $this;
    }


    function setCustomerContact($customerContact)
    {
        $this->customerContact = $customerContact;

        return $this;
    }


}