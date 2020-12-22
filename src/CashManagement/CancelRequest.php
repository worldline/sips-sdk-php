<?php

namespace Worldline\Sips\CashManagement;

class CancelRequest extends \Worldline\Sips\SipsRequest {

    protected $operationAmount;
    protected $currencyCode;
    protected $transactionReference;
    protected $operationOrigin;
    protected $s10TransactionReference;
    protected $intermediateServiceProviderId;
    protected $customerContact;

    public function __construct() {
        $this->connecter = \Worldline\Sips\Common\SipsEnvironment::OFFICE;
        $this->serviceUrl = "rs-services/v2/cashManagement/cancel";
        $this->interfaceVersion = "CR_WS_2.20";
        $this->setTransactionReference($this->generateReference());
    }

    public function generateReference(): string {
        $microtime = explode(' ', microtime());
        $microtime[0] = $microtime[0] * 1000000;
        $transactionReference = $microtime[1] . $microtime[0];
        return $transactionReference;
    }

    public function getOperationAmount() {
        return $this->operationAmount;
    }

    public function getCurrencyCode() {
        return $this->currencyCode;
    }

    public function getTransactionReference() {
        return $this->transactionReference;
    }

    public function getOperationOrigin() {
        return $this->operationOrigin;
    }

    public function getS10TransactionReference() {
        return $this->s10TransactionReference;
    }

    public function getIntermediateServiceProviderId() {
        return $this->intermediateServiceProviderId;
    }

    public function getCustomerContact() {
        return $this->customerContact;
    }

    public function setOperationAmount($operationAmount) {
        $this->operationAmount = $operationAmount;
        return $this;
    }

    public function setCurrencyCode($currencyCode) {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function setTransactionReference($transactionReference) {
        $this->transactionReference = $transactionReference;
        return $this;
    }

    public function setOperationOrigin($operationOrigin) {
        $this->operationOrigin = $operationOrigin;
        return $this;
    }

    public function setS10TransactionReference($s10TransactionReference) {
        $this->s10TransactionReference = $s10TransactionReference;
        return $this;
    }

    public function setIntermediateServiceProviderId($intermediateServiceProviderId) {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;
        return $this;
    }

    public function setCustomerContact($customerContact) {
        $this->customerContact = $customerContact;
        return $this;
    }

}
