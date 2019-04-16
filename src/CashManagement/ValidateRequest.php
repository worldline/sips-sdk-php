<?php

namespace Worldline\Sips\CashManagement;

class ValidateRequest extends \Worldline\Sips\SipsRequest
{
    protected $currencyCode;
    protected $intermediateServiceProviderId;
    protected $lastRecoveryIndicator;
    protected $operationAmount;
    protected $operationOrigin;
    protected $s10TransactionReference;
    protected $subMerchantAddress;
    protected $subMerchantCategoryCode;
    protected $subMerchantId;
    protected $subMerchantLegalId;
    protected $subMerchantShortName;
    protected $transactionReference;

    public function __construct()
    {
        $this->connecter        = \Worldline\Sips\Common\SipsEnvironment::OFFICE;
        $this->serviceUrl       = "rs-services/v2/cashManagement/validate";
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

    function getLastRecoveryIndicator()
    {
        return $this->lastRecoveryIndicator;
    }

    function getS10TransactionReference()
    {
        return $this->s10TransactionReference;
    }

    function getIntermediateServiceProviderId()
    {
        return $this->intermediateServiceProviderId;
    }

    function getSubMerchantId()
    {
        return $this->subMerchantId;
    }

    function getSubMerchantShortName()
    {
        return $this->subMerchantShortName;
    }

    function getSubMerchantCategoryCode()
    {
        return $this->subMerchantCategoryCode;
    }

    function getSubMerchantLegalId()
    {
        return $this->subMerchantLegalId;
    }

    function getSubMerchantAddress()
    {
        return $this->subMerchantAddress;
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

    function setLastRecoveryIndicator($lastRecoveryIndicator)
    {
        $this->lastRecoveryIndicator = $lastRecoveryIndicator;

        return $this;
    }

    function setS10TransactionReference($s10TransactionReference)
    {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    function setIntermediateServiceProviderId($intermediateServiceProviderId)
    {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;

        return $this;
    }

    function setSubMerchantId($subMerchantId)
    {
        $this->subMerchantId = $subMerchantId;

        return $this;
    }

    function setSubMerchantShortName($subMerchantShortName)
    {
        $this->subMerchantShortName = $subMerchantShortName;

        return $this;
    }

    function setSubMerchantCategoryCode($subMerchantCategoryCode)
    {
        $this->subMerchantCategoryCode = $subMerchantCategoryCode;

        return $this;
    }

    function setSubMerchantLegalId($subMerchantLegalId)
    {
        $this->subMerchantLegalId = $subMerchantLegalId;

        return $this;
    }

    function setSubMerchantAddress($subMerchantAddress)
    {
        $this->subMerchantAddress = $subMerchantAddress;

        return $this;
    }


}