<?php

namespace Worldline\Sips\CashManagement;

class DuplicateRequest extends \Worldline\Sips\SipsMessage
{
    protected $amount;
    protected $captureDay;
    protected $captureMode;
    protected $currencyCode;
    protected $customerEmail;
    protected $customerId;
    protected $customerIpAddress;

    /**
     *
     * @var \Worldline\Sips\Common\Field\FraudData
     */
    protected $fraudData;
    protected $fromTransactionReference;
    protected $merchantTransactionDateTime;
    protected $orderChannel;
    protected $orderId;
    protected $returnContext;
    protected $transactionReference;
    protected $transactionOrigin;
    protected $fromMerchantId;
    protected $deliveryAddress;
    protected $deliveryContact;
    protected $billingAddress;
    protected $billingContact;
    protected $customerAddress;
    protected $customerContact;
    protected $customerData;
    protected $statementReference;
    protected $deliveryData;
    protected $shoppingCartDetail;
    protected $s10TransactionReference;
    protected $s10FromTransactionReference;
    protected $paymentMeanData;
    protected $intermediateServiceProviderId;
    protected $subMerchantId;
    protected $subMerchantShortName;
    protected $subMerchantCategoryCode;
    protected $subMerchantLegalId;
    protected $subMerchantAddress;
    protected $holderAddress;
    protected $holderContact;
    protected $authenticationData;
    protected $travelContext;
    protected $orderContext;

    /**
     * 			DuplicateRequest			constructor.
     */
    public function __construct()
    {
        $this->connecter        = \Worldline\Sips\Common\SipsEnvironment::OFFICE;
        $this->serviceUrl       = "rs-services/v2/cashManagement/duplicate";
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

    public function getAmount()
    {
        return $this->amount;
    }

    public function getCaptureDay()
    {
        return $this->captureDay;
    }

    public function getCaptureMode()
    {
        return $this->captureMode;
    }

    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function getCustomerIpAddress()
    {
        return $this->customerIpAddress;
    }

    public function getFraudData(): ?\Worldline\Sips\Common\Field\FraudData
    {
        return $this->fraudData;
    }

    public function getFromTransactionReference()
    {
        return $this->fromTransactionReference;
    }

    public function getMerchantTransactionDateTime()
    {
        return $this->merchantTransactionDateTime;
    }

    public function getOrderChannel()
    {
        return $this->orderChannel;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function getReturnContext()
    {
        return $this->returnContext;
    }

    public function getTransactionReference()
    {
        return $this->transactionReference;
    }

    public function getTransactionOrigin()
    {
        return $this->transactionOrigin;
    }

    public function getFromMerchantId()
    {
        return $this->fromMerchantId;
    }

    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    public function getDeliveryContact()
    {
        return $this->deliveryContact;
    }

    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    public function getBillingContact()
    {
        return $this->billingContact;
    }

    public function getCustomerAddress()
    {
        return $this->customerAddress;
    }

    public function getCustomerContact()
    {
        return $this->customerContact;
    }

    public function getCustomerData()
    {
        return $this->customerData;
    }

    public function getStatementReference()
    {
        return $this->statementReference;
    }

    public function getDeliveryData()
    {
        return $this->deliveryData;
    }

    public function getShoppingCartDetail()
    {
        return $this->shoppingCartDetail;
    }

    public function getS10TransactionReference()
    {
        return $this->s10TransactionReference;
    }

    public function getS10FromTransactionReference()
    {
        return $this->s10FromTransactionReference;
    }

    public function getPaymentMeanData()
    {
        return $this->paymentMeanData;
    }

    public function getIntermediateServiceProviderId()
    {
        return $this->intermediateServiceProviderId;
    }

    public function getSubMerchantId()
    {
        return $this->subMerchantId;
    }

    public function getSubMerchantShortName()
    {
        return $this->subMerchantShortName;
    }

    public function getSubMerchantCategoryCode()
    {
        return $this->subMerchantCategoryCode;
    }

    public function getSubMerchantLegalId()
    {
        return $this->subMerchantLegalId;
    }

    public function getSubMerchantAddress()
    {
        return $this->subMerchantAddress;
    }

    public function getHolderAddress()
    {
        return $this->holderAddress;
    }

    public function getHolderContact()
    {
        return $this->holderContact;
    }

    public function getAuthenticationData()
    {
        return $this->authenticationData;
    }

    public function getTravelContext()
    {
        return $this->travelContext;
    }

    public function getOrderContext()
    {
        return $this->orderContext;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function setCaptureDay($captureDay)
    {
        $this->captureDay = $captureDay;
        return $this;
    }

    public function setCaptureMode($captureMode)
    {
        $this->captureMode = $captureMode;
        return $this;
    }

    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;
        return $this;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    public function setCustomerIpAddress($customerIpAddress)
    {
        $this->customerIpAddress = $customerIpAddress;
        return $this;
    }

    public function setFraudData(\Worldline\Sips\Common\Field\FraudData $fraudData)
    {
        $this->fraudData = $fraudData;
        return $this;
    }

    public function setFromTransactionReference($fromTransactionReference)
    {
        $this->fromTransactionReference = $fromTransactionReference;
        return $this;
    }

    public function setMerchantTransactionDateTime($merchantTransactionDateTime)
    {
        $this->merchantTransactionDateTime = $merchantTransactionDateTime;
        return $this;
    }

    public function setOrderChannel($orderChannel)
    {
        $this->orderChannel = $orderChannel;
        return $this;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function setReturnContext($returnContext)
    {
        $this->returnContext = $returnContext;
        return $this;
    }

    public function setTransactionReference($transactionReference)
    {
        $this->transactionReference = $transactionReference;
        return $this;
    }

    public function setTransactionOrigin($transactionOrigin)
    {
        $this->transactionOrigin = $transactionOrigin;
        return $this;
    }

    public function setFromMerchantId($fromMerchantId)
    {
        $this->fromMerchantId = $fromMerchantId;
        return $this;
    }

    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    public function setDeliveryContact($deliveryContact)
    {
        $this->deliveryContact = $deliveryContact;
        return $this;
    }

    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    public function setBillingContact($billingContact)
    {
        $this->billingContact = $billingContact;
        return $this;
    }

    public function setCustomerAddress($customerAddress)
    {
        $this->customerAddress = $customerAddress;
        return $this;
    }

    public function setCustomerContact($customerContact)
    {
        $this->customerContact = $customerContact;
        return $this;
    }

    public function setCustomerData($customerData)
    {
        $this->customerData = $customerData;
        return $this;
    }

    public function setStatementReference($statementReference)
    {
        $this->statementReference = $statementReference;
        return $this;
    }

    public function setDeliveryData($deliveryData)
    {
        $this->deliveryData = $deliveryData;
        return $this;
    }

    public function setShoppingCartDetail($shoppingCartDetail)
    {
        $this->shoppingCartDetail = $shoppingCartDetail;
        return $this;
    }

    public function setS10TransactionReference($s10TransactionReference)
    {
        $this->s10TransactionReference = $s10TransactionReference;
        return $this;
    }

    public function setS10FromTransactionReference($s10FromTransactionReference)
    {
        $this->s10FromTransactionReference = $s10FromTransactionReference;
        return $this;
    }

    public function setPaymentMeanData($paymentMeanData)
    {
        $this->paymentMeanData = $paymentMeanData;
        return $this;
    }

    public function setIntermediateServiceProviderId($intermediateServiceProviderId)
    {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;
        return $this;
    }

    public function setSubMerchantId($subMerchantId)
    {
        $this->subMerchantId = $subMerchantId;
        return $this;
    }

    public function setSubMerchantShortName($subMerchantShortName)
    {
        $this->subMerchantShortName = $subMerchantShortName;
        return $this;
    }

    public function setSubMerchantCategoryCode($subMerchantCategoryCode)
    {
        $this->subMerchantCategoryCode = $subMerchantCategoryCode;
        return $this;
    }

    public function setSubMerchantLegalId($subMerchantLegalId)
    {
        $this->subMerchantLegalId = $subMerchantLegalId;
        return $this;
    }

    public function setSubMerchantAddress($subMerchantAddress)
    {
        $this->subMerchantAddress = $subMerchantAddress;
        return $this;
    }

    public function setHolderAddress($holderAddress)
    {
        $this->holderAddress = $holderAddress;
        return $this;
    }

    public function setHolderContact($holderContact)
    {
        $this->holderContact = $holderContact;
        return $this;
    }

    public function setAuthenticationData($authenticationData)
    {
        $this->authenticationData = $authenticationData;
        return $this;
    }

    public function setTravelContext($travelContext)
    {
        $this->travelContext = $travelContext;
        return $this;
    }

    public function setOrderContext($orderContext)
    {
        $this->orderContext = $orderContext;
        return $this;
    }
}