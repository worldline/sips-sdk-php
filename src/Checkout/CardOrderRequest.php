<?php

namespace Worldline\Sips\Checkout;

class CardOrderRequest extends \Worldline\Sips\SipsRequest
{
    protected $amount;
    protected $captureDay;
    protected $captureMode;
    protected $cardCSCValue;
    protected $cardEffectiveDate;
    protected $cardExpiryDate;
    protected $cardNumber;
    protected $cardSeqNumber;
    protected $currencyCode;
    protected $customerId;
    protected $customerIpAddress;
    protected $fraudData;
    protected $merchantId;
    protected $merchantTransactionDateTime;
    protected $orderChannel;
    protected $orderId;
    protected $interfaceVersion;
    protected $returnContext;
    protected $transactionReference;
    protected $transactionOrigin;
    protected $billingAddress;
    protected $billingContact;
    protected $customerAddress;
    protected $customerContact;
    protected $deliveryAddress;
    protected $deliveryContact;
    protected $deliveryData;
    protected $holderAddress;
    protected $holderContact;
    protected $customerData;
    protected $authenticationData;
    protected $invoiceReference;
    protected $statementReference;
    protected $paymentPattern;
    protected $panType;
    protected $paymentMeanBrand;
    protected $paymentMeanData;
    protected $holderData;
    protected $s10TransactionReference;
    protected $riskManagementCustomDataList;
    protected $shoppingCartDetail;
    protected $intermediateServiceProviderId;
    protected $seal;
    protected $keyVersion;
    protected $sealAlgorithm;
    protected $paymentMeanBrandSelectionStatus;
    protected $subMerchantId;
    protected $subMerchantShortName;
    protected $subMerchantCategoryCode;
    protected $subMerchantLegalId;
    protected $subMerchantAddress;
    protected $customerLanguage;
    protected $travelContext;
    protected $orderContext;

    public function __construct()
    {
        $this->connecter        = \Worldline\Sips\Common\SipsEnvironment::OFFICE;
        $this->serviceUrl       = "rs-services/v2/checkout/cardOrder";
        $this->interfaceVersion = "IR_WS_2.23";
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

    public function getCardCSCValue()
    {
        return $this->cardCSCValue;
    }

    public function getCardEffectiveDate()
    {
        return $this->cardEffectiveDate;
    }

    public function getCardExpiryDate()
    {
        return $this->cardExpiryDate;
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function getCardSeqNumber()
    {
        return $this->cardSeqNumber;
    }

    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function getCustomerIpAddress()
    {
        return $this->customerIpAddress;
    }

    public function getFraudData()
    {
        return $this->fraudData;
    }

    public function getMerchantId(): string
    {
        return $this->merchantId;
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

    public function getInterfaceVersion(): string
    {
        return $this->interfaceVersion;
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

    public function getHolderAddress()
    {
        return $this->holderAddress;
    }

    public function getHolderContact()
    {
        return $this->holderContact;
    }

    public function getCustomerData()
    {
        return $this->customerData;
    }

    public function getAuthenticationData()
    {
        return $this->authenticationData;
    }

    public function getInvoiceReference()
    {
        return $this->invoiceReference;
    }

    public function getStatementReference()
    {
        return $this->statementReference;
    }

    public function getPaymentPattern()
    {
        return $this->paymentPattern;
    }

    public function getPanType()
    {
        return $this->panType;
    }

    public function getPaymentMeanBrand()
    {
        return $this->paymentMeanBrand;
    }

    public function getPaymentMeanData()
    {
        return $this->paymentMeanData;
    }

    public function getHolderData()
    {
        return $this->holderData;
    }

    public function getS10TransactionReference(): \Worldline\Sips\Common\Field\S10TransactionReference
    {
        return $this->s10TransactionReference;
    }

    public function getRiskManagementCustomDataList()
    {
        return $this->riskManagementCustomDataList;
    }

    public function getShoppingCartDetail()
    {
        return $this->shoppingCartDetail;
    }

    public function getIntermediateServiceProviderId()
    {
        return $this->intermediateServiceProviderId;
    }

    public function getSeal(): string
    {
        return $this->seal;
    }

    public function getKeyVersion(): int
    {
        return $this->keyVersion;
    }

    public function getSealAlgorithm(): string
    {
        return $this->sealAlgorithm;
    }

    public function getPaymentMeanBrandSelectionStatus()
    {
        return $this->paymentMeanBrandSelectionStatus;
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

    public function getCustomerLanguage()
    {
        return $this->customerLanguage;
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

    public function setCardCSCValue($cardCSCValue)
    {
        $this->cardCSCValue = $cardCSCValue;
        return $this;
    }

    public function setCardEffectiveDate($cardEffectiveDate)
    {
        $this->cardEffectiveDate = $cardEffectiveDate;
        return $this;
    }

    public function setCardExpiryDate($cardExpiryDate)
    {
        $this->cardExpiryDate = $cardExpiryDate;
        return $this;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    public function setCardSeqNumber($cardSeqNumber)
    {
        $this->cardSeqNumber = $cardSeqNumber;
        return $this;
    }

    public function setCurrencyCode($currencyCode)
    {
        $validCurrencyCodes = [
            "ARS" => "032",
            "AUD" => "036",
            "BHD" => "048",
            "KHR" => "116",
            "CAD" => "124",
            "LKR" => "144",
            "CNY" => "156",
            "HRK" => "191",
            "CZK" => "203",
            "DKK" => "208",
            "HKD" => "344",
            "HUF" => "348",
            "ISK" => "352",
            "INR" => "356",
            "ILS" => "376",
            "JPY" => "392",
            "KRW" => "410",
            "KWD" => "414",
            "MYR" => "458",
            "MUR" => "480",
            "MXN" => "484",
            "NPR" => "524",
            "NZD" => "554",
            "NOK" => "578",
            "QAR" => "634",
            "RUB" => "643",
            "SAR" => "682",
            "SGD" => "702",
            "ZAR" => "710",
            "SEK" => "752",
            "CHF" => "756",
            "THB" => "764",
            "AED" => "784",
            "TND" => "788",
            "GBP" => "826",
            "USD" => "840",
            "TWD" => "901",
            "RON" => "946",
            "TRY" => "949",
            "XOF" => "952",
            "XPF" => "953",
            "BGN" => "975",
            "EUR" => "978",
            "UAH" => "980",
            "PLN" => "985",
            "BRL" => "986",
        ];
        if (key_exists($currencyCode, $validCurrencyCodes)) {
            $this->currencyCode = $validCurrencyCodes[$currencyCode];
        } elseif (in_array($currencyCode, $validCurrencyCodes)) {
            $this->currencyCode = $currencyCode;
        } else {
            throw new \InvalidArgumentException("Invalid currencyCode. Select a valid code from the data dictionary.");
        }
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

    public function setFraudData($fraudData)
    {
        $this->fraudData = $fraudData;
        return $this;
    }

    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
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

    public function setInterfaceVersion($interfaceVersion)
    {
        $this->interfaceVersion = $interfaceVersion;
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

    public function setCustomerData($customerData)
    {
        $this->customerData = $customerData;
        return $this;
    }

    public function setAuthenticationData($authenticationData)
    {
        $this->authenticationData = $authenticationData;
        return $this;
    }

    public function setInvoiceReference($invoiceReference)
    {
        $this->invoiceReference = $invoiceReference;
        return $this;
    }

    public function setStatementReference($statementReference)
    {
        $this->statementReference = $statementReference;
        return $this;
    }

    public function setPaymentPattern($paymentPattern)
    {
        $this->paymentPattern = $paymentPattern;
        return $this;
    }

    public function setPanType($panType)
    {
        $this->panType = $panType;
        return $this;
    }

    public function setPaymentMeanBrand($paymentMeanBrand)
    {
        $this->paymentMeanBrand = $paymentMeanBrand;
        return $this;
    }

    public function setPaymentMeanData($paymentMeanData)
    {
        $this->paymentMeanData = $paymentMeanData;
        return $this;
    }

    public function setHolderData($holderData)
    {
        $this->holderData = $holderData;
        return $this;
    }

    public function setS10TransactionReference(\Worldline\Sips\Common\Field\S10TransactionReference $s10TransactionReference)
    {
        $this->s10TransactionReference = $s10TransactionReference;
        return $this;
    }

    public function setRiskManagementCustomDataList($riskManagementCustomDataList)
    {
        $this->riskManagementCustomDataList = $riskManagementCustomDataList;
        return $this;
    }

    public function setShoppingCartDetail($shoppingCartDetail)
    {
        $this->shoppingCartDetail = $shoppingCartDetail;
        return $this;
    }

    public function setIntermediateServiceProviderId($intermediateServiceProviderId)
    {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;
        return $this;
    }

    public function setSeal($seal)
    {
        $this->seal = $seal;
        return $this;
    }

    public function setKeyVersion($keyVersion)
    {
        $this->keyVersion = $keyVersion;
        return $this;
    }

    public function setSealAlgorithm($sealAlgorithm)
    {
        $this->sealAlgorithm = $sealAlgorithm;
        return $this;
    }

    public function setPaymentMeanBrandSelectionStatus($paymentMeanBrandSelectionStatus)
    {
        $this->paymentMeanBrandSelectionStatus = $paymentMeanBrandSelectionStatus;
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

    public function setCustomerLanguage($customerLanguage)
    {
        $this->customerLanguage = $customerLanguage;
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