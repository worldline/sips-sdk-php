<?php

namespace Worldline\Sips\Paypage;


use Worldline\Sips\Common\Field\Address;
use Worldline\Sips\Common\Field\Contact;
use Worldline\Sips\Common\Field\PaypageData;

/**
 * Class PaypageRequest
 * @package Worldline\Sips\Paypage
 */
class PaypageRequest
{
    /**
     * @var string
     */
    public $serviceUrl = "rs-services/v2/paymentInit";
    /**
     * @var int
     */
    private $amount;
    /**
     * @var string
     */
    private $automaticResponseUrl;
    /**
     * @var Address
     */
    private $billingAddress;
    /**
     * @var Contact
     */
    private $billingContact;
    /**
     * @var int
     */
    private $captureDay;
    /**
     * @var string
     */
    private $captureMode;
    /**
     * @var string
     */
    private $currencyCode;
    /**
     * @var string
     */
    private $customerId;
    /**
     * @var Address
     */
    private $customerAddress;
    /**
     * @var Contact
     */
    private $customerContact;
    /**
     * @var string
     */
    private $customerLanguage;
    /**
     * @var Address
     */
    private $deliveryAddress;
    /**
     * @var Contact
     */
    private $deliveryContact;
    /**
     * @var Address
     */
    private $holderAddress;
    /**
     * @var Contact
     */
    private $holderContact;
    /**
     * @var string
     */
    private $interfaceVersion;
    /**
     * @var string
     */
    private $intermediateServiceProviderId;
    /**
     * @var int
     */
    private $keyVersion;
    /**
     * @var string
     */
    private $merchantId;
    /**
     * @var string
     */
    private $merchantWalletId;
    /**
     * @var string
     */
    private $normalReturnUrl;
    /**
     * @var string
     */
    private $orderChannel;
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var array
     */
    private $paymentMeanBrandList;
    /**
     * @var string
     */
    private $transactionReference;
    /**
     * @var string
     */
    private $seal;
    /**
     * @var string
     */
    private $statementReference;
    /**
     * @var string
     */
    private $templateName;
    /**
     * @var PaypageData
     */
    private $paypageData;

    /**
     * PaypageRequest constructor.
     */
    public function __construct()
    {
        $this->interfaceVersion = "IR_WS_2.19";
        $this->setTransactionReference($this->generateReference());
    }

    /**
     * @return string
     */
    public function generateReference(): string
    {
        $microtime = explode(' ', microtime());
        $microtime[0] = $microtime[0] * 1000000;
        $transactionReference = $microtime[1] . $microtime[0];
        return $transactionReference;
    }

    /**
     * @return string
     */
    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return PaypageRequest
     */
    public function setAmount(int $amount): PaypageRequest
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutomaticResponseUrl(): string
    {
        return $this->automaticResponseUrl;
    }

    /**
     * @param string $automaticResponseUrl
     * @return PaypageRequest
     */
    public function setAutomaticResponseUrl(string $automaticResponseUrl): PaypageRequest
    {
        $this->automaticResponseUrl = $automaticResponseUrl;
        return $this;
    }

    /**
     * @return Address
     */
    public function getBillingAddress(): Address
    {
        return $this->billingAddress;
    }

    /**
     * @param Address $billingAddress
     * @return PaypageRequest
     */
    public function setBillingAddress(Address $billingAddress): PaypageRequest
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getBillingContact(): Contact
    {
        return $this->billingContact;
    }

    /**
     * @param Contact $billingContact
     * @return PaypageRequest
     */
    public function setBillingContact(Contact $billingContact): PaypageRequest
    {
        $this->billingContact = $billingContact;
        return $this;
    }

    /**
     * @return int
     */
    public function getCaptureDay(): int
    {
        return $this->captureDay;
    }

    /**
     * @param int $captureDay
     * @return PaypageRequest
     */
    public function setCaptureDay(int $captureDay): PaypageRequest
    {
        $this->captureDay = $captureDay;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaptureMode(): string
    {
        return $this->captureMode;
    }

    /**
     * @param string $captureMode
     * @return PaypageRequest
     */
    public function setCaptureMode(string $captureMode): PaypageRequest
    {
        if (in_array($captureMode, ['AUTHOR_CAPTURE', 'IMMEDIATE', 'VALIDATION'])) {
            $this->captureMode = $captureMode;
            return $this;
        } else {
            throw new \InvalidArgumentException("Invalid captureMode. Choose between AUTHOR_CAPTURE, IMMEDIATE or VALIDATION.");
        }
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return PaypageRequest
     */
    public function setCurrencyCode(string $currencyCode): PaypageRequest
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
            return $this;
        } elseif (in_array($currencyCode, $validCurrencyCodes)) {
            $this->currencyCode = $currencyCode;
            return $this;
        } else {
            throw new \InvalidArgumentException("Invalid currencyCode. Select a valid code from the data dictionary.");
        }
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * @param string $customerId
     * @return PaypageRequest
     */
    public function setCustomerId(string $customerId): PaypageRequest
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return Address
     */
    public function getCustomerAddress(): Address
    {
        return $this->customerAddress;
    }

    /**
     * @param Address $customerAddress
     * @return PaypageRequest
     */
    public function setCustomerAddress(Address $customerAddress): PaypageRequest
    {
        $this->customerAddress = $customerAddress;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getCustomerContact(): Contact
    {
        return $this->customerContact;
    }

    /**
     * @param Contact $customerContact
     * @return PaypageRequest
     */
    public function setCustomerContact(Contact $customerContact): PaypageRequest
    {
        $this->customerContact = $customerContact;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerLanguage(): string
    {
        return $this->customerLanguage;
    }

    /**
     * @param string $customerLanguage
     * @return PaypageRequest
     */
    public function setCustomerLanguage(string $customerLanguage): PaypageRequest
    {
        $validCustomerLanguages = [
            "bg",
            "br",
            "cs",
            "da",
            "de",
            "el",
            "en",
            "es",
            "et",
            "fi",
            "fr",
            "hi",
            "hr",
            "hu",
            "it",
            "ja",
            "ko",
            "lt",
            "lv",
            "nl",
            "no",
            "pl",
            "pt",
            "ro",
            "ru",
            "sk",
            "sl",
            "sv",
            "tr",
            "tr",
            "uk",
            "zh"
        ];
        if (in_array($customerLanguage, $validCustomerLanguages)) {
            $this->customerLanguage = $customerLanguage;
            return $this;
        } else {
            throw new \InvalidArgumentException("Invalid customerLanguage. Select a valid code from the data dictionary.");
        }
    }

    /**
     * @return Address
     */
    public function getDeliveryAddress(): Address
    {
        return $this->deliveryAddress;
    }

    /**
     * @param Address $deliveryAddress
     * @return PaypageRequest
     */
    public function setDeliveryAddress(Address $deliveryAddress): PaypageRequest
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getDeliveryContact(): Contact
    {
        return $this->deliveryContact;
    }

    /**
     * @param Contact $deliveryContact
     * @return PaypageRequest
     */
    public function setDeliveryContact(Contact $deliveryContact): PaypageRequest
    {
        $this->deliveryContact = $deliveryContact;
        return $this;
    }

    /**
     * @return Address
     */
    public function getHolderAddress(): Address
    {
        return $this->holderAddress;
    }

    /**
     * @param Address $holderAddress
     * @return PaypageRequest
     */
    public function setHolderAddress(Address $holderAddress): PaypageRequest
    {
        $this->holderAddress = $holderAddress;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getHolderContact(): Contact
    {
        return $this->holderContact;
    }

    /**
     * @param Contact $holderContact
     * @return PaypageRequest
     */
    public function setHolderContact(Contact $holderContact): PaypageRequest
    {
        $this->holderContact = $holderContact;
        return $this;
    }

    /**
     * @return string
     */
    public function getInterfaceVersion(): string
    {
        return $this->interfaceVersion;
    }

    /**
     * @param string $interfaceVersion
     * @return PaypageRequest
     */
    public function setInterfaceVersion(string $interfaceVersion): PaypageRequest
    {
        $this->interfaceVersion = $interfaceVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntermediateServiceProviderId(): string
    {
        return $this->intermediateServiceProviderId;
    }

    /**
     * @param string $intermediateServiceProviderId
     * @return PaypageRequest
     */
    public function setIntermediateServiceProviderId(string $intermediateServiceProviderId): PaypageRequest
    {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;
        return $this;
    }

    /**
     * @return int
     */
    public function getKeyVersion(): int
    {
        return $this->keyVersion;
    }

    /**
     * @param int $keyVersion
     * @return PaypageRequest
     */
    public function setKeyVersion(int $keyVersion): PaypageRequest
    {
        $this->keyVersion = $keyVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    /**
     * @param string $merchantId
     * @return PaypageRequest
     */
    public function setMerchantId(string $merchantId): PaypageRequest
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantWalletId(): string
    {
        return $this->merchantWalletId;
    }

    /**
     * @param string $merchantWalletId
     * @return PaypageRequest
     */
    public function setMerchantWalletId(string $merchantWalletId): PaypageRequest
    {
        $this->merchantWalletId = $merchantWalletId;
        return $this;
    }

    /**
     * @return string
     */
    public function getNormalReturnUrl(): string
    {
        return $this->normalReturnUrl;
    }

    /**
     * @param string $normalReturnUrl
     * @return PaypageRequest
     */
    public function setNormalReturnUrl(string $normalReturnUrl): PaypageRequest
    {
        $this->normalReturnUrl = $normalReturnUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderChannel(): string
    {
        return $this->orderChannel;
    }

    /**
     * @param string $orderChannel
     * @return PaypageRequest
     */
    public function setOrderChannel(string $orderChannel): PaypageRequest
    {
        if (in_array($orderChannel, ["INTERNET", "MOTO", "INAPP"])) {
            $this->orderChannel = $orderChannel;
            return $this;
        } else {
            throw new \InvalidArgumentException("Invalid orderChannel. Choose between INTERNET, MOTO or INAPP");
        }
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return PaypageRequest
     */
    public function setOrderId(string $orderId): PaypageRequest
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return array
     */
    public function getPaymentMeanBrandList(): array
    {
        return $this->paymentMeanBrandList;
    }

    /**
     * @param array $paymentMeanBrandList
     * @return PaypageRequest
     */
    public function setPaymentMeanBrandList(array $paymentMeanBrandList): PaypageRequest
    {
        $this->paymentMeanBrandList = $paymentMeanBrandList;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionReference(): string
    {
        return $this->transactionReference;
    }

    /**
     * @param string $transactionReference
     * @return PaypageRequest
     */
    public function setTransactionReference(string $transactionReference): PaypageRequest
    {
        $this->transactionReference = $transactionReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeal(): string
    {
        return $this->seal;
    }

    /**
     * @param string $seal
     * @return PaypageRequest
     */
    public function setSeal(string $seal): PaypageRequest
    {
        $this->seal = $seal;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatementReference(): string
    {
        return $this->statementReference;
    }

    /**
     * @param string $statementReference
     * @return PaypageRequest
     */
    public function setStatementReference(string $statementReference): PaypageRequest
    {
        $this->statementReference = $statementReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName(): string
    {
        return $this->templateName;
    }

    /**
     * @param string $templateName
     * @return PaypageRequest
     */
    public function setTemplateName(string $templateName): PaypageRequest
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * @return PaypageData
     */
    public function getPaypageData(): PaypageData
    {
        return $this->paypageData;
    }

    /**
     * @param PaypageData $paypageData
     * @return PaypageRequest
     */
    public function setPaypageData(PaypageData $paypageData): PaypageRequest
    {
        $this->paypageData = $paypageData;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        foreach ($this as $key => $value) {
            if ($value != null && $key != "serviceUrl" && $key != "paymentMeanBrandList") {
                if (is_int($value) || is_string($value)) {
                    $array[$key] = $value;
                } else {
                    $array[$key] = $value->toArray();
                }
            } elseif ($key == "paymentMeanBrandList" && !is_null($value)) {
                $array[$key] = $value;
            }
        }
        ksort($array);

        return $array;
    }

}
