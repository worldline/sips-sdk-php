<?php

namespace Worldline\Sips\Paypage;


use Worldline\Sips\Common\Field\Address;
use Worldline\Sips\Common\Field\Contact;
use Worldline\Sips\Common\Field\PaypageData;

class PaypageRequest
{
    public $serviceUrl = "rs-services/v2/paymentInit";
    private $amount;
    private $automaticResponseUrl;
    private $billingAddress;
    private $billingContact;
    private $captureDay;
    private $captureMode;
    private $currencyCode;
    private $customerId;
    private $customerAddress;
    private $customerContact;
    private $customerLanguage;
    private $deliveryAddress;
    private $deliveryContact;
    private $holderAddress;
    private $holderContact;
    private $interfaceVersion;
    private $intermediateServiceProvider;
    private $keyVersion;
    private $merchantId;
    private $merchantWalletId;
    private $normalReturnUrl;
    private $orderChannel;
    private $orderId;
    private $paymentMeanBrandList;
    private $transactionReference;
    private $seal;
    private $statementReference;
    private $templateName;
    private $paypageData;

    /**
     * PaypageRequest constructor.
     */
    public function __construct()
    {
        $this->interfaceVersion = "IR_WS_2.19";
        $this->setTransactionReference($this->generateReference());
    }

    public function generateReference(): string
    {
        $microtime = explode(' ', microtime());
        $microtime[0] = $microtime[0] * 1000000;
        $transactionReference = $microtime[1] . $microtime[0];
        return $transactionReference;
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
     */
    public function setAmount(int $amount)
    {
        $this->amount = $amount;
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
     */
    public function setAutomaticResponseUrl(string $automaticResponseUrl)
    {
        $this->automaticResponseUrl = $automaticResponseUrl;
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
     */
    public function setBillingAddress(Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;
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
     */
    public function setBillingContact(Contact $billingContact)
    {
        $this->billingContact = $billingContact;
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
     */
    public function setCaptureDay(int $captureDay)
    {
        $this->captureDay = $captureDay;
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
     */
    public function setCaptureMode(string $captureMode)
    {
        if (in_array($captureMode, ['AUTHOR_CAPTURE', 'IMMEDIATE', 'VALIDATION'])) {
            $this->captureMode = $captureMode;
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
     */
    public function setCurrencyCode(string $currencyCode)
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
     */
    public function setCustomerId(string $customerId)
    {
        $this->customerId = $customerId;
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
     */
    public function setCustomerAddress(Address $customerAddress)
    {
        $this->customerAddress = $customerAddress;
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
     */
    public function setCustomerContact(Contact $customerContact)
    {
        $this->customerContact = $customerContact;
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
     * @throws \Exception
     */
    public function setCustomerLanguage(string $customerLanguage)
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
        } else {
            throw new \Exception("Invalid currencyCode. Select a valid code from the data dictionary.");
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
     */
    public function setDeliveryAddress(Address $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
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
     */
    public function setDeliveryContact(Contact $deliveryContact)
    {
        $this->deliveryContact = $deliveryContact;
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
     */
    public function setHolderAddress(Address $holderAddress)
    {
        $this->holderAddress = $holderAddress;
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
     */
    public function setHolderContact(Contact $holderContact)
    {
        $this->holderContact = $holderContact;
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
     */
    public function setInterfaceVersion(string $interfaceVersion)
    {
        $this->interfaceVersion = $interfaceVersion;
    }

    /**
     * @return string
     */
    public function getIntermediateServiceProvider() : string
    {
        return $this->intermediateServiceProvider;
    }

    /**
     * @param string $intermediateServiceProvider
     */
    public function setIntermediateServiceProvider(string $intermediateServiceProvider)
    {
        $this->intermediateServiceProvider = $intermediateServiceProvider;
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
     */
    public function setKeyVersion(int $keyVersion)
    {
        $this->keyVersion = $keyVersion;
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
     */
    public function setMerchantId(string $merchantId)
    {
        $this->merchantId = $merchantId;
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
     */
    public function setMerchantWalletId(string $merchantWalletId)
    {
        $this->merchantWalletId = $merchantWalletId;
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
     */
    public function setNormalReturnUrl(string $normalReturnUrl)
    {
        $this->normalReturnUrl = $normalReturnUrl;
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
     */
    public function setOrderChannel(string $orderChannel)
    {
        if (in_array($orderChannel, ["INTERNET", "MOTO", "INAPP"])) {
            $this->orderChannel = $orderChannel;
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
     */
    public function setOrderId(string $orderId)
    {
        $this->orderId = $orderId;
    }

    public function getPaymentMeanBrandList(): array
    {
        return $this->paymentMeanBrandList;
    }

    public function setPaymentMeanBrandList(array $paymentMeanBrandList)
    {
        $this->paymentMeanBrandList = $paymentMeanBrandList;
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
     */
    public function setTransactionReference(string $transactionReference)
    {
        $this->transactionReference = $transactionReference;
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
     */
    public function setSeal(string $seal)
    {
        $this->seal = $seal;
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
     */
    public function setStatementReference(string $statementReference)
    {
        $this->statementReference = $statementReference;
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
     */
    public function setTemplateName(string $templateName)
    {
        $this->templateName = $templateName;
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
     */
    public function setPaypageData(PaypageData $paypageData)
    {
        $this->paypageData = $paypageData;
    }

    /**
     * @return string
     */
    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
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
