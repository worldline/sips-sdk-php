<?php

namespace Worldline\Sips\Checkout;

/**
 * Requests for payment initialization via wallet with 3-D Secure process.
 * This request initializes a transaction on Sips platform and checks the card enrollment retrieved from the wallet.
 * If the enrollment step is successful, you will receive in response a secure URL (redirectionUrl) to which the
 * customer should be redirected to continue the authentication. This redirection must be made via a POST form,
 * see the part "POST form to the ACS". On the other hand, you can proceed with the payment
 * directly by calling cardValidateAuthenticationAndOrder method.
 * 
 * @author Guiled <guislain.duthieuw@gmail.com>
 */
class WalletCheckEnrollmentRequest extends \Worldline\Sips\SipsRequest
{

    protected $amount;
    protected $authenticationData;
    protected $billingAddress;
    protected $billingContact;
    protected $captureDay;
    protected $captureMode;
    protected $currencyCode;
    protected $customerAddress;
    protected $customerContact;
    protected $customerData;
    protected $customerId;
    protected $customerIpAddress;
    protected $customerLanguage;
    protected $deliveryAddress;
    protected $deliveryContact;
    protected $deliveryData;
    protected $fraudData;
    protected $holderAddress;
    protected $holderContact;
    protected $shoppingCartDetail;
    protected $invoiceReference;
    protected $merchantReturnUrl;
    protected $merchantTransactionDateTime;
    protected $merchantUrl;
    protected $orderChannel;
    protected $orderId;
    protected $merchantWalletId;
    protected $paymentMeanId;
    protected $paymentPattern;
    protected $returnContext;
    protected $statementReference;
    protected $transactionOrigin;
    protected $transactionReference;
    protected $cardCSCValue;
    protected $cscType;

    /**
     *
     * @var \Worldline\Sips\Common\Field\S10TransactionReference
     */
    protected $s10TransactionReference;
    protected $intermediateServiceProviderId;
    protected $orderContext;
    protected $travelContext;

    /**
     * @author Guiled <guislain.duthieuw@gmail.com>
     */
    public function __construct()
    {
        $this->connecter        = \Worldline\Sips\Common\SipsEnvironment::OFFICE;
        $this->serviceUrl       = "rs-services/v2/checkout/walletCheckEnrollment";
        $this->interfaceVersion = "IR_WS_2.35";
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getAuthenticationData()
    {
        return $this->authenticationData;
    }

    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    public function getBillingContact()
    {
        return $this->billingContact;
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

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function getCustomerIpAddress()
    {
        return $this->customerIpAddress;
    }

    public function getCustomerLanguage()
    {
        return $this->customerLanguage;
    }

    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    public function getDeliveryContact()
    {
        return $this->deliveryContact;
    }

    public function getDeliveryData()
    {
        return $this->deliveryData;
    }

    public function getFraudData()
    {
        return $this->fraudData;
    }

    public function getHolderAddress()
    {
        return $this->holderAddress;
    }

    public function getHolderContact()
    {
        return $this->holderContact;
    }

    public function getShoppingCartDetail()
    {
        return $this->shoppingCartDetail;
    }

    public function getInvoiceReference()
    {
        return $this->invoiceReference;
    }

    public function getMerchantReturnUrl()
    {
        return $this->merchantReturnUrl;
    }

    public function getMerchantTransactionDateTime()
    {
        return $this->merchantTransactionDateTime;
    }

    public function getMerchantUrl()
    {
        return $this->merchantUrl;
    }

    public function getOrderChannel()
    {
        return $this->orderChannel;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function getMerchantWalletId()
    {
        return $this->merchantWalletId;
    }

    public function getPaymentMeanId()
    {
        return $this->paymentMeanId;
    }

    public function getPaymentPattern()
    {
        return $this->paymentPattern;
    }

    public function getReturnContext()
    {
        return $this->returnContext;
    }

    public function getStatementReference()
    {
        return $this->statementReference;
    }

    public function getTransactionOrigin()
    {
        return $this->transactionOrigin;
    }

    public function getTransactionReference()
    {
        return $this->transactionReference;
    }

    public function getCardCSCValue()
    {
        return $this->cardCSCValue;
    }

    public function getCscType()
    {
        return $this->cscType;
    }

    public function getS10TransactionReference(): \Worldline\Sips\Common\Field\S10TransactionReference
    {
        return $this->s10TransactionReference;
    }

    public function getIntermediateServiceProviderId()
    {
        return $this->intermediateServiceProviderId;
    }

    public function getOrderContext()
    {
        return $this->orderContext;
    }

    public function getTravelContext()
    {
        return $this->travelContext;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function setAuthenticationData($authenticationData)
    {
        $this->authenticationData = $authenticationData;
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

    public function setCustomerLanguage($customerLanguage)
    {
        $this->customerLanguage = $customerLanguage;
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

    public function setDeliveryData($deliveryData)
    {
        $this->deliveryData = $deliveryData;
        return $this;
    }

    public function setFraudData($fraudData)
    {
        $this->fraudData = $fraudData;
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

    public function setShoppingCartDetail($shoppingCartDetail)
    {
        $this->shoppingCartDetail = $shoppingCartDetail;
        return $this;
    }

    public function setInvoiceReference($invoiceReference)
    {
        $this->invoiceReference = $invoiceReference;
        return $this;
    }

    public function setMerchantReturnUrl($merchantReturnUrl)
    {
        $this->merchantReturnUrl = $merchantReturnUrl;
        return $this;
    }

    public function setMerchantTransactionDateTime($merchantTransactionDateTime)
    {
        $this->merchantTransactionDateTime = $merchantTransactionDateTime;
        return $this;
    }

    public function setMerchantUrl($merchantUrl)
    {
        $this->merchantUrl = $merchantUrl;
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

    public function setMerchantWalletId($merchantWalletId)
    {
        $this->merchantWalletId = $merchantWalletId;
        return $this;
    }

    public function setPaymentMeanId($paymentMeanId)
    {
        $this->paymentMeanId = $paymentMeanId;
        return $this;
    }

    public function setPaymentPattern($paymentPattern)
    {
        $this->paymentPattern = $paymentPattern;
        return $this;
    }

    public function setReturnContext($returnContext)
    {
        $this->returnContext = $returnContext;
        return $this;
    }

    public function setStatementReference($statementReference)
    {
        $this->statementReference = $statementReference;
        return $this;
    }

    public function setTransactionOrigin($transactionOrigin)
    {
        $this->transactionOrigin = $transactionOrigin;
        return $this;
    }

    public function setTransactionReference($transactionReference)
    {
        $this->transactionReference = $transactionReference;
        return $this;
    }

    public function setCardCSCValue($cardCSCValue)
    {
        $this->cardCSCValue = $cardCSCValue;
        return $this;
    }

    public function setS10TransactionReference(\Worldline\Sips\Common\Field\S10TransactionReference $s10TransactionReference)
    {
        $this->s10TransactionReference = $s10TransactionReference;
        return $this;
    }

    public function setIntermediateServiceProviderId($intermediateServiceProviderId)
    {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;
        return $this;
    }

    public function setOrderContext($orderContext)
    {
        $this->orderContext = $orderContext;
        return $this;
    }

    public function setTravelContext($travelContext)
    {
        $this->travelContext = $travelContext;
        return $this;
    }

    public function setCscType($cscType)
    {
        $this->cscType = $cscType;
        return $this;
    }

}