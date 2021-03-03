<?php

namespace Worldline\Sips\Paypage;


use Worldline\Sips\Common\Field\Address;
use Worldline\Sips\Common\Field\Contact;
use Worldline\Sips\Common\Field\PaypageData;
use Worldline\Sips\SipsMessage;

/**
 * Class PaypageRequest
 * @package Worldline\Sips\Paypage
 */
class PaypageRequest extends SipsMessage
{
    /**
     * Transaction amount. The amount must be transmitted in the smallest unit of currency.
     * For example in euros: an amount of EUR 10.50 must be transmitted in the form 1050. 
     * @var int
     */
    protected $amount;
    /**
     * Contains the information on the cardholder's authentication.
     * @var string
     * @toto Create the container
     */
    protected $authenticationData;
    /**
     * URL provided by the merchant and used by the payment server to automatically notify the merchant of the result of the transaction online.
     * @var string
     */
    protected $automaticResponseUrl;
    /**
     * Contains the billing address information for the buyer.
     * @var Address
     */
    protected $billingAddress;
    /**
     * Contains the billing contact's information.
     * @var Contact
     */
    protected $billingContact;
    /**
     * First successful billing date for the customer address. For example, the merchant gives this information to allow the certification of an electronic signature
     * @var string YYYYMMMDD
     */
    protected $billingFirstDate;
    /**
     * Indicator used by the merchant to bypass the dcc procedure.
     * @var string Y/N
     */
    protected $bypassDcc;
    /**
     * Flag indicating that WL Sips must not edit the ticket receipt. This action is at charge of the trader. At the end of the payment, the customer is directly redirected to the response url from the shop (normalReturnUrl).
     * @var string
     */
    protected $bypassReceiptPage;
    /**
     * Deadline for settlement. 
     * @var int
     */
    protected $captureDay;
    /**
     * Payment collection method for the transaction.
     * @var string
     * @see \Worldline\Sips\Values\CaptureMode
     */
    protected $captureMode;
    /**
     * Currency code for the transaction. This code is ISO 4217 compatible.
     * @var string
     * @see Worldline\Sips\Values\CurrencyCode
     */
    protected $currencyCode;
    /**
     * Date of a 3D Secure transaction successfuly realised for the customer. For example, the merchant gives this information to allow the certification of an electronic signature.
     * @var string YYYYMMDD
     */
    protected $customer3DSTransactionDate;
    /**
     * Contains information from the customer's account at the merchant (date of creation, number of transactions in the last 24h, ...).
     * @var \Worldline\Sips\Common\Field\CustomerAccountHistoric
     */
    protected $customerAccountHistoric;
    /**
     * Contains the customer's address information.
     * @var Address
     */
    protected $customerAddress;
    /**
     * Number of billing realised for the customer address. For example, the merchant gives this information to allow the certification of an electronic signature.
     * @var integer
     */
    protected $customerBillingNb;
    /**
     * Contains the customer's information.
     * @var Contact
     */
    protected $customerContact;
    /**
     * Contains the customer's information.
     * @var \Worldline\Sips\Common\Field\Contact
     */
    protected $customerData;
    /**
     * Successful delivery flag for the customer. For example, the merchant gives this information to allow the certification of an electronic signature.
     * @var string Y/N
     */
    protected $customerDeliverySuccessFlag;
    /**
     * Deprecated, replaced by "email" in the container customerContact.
     * @var string
     * @deprecated
     */
    protected $customerEmail;
    /**
     * Customer identifier
     * @var string
     */
    protected $customerId;
    /**
     * Buyer's IP address.
     * @var string
     */
    protected $customerIpAddress;
    /**
     * Language of the user, used on the payment pages.
     * @var string
     * @see Worldline\Sips\Values\CustomerLanguage
     */
    protected $customerLanguage;
    /**
     * Method used to validate the customer phone number. For example, the merchant gives this information to allow the certification of an electronic signature.
     * @var string
     */
    protected $customerPhoneValidationMethod;
    /**
     * Online registration date of the customer. For example, the merchant gives this information to allow the certification of an electronic signature.
     * @var string YYYYMMDD
     */
    protected $customerRegistrationDateOnline;
    /**
     * On site (Point Of Sale) registration date of the customer. For example, the merchant gives this information to allow the certification of an electronic signature.
     * @var string YYYYMMDD
     */
    protected $customerRegistrationDateProxi;
    /**
     * ** NOT DOCUMENTED **
     * @var string
     * @todo
     */
    protected $customerTimestampIpAddress;
    /**
     * Contains the delivery address information.
     * @var Address
     */
    protected $deliveryAddress;
    /**
     * Contains the delivery contact's information.
     * @var Contact
     */
    protected $deliveryContact;
    /**
     * Contains the delivery information.
     * @var \Worldline\Sips\Common\Field\DeliveryData
     */
    protected $deliveryData;
    /**
     * First successful delivery date at the customer address. For example, the merchant gives this information to allow the certification of an electronic signature.
     * @var string YYYYMMDD
     */
    protected $deliveryFirstDate;
    /**
     * Date when the customer has provided the proof to the merchant. For example, the merchant gives this information to allow the certification of an electronic signature.
     * @var string YYYYMMDD
     */
    protected $evidenceAcquisitionDate;
    /**
     * Number of the proof provided by the customer. For example, the merchant gives this information to allow the certification of an electronic signature.
     * @var string
     */
    protected $evidenceNumber;
    /**
     * Type of proof provided by the customer. For example, the merchant gives this information to allow the certification of an electronic signature.
     * @var string
     */
    protected $evidenceType;
    /**
     * Contains the transaction's antifraud rules parameters, allowing the merchant to dynamically customise the rules registered in the merchant configuration.
     * @var \Worldline\Sips\Common\Field\FraudData
     */
    protected $fraudData;
    /**
     * Cryptographic function used to calculate the hashPan.
     * @var string
     * @var \Worldline\Sips\Common\Field\HashAlgorithm
     */
    protected $hashAlgorithm1;
    /**
     * Cryptographic function used to calculate the hashPan.
     * @var string
     * @var \Worldline\Sips\Common\Field\HashAlgorithm
     */
    protected $hashAlgorithm2;
    /**
     * Random value (called a seed) provided by the merchant to calculate the hashPan.
     * @var string
     */
    protected $hashSalt1;
    /**
     * Random value (called a seed) provided by the merchant to calculate the hashPan.
     * @var string
     */
    protected $hashSalt2;
    /**
     * Additional reference of the holder that is communicated to the acquirer system or the issuer system in order to make some additional dedicated checks.
     * @var string
     */
    protected $holderAdditionalReference;
    /**
     * Contains the payment mean holder's address information.
     * @var Address
     */
    protected $holderAddress;
    /**
     * Contains contact details of the payment mean holder.
     * @var Contact
     */
    protected $holderContact;
    /**
     * Contains the payment mean holder's information.
     * @var string
     * @todo create the container 
     */
    protected $holderData;
    /**
     * Contains the information making it possible to make a payment in instalments.
     * @var string
     * @todo
     */
    protected $instalmentData;
    /**
     * Identifier of the Service used by the merchant for the exchanges with the WL Sips platform.
     * @var string
     */
    protected $intermediateServiceProviderId;
    /**
     * Invoice reference.
     * @var string
     */
    protected $invoiceReference;
    /**
     * Mandate number.
     * @var string
     */
    protected $mandateId;
    /**
     * Merchant name (equivalent to the Merchant name registered during the Shop enrollment).
     * If indicated in the payment request, allows to change the name displayed on the 3-D Secure authentication page.
     * @var string
     */
    protected $merchantName;
    /**
     * Merchant's session number. Allows consolidation between requests and responses.
     * @var string
     */
    protected $merchantSessionId;
    /**
     * Date and time of the transaction, set by the merchant at the merchant's local time (in the merchant's time zone)
     * @var string date time ISO8601
     */
    protected $merchantTransactionDateTime;
    /**
     * Merchant web site URL.
     * @var string
     */
    protected $merchantUrl;
    /**
     * Customer's Wallet identifier.
     * @var string
     */
    protected $merchantWalletId;
    /**
     * Merchant's URL for the return to the shop.
     * @var string
     */
    protected $normalReturnUrl;
    /**
     * Order channel used (Internet, Telephone, Post, Fax etc), Internet is the default value.
     * Use of this field should be reconciled with the conditions defined in the acquirer contract. 
     * @var string
     * @todo Create the values
     */
    protected $orderChannel;
    /**
     * Contains specific information regarding the order context
     * @var string
     * @todo Create the container
     */
    protected $orderContext;
    /**
     * Order number associated with the payment transaction.
     * @var string
     */
    protected $orderId;
    /**
     * List of payment methods accepted for a transaction.
     * If this field is not filled out, the WL Sips server recovers the list of payment methods available for the configuration of the shop.
     * @var string
     * @see \Worldline\Sips\Values\PaymentMeanBrandType
     */
    protected $paymentMeanBrandList;
    /**
     * Contains specific information regarding the payment method used by the buyer.
     * @var string
     * @todo Create the container
     */
    protected $paymentMeanData;
    /**
     * Type of payment (per operation, 1st recurring payment etc).
     * @var string
     * @see \Worldline\Sips\Values\PaymentPattern
     */
    protected $paymentPattern;
    /**
     * Contains the parameters for the payment pages, allowing the merchant to dynamically customise the options on payment pages.
     * @var PaypageData
     */
    protected $paypageData;
    /**
     * Encoding type of the response expected by the merchant.
     * @var string
     * @todo create the values
     */
    protected $responseEncoding;
    /**
     * Identifier of the merchant's secret key used to calculate the imprint of the response.
     * @var integer
     */
    protected $responseKeyVersion;
    /**
     * Context of a buyer's order.
     * All information transmitted in this field by the merchant during the payment request is sent back in the response without amendment.
     * Attention : the following characters "|", "«", "»", and «"» are forbidden in this field. If they are used, they will be replaced by blanks
     * @var string
     */
    protected $returnContext;
    /**
     * List of merchant privative information transmitted by the a Business Score scoring system.
     * @var string
     */
    protected $riskManagementCustomDataList;
    /**
     * Contains the identification of the original transaction (to be compliant with WL Sips 1.0).
     * @var \Worldline\Sips\Common\Field\S10TransactionReference
     */
    protected $s10TransactionReference;
    /**
     * Information specific to the basket.
     * @var \Worldline\Sips\Common\Field\ShoppingCartDetail
     */
    protected $shoppingCartDetail;
    /**
     * Reference provided by the merchant which is sent in the payment collection flow. This reference appears on the account statements of the cardholder.
     * @var string
     */
    protected $statementReference;
    /**
     * Contains address information of a merchant of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     * @var \Worldline\Sips\Common\Field\Address
     */
    protected $subMerchantAddress;
    /**
     * MCC Code of the vendor at the Payment Facilitator in a context of Collecting offer or a Marketplace offer.
     * @var string
     */
    protected $subMerchantCategoryCode;
    /**
     * Merchant contract number of the Payment Facilitator in the context of Collecting offer or a Marketplace offer (only used for Cetelem).
     * @var string
     */
    protected $subMerchantContractNumber;
    /**
     * Merchant identifier of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     * @var string
     */
    protected $subMerchantId;
    /**
     * Legal identifier of vendor as merchant of the Payment Facilitator, expressed in the legal codification specific to each country.
     * @var string
     */
    protected $subMerchantLegalId;
    /**
     * Name of the merchant of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     * @var string
     */
    protected $subMerchantName;
    /**
     * Short name of the merchant of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     * @var string
     */
    protected $subMerchantShortName;
    /**
     * Name of the file corresponding to the style sheet (name of the zip file) used to personalize the payment pages. 
     * @var string
     */
    protected $templateName;
    /**
     * Indicates the players in the transaction.
     * @var string
     * @todo create the values
     */
    protected $transactionActors;
    /**
     * Origin of a transaction (for example: name of the programme), set by the merchant. Exemple: "Website A v1.32".
     * @var string
     */
    protected $transactionOrigin;
    /**
     * The merchant can choose of referencing his transactions by a transactionId or a transactionReference.
     * transactionReference uniquely identifies a transaction throughout the life of the shop. 
     * @var string
     */
    protected $transactionReference;
    /**
     * Contains specific information regarding the travel.
     * @var string
     * @todo create the container
     */
    protected $travelContext;
    /**
     * Payment value date
     * @var string YYYYMMDD
     */
    protected $valueDate;

    const PAYMENT_MEAN_BRAND_CB = 'CB';
    const PAYMENT_MEAN_BRAND_MASTERCARD = 'MASTERCARD';
    const PAYMENT_MEAN_BRAND_VISA = 'VISA';
    const PAYMENT_MEAN_BRAND_AMEX = 'AMEX';

    /**
     * PaypageRequest constructor.
     */
    public function __construct()
    {
        $this->connecter = \Worldline\Sips\Common\SipsEnvironment::PAYPAGE;
        $this->serviceUrl       = "rs-services/v2/paymentInit";
        $this->interfaceVersion = "IR_WS_2.35";
        $this->setTransactionReference($this->generateReference());
    }

    /**
     * Let SIPS server generated the transaction key
     */
    public function useAutoGeneratedTransactionKey()
    {
        $this->setTransactionReference(null);
    }

    /**
     * @return string
     */
    public function generateReference(): string
    {
        $microtime            = explode(' ', microtime());
        $microtime[0]         = $microtime[0] * 1000000;
        $transactionReference = $microtime[1] . $microtime[0];
        return $transactionReference;
    }

    /**
     * @return int|null
     */
    public function getAmount(): ?int
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
     * @return string|null
     */
    public function getAutomaticResponseUrl(): ?string
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
     * @return Address|null
     */
    public function getBillingAddress(): ?Address
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
     * @return Contact|null
     */
    public function getBillingContact(): ?Contact
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
     * @return int|null
     */
    public function getCaptureDay(): ?int
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
     * @return string|null
     */
    public function getCaptureMode(): ?string
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
     * @return string|null
     */
    public function getCurrencyCode(): ?string
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
     * @return string|null
     */
    public function getCustomerId(): ?string
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
    public function getCustomerAddress(): ?Address
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
     * @return Contact|null
     */
    public function getCustomerContact(): ?Contact
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
     * @return string|null
     */
    public function getCustomerLanguage(): ?string
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
    public function getDeliveryAddress(): ?Address
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
     * @return Contact|null
     */
    public function getDeliveryContact(): ?Contact
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
    public function getHolderAddress(): ?Address
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
     * @return Contact|null
     */
    public function getHolderContact(): ?Contact
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
     * @return string|null
     */
    public function getIntermediateServiceProviderId(): ?string
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
     * @return string|null
     */
    public function getMerchantWalletId(): ?string
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
     * @return string|null
     */
    public function getNormalReturnUrl(): ?string
    {
        return $this->normalReturnUrl;
    }

    /**
     *
     * @return bool
     */
    public function getBypassReceiptPage(): bool
    {
        return ($this->bypassReceiptPage === 'true');
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
     * @return string|null
     */
    public function getOrderChannel(): ?string
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
     * @return string|null
     */
    public function getOrderId(): ?string
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
     * @return array|null
     */
    public function getPaymentMeanBrandList(): ?array
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
     * @return string|null
     */
    public function getTransactionReference(): ?string
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
     * @return string|null
     */
    public function getStatementReference(): ?string
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
     * @return string|null
     */
    public function getTemplateName(): ?string
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
    public function getPaypageData(): ?PaypageData
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
     *
     * @param bool $bypass
     */
    public function setBypassReceiptPage(bool $bypass)
    {
        // Seems that this parameter is a string (A5, restricted value)
        $this->bypassReceiptPage = ($bypass ? 'true' : 'false');
    }
    
    public function getS10TransactionReference(): \Worldline\Sips\Common\Field\S10TransactionReference
    {
        return $this->s10TransactionReference;
    }

    public function setS10TransactionReference(\Worldline\Sips\Common\Field\S10TransactionReference $s10TransactionReference)
    {
        unset($this->transactionReference);
        $this->s10TransactionReference = $s10TransactionReference;
        return $this;
    }

    /**
     * Get the value of customerEmail
     *
     * @return  string
     * @deprecated
     */
    public function getCustomerEmail(): string
    {
        trigger_error('Method ' . __METHOD__ . ' is deprecated', E_USER_DEPRECATED);
        return $this->customerEmail;
    }

    /**
     * Set the value of customerEmail
     *
     * @param  string  $customerEmail
     * @deprecated
     *
     * @return  self
     */
    public function setCustomerEmail(string $customerEmail)
    {
        trigger_error('Method ' . __METHOD__ . ' is deprecated', E_USER_DEPRECATED);
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * Get the value of fraudData
     *
     * @return  \Worldline\Sips\Common\Field\FraudData
     */
    public function getFraudData(): \Worldline\Sips\Common\Field\FraudData
    {
        return $this->fraudData;
    }

    /**
     * Set the value of fraudData
     *
     * @param  \Worldline\Sips\Common\Field\FraudData  $fraudData
     *
     * @return  self
     */
    public function setFraudData(\Worldline\Sips\Common\Field\FraudData $fraudData)
    {
        $this->fraudData = $fraudData;

        return $this;
    }

    /**
     * Get contains the information on the cardholder's authentication.
     *
     * @return  string
     */
    public function getAuthenticationData()
    {
        return $this->authenticationData;
    }

    /**
     * Set contains the information on the cardholder's authentication.
     *
     * @param  string  $authenticationData  Contains the information on the cardholder's authentication.
     *
     * @return  self
     */
    public function setAuthenticationData(string $authenticationData)
    {
        $this->authenticationData = $authenticationData;

        return $this;
    }

    /**
     * Get yYYYMMMDD
     *
     * @return  string
     */
    public function getBillingFirstDate()
    {
        return $this->billingFirstDate;
    }

    /**
     * Set yYYYMMMDD
     *
     * @param  string  $billingFirstDate  YYYYMMMDD
     *
     * @return  self
     */
    public function setBillingFirstDate(string $billingFirstDate)
    {
        $this->billingFirstDate = $billingFirstDate;

        return $this;
    }

    /**
     * Get y/N
     *
     * @return  string
     */
    public function getBypassDcc()
    {
        return $this->bypassDcc;
    }

    /**
     * Set y/N
     *
     * @param  string  $bypassDcc  Y/N
     *
     * @return  self
     */
    public function setBypassDcc(string $bypassDcc)
    {
        $this->bypassDcc = $bypassDcc;

        return $this;
    }

    /**
     * Get yYYYMMDD
     *
     * @return  string
     */
    public function getCustomer3DSTransactionDate()
    {
        return $this->customer3DSTransactionDate;
    }

    /**
     * Set yYYYMMDD
     *
     * @param  string  $customer3DSTransactionDate  YYYYMMDD
     *
     * @return  self
     */
    public function setCustomer3DSTransactionDate(string $customer3DSTransactionDate)
    {
        $this->customer3DSTransactionDate = $customer3DSTransactionDate;

        return $this;
    }

    /**
     * Get contains information from the customer's account at the merchant (date of creation, number of transactions in the last 24h, ...).
     *
     * @return  \Worldline\Sips\Common\Field\CustomerAccountHistoric
     */
    public function getCustomerAccountHistoric()
    {
        return $this->customerAccountHistoric;
    }

    /**
     * Set contains information from the customer's account at the merchant (date of creation, number of transactions in the last 24h, ...).
     *
     * @param  \Worldline\Sips\Common\Field\CustomerAccountHistoric  $customerAccountHistoric  Contains information from the customer's account at the merchant (date of creation, number of transactions in the last 24h, ...).
     *
     * @return  self
     */
    public function setCustomerAccountHistoric(\Worldline\Sips\Common\Field\CustomerAccountHistoric $customerAccountHistoric)
    {
        $this->customerAccountHistoric = $customerAccountHistoric;

        return $this;
    }

    /**
     * Get number of billing realised for the customer address. For example, the merchant gives this information to allow the certification of an electronic signature.
     *
     * @return  integer
     */
    public function getCustomerBillingNb()
    {
        return $this->customerBillingNb;
    }

    /**
     * Set number of billing realised for the customer address. For example, the merchant gives this information to allow the certification of an electronic signature.
     *
     * @param  integer  $customerBillingNb  Number of billing realised for the customer address. For example, the merchant gives this information to allow the certification of an electronic signature.
     *
     * @return  self
     */
    public function setCustomerBillingNb($customerBillingNb)
    {
        $this->customerBillingNb = $customerBillingNb;

        return $this;
    }

    /**
     * Get contains the customer's information.
     *
     * @return  \Worldline\Sips\Common\Field\Contact
     */
    public function getCustomerData()
    {
        return $this->customerData;
    }

    /**
     * Set contains the customer's information.
     *
     * @param  \Worldline\Sips\Common\Field\Contact  $customerData  Contains the customer's information.
     *
     * @return  self
     */
    public function setCustomerData(\Worldline\Sips\Common\Field\Contact $customerData)
    {
        $this->customerData = $customerData;

        return $this;
    }

    /**
     * Get y/N
     *
     * @return  string
     */
    public function getCustomerDeliverySuccessFlag()
    {
        return $this->customerDeliverySuccessFlag;
    }

    /**
     * Set y/N
     *
     * @param  string  $customerDeliverySuccessFlag  Y/N
     *
     * @return  self
     */
    public function setCustomerDeliverySuccessFlag(string $customerDeliverySuccessFlag)
    {
        $this->customerDeliverySuccessFlag = $customerDeliverySuccessFlag;

        return $this;
    }

    /**
     * Get buyer's IP address.
     *
     * @return  string
     */
    public function getCustomerIpAddress()
    {
        return $this->customerIpAddress;
    }

    /**
     * Set buyer's IP address.
     *
     * @param  string  $customerIpAddress  Buyer's IP address.
     *
     * @return  self
     */
    public function setCustomerIpAddress(string $customerIpAddress)
    {
        $this->customerIpAddress = $customerIpAddress;

        return $this;
    }

    /**
     * Get method used to validate the customer phone number. For example, the merchant gives this information to allow the certification of an electronic signature.
     *
     * @return  string
     */
    public function getCustomerPhoneValidationMethod()
    {
        return $this->customerPhoneValidationMethod;
    }

    /**
     * Set method used to validate the customer phone number. For example, the merchant gives this information to allow the certification of an electronic signature.
     *
     * @param  string  $customerPhoneValidationMethod  Method used to validate the customer phone number. For example, the merchant gives this information to allow the certification of an electronic signature.
     *
     * @return  self
     */
    public function setCustomerPhoneValidationMethod(string $customerPhoneValidationMethod)
    {
        $this->customerPhoneValidationMethod = $customerPhoneValidationMethod;

        return $this;
    }

    /**
     * Get yYYYMMDD
     *
     * @return  string
     */
    public function getCustomerRegistrationDateOnline()
    {
        return $this->customerRegistrationDateOnline;
    }

    /**
     * Set yYYYMMDD
     *
     * @param  string  $customerRegistrationDateOnline  YYYYMMDD
     *
     * @return  self
     */
    public function setCustomerRegistrationDateOnline(string $customerRegistrationDateOnline)
    {
        $this->customerRegistrationDateOnline = $customerRegistrationDateOnline;

        return $this;
    }

    /**
     * Get yYYYMMDD
     *
     * @return  string
     */
    public function getCustomerRegistrationDateProxi()
    {
        return $this->customerRegistrationDateProxi;
    }

    /**
     * Set yYYYMMDD
     *
     * @param  string  $customerRegistrationDateProxi  YYYYMMDD
     *
     * @return  self
     */
    public function setCustomerRegistrationDateProxi(string $customerRegistrationDateProxi)
    {
        $this->customerRegistrationDateProxi = $customerRegistrationDateProxi;

        return $this;
    }

    /**
     * Get ** NOT DOCUMENTED **
     *
     * @return  string
     */
    public function getCustomerTimestampIpAddress()
    {
        return $this->customerTimestampIpAddress;
    }

    /**
     * Set ** NOT DOCUMENTED **
     *
     * @param  string  $customerTimestampIpAddress  ** NOT DOCUMENTED **
     *
     * @return  self
     */
    public function setCustomerTimestampIpAddress(string $customerTimestampIpAddress)
    {
        $this->customerTimestampIpAddress = $customerTimestampIpAddress;

        return $this;
    }

    /**
     * Get contains the delivery information.
     *
     * @return  \Worldline\Sips\Common\Field\DeliveryData
     */
    public function getDeliveryData()
    {
        return $this->deliveryData;
    }

    /**
     * Set contains the delivery information.
     *
     * @param  \Worldline\Sips\Common\Field\DeliveryData  $deliveryData  Contains the delivery information.
     *
     * @return  self
     */
    public function setDeliveryData(\Worldline\Sips\Common\Field\DeliveryData $deliveryData)
    {
        $this->deliveryData = $deliveryData;

        return $this;
    }

    /**
     * Get yYYYMMDD
     *
     * @return  string
     */
    public function getDeliveryFirstDate()
    {
        return $this->deliveryFirstDate;
    }

    /**
     * Set yYYYMMDD
     *
     * @param  string  $deliveryFirstDate  YYYYMMDD
     *
     * @return  self
     */
    public function setDeliveryFirstDate(string $deliveryFirstDate)
    {
        $this->deliveryFirstDate = $deliveryFirstDate;

        return $this;
    }

    /**
     * Get type of proof provided by the customer. For example, the merchant gives this information to allow the certification of an electronic signature.
     *
     * @return  string
     */
    public function getEvidenceType()
    {
        return $this->evidenceType;
    }

    /**
     * Set type of proof provided by the customer. For example, the merchant gives this information to allow the certification of an electronic signature.
     *
     * @param  string  $evidenceType  Type of proof provided by the customer. For example, the merchant gives this information to allow the certification of an electronic signature.
     *
     * @return  self
     */
    public function setEvidenceType(string $evidenceType)
    {
        $this->evidenceType = $evidenceType;

        return $this;
    }

    /**
     * Get number of the proof provided by the customer. For example, the merchant gives this information to allow the certification of an electronic signature.
     *
     * @return  string
     */
    public function getEvidenceNumber()
    {
        return $this->evidenceNumber;
    }

    /**
     * Set number of the proof provided by the customer. For example, the merchant gives this information to allow the certification of an electronic signature.
     *
     * @param  string  $evidenceNumber  Number of the proof provided by the customer. For example, the merchant gives this information to allow the certification of an electronic signature.
     *
     * @return  self
     */
    public function setEvidenceNumber(string $evidenceNumber)
    {
        $this->evidenceNumber = $evidenceNumber;

        return $this;
    }

    /**
     * Get yYYYMMDD
     *
     * @return  string
     */
    public function getEvidenceAcquisitionDate()
    {
        return $this->evidenceAcquisitionDate;
    }

    /**
     * Set yYYYMMDD
     *
     * @param  string  $evidenceAcquisitionDate  YYYYMMDD
     *
     * @return  self
     */
    public function setEvidenceAcquisitionDate(string $evidenceAcquisitionDate)
    {
        $this->evidenceAcquisitionDate = $evidenceAcquisitionDate;

        return $this;
    }

    /**
     * Get additional reference of the holder that is communicated to the acquirer system or the issuer system in order to make some additional dedicated checks.
     *
     * @return  string
     */
    public function getHolderAdditionalReference()
    {
        return $this->holderAdditionalReference;
    }

    /**
     * Set additional reference of the holder that is communicated to the acquirer system or the issuer system in order to make some additional dedicated checks.
     *
     * @param  string  $holderAdditionalReference  Additional reference of the holder that is communicated to the acquirer system or the issuer system in order to make some additional dedicated checks.
     *
     * @return  self
     */
    public function setHolderAdditionalReference(string $holderAdditionalReference)
    {
        $this->holderAdditionalReference = $holderAdditionalReference;

        return $this;
    }

    /**
     * Get random value (called a seed) provided by the merchant to calculate the hashPan.
     *
     * @return  string
     */
    public function getHashSalt2()
    {
        return $this->hashSalt2;
    }

    /**
     * Set random value (called a seed) provided by the merchant to calculate the hashPan.
     *
     * @param  string  $hashSalt2  Random value (called a seed) provided by the merchant to calculate the hashPan.
     *
     * @return  self
     */
    public function setHashSalt2(string $hashSalt2)
    {
        $this->hashSalt2 = $hashSalt2;

        return $this;
    }

    /**
     * Get random value (called a seed) provided by the merchant to calculate the hashPan.
     *
     * @return  string
     */
    public function getHashSalt1()
    {
        return $this->hashSalt1;
    }

    /**
     * Set random value (called a seed) provided by the merchant to calculate the hashPan.
     *
     * @param  string  $hashSalt1  Random value (called a seed) provided by the merchant to calculate the hashPan.
     *
     * @return  self
     */
    public function setHashSalt1(string $hashSalt1)
    {
        $this->hashSalt1 = $hashSalt1;

        return $this;
    }

    /**
     * Get cryptographic function used to calculate the hashPan.
     *
     * @return  string
     */
    public function getHashAlgorithm2()
    {
        return $this->hashAlgorithm2;
    }

    /**
     * Set cryptographic function used to calculate the hashPan.
     *
     * @param  string  $hashAlgorithm2  Cryptographic function used to calculate the hashPan.
     *
     * @return  self
     */
    public function setHashAlgorithm2(string $hashAlgorithm2)
    {
        $this->hashAlgorithm2 = $hashAlgorithm2;

        return $this;
    }

    /**
     * Get cryptographic function used to calculate the hashPan.
     *
     * @return  string
     */
    public function getHashAlgorithm1()
    {
        return $this->hashAlgorithm1;
    }

    /**
     * Set cryptographic function used to calculate the hashPan.
     *
     * @param  string  $hashAlgorithm1  Cryptographic function used to calculate the hashPan.
     *
     * @return  self
     */
    public function setHashAlgorithm1(string $hashAlgorithm1)
    {
        $this->hashAlgorithm1 = $hashAlgorithm1;

        return $this;
    }

    /**
     * Get contains the payment mean holder's information.
     *
     * @return  string
     */
    public function getHolderData()
    {
        return $this->holderData;
    }

    /**
     * Set contains the payment mean holder's information.
     *
     * @param  string  $holderData  Contains the payment mean holder's information.
     *
     * @return  self
     */
    public function setHolderData(string $holderData)
    {
        $this->holderData = $holderData;

        return $this;
    }

    /**
     * Get contains the information making it possible to make a payment in instalments.
     *
     * @return  string
     */
    public function getInstalmentData()
    {
        return $this->instalmentData;
    }

    /**
     * Set contains the information making it possible to make a payment in instalments.
     *
     * @param  string  $instalmentData  Contains the information making it possible to make a payment in instalments.
     *
     * @return  self
     */
    public function setInstalmentData(string $instalmentData)
    {
        $this->instalmentData = $instalmentData;

        return $this;
    }

    /**
     * Get invoice reference.
     *
     * @return  string
     */
    public function getInvoiceReference()
    {
        return $this->invoiceReference;
    }

    /**
     * Set invoice reference.
     *
     * @param  string  $invoiceReference  Invoice reference.
     *
     * @return  self
     */
    public function setInvoiceReference(string $invoiceReference)
    {
        $this->invoiceReference = $invoiceReference;

        return $this;
    }

    /**
     * Get mandate number.
     *
     * @return  string
     */
    public function getMandateId()
    {
        return $this->mandateId;
    }

    /**
     * Set mandate number.
     *
     * @param  string  $mandateId  Mandate number.
     *
     * @return  self
     */
    public function setMandateId(string $mandateId)
    {
        $this->mandateId = $mandateId;

        return $this;
    }

    /**
     * Get if indicated in the payment request, allows to change the name displayed on the 3-D Secure authentication page.
     *
     * @return  string
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * Set if indicated in the payment request, allows to change the name displayed on the 3-D Secure authentication page.
     *
     * @param  string  $merchantName  If indicated in the payment request, allows to change the name displayed on the 3-D Secure authentication page.
     *
     * @return  self
     */
    public function setMerchantName(string $merchantName)
    {
        $this->merchantName = $merchantName;

        return $this;
    }

    /**
     * Get merchant's session number. Allows consolidation between requests and responses.
     *
     * @return  string
     */
    public function getMerchantSessionId()
    {
        return $this->merchantSessionId;
    }

    /**
     * Set merchant's session number. Allows consolidation between requests and responses.
     *
     * @param  string  $merchantSessionId  Merchant's session number. Allows consolidation between requests and responses.
     *
     * @return  self
     */
    public function setMerchantSessionId(string $merchantSessionId)
    {
        $this->merchantSessionId = $merchantSessionId;

        return $this;
    }

    /**
     * Get date time ISO8601
     *
     * @return  string
     */
    public function getMerchantTransactionDateTime()
    {
        return $this->merchantTransactionDateTime;
    }

    /**
     * Set date time ISO8601
     *
     * @param  string  $merchantTransactionDateTime  date time ISO8601
     *
     * @return  self
     */
    public function setMerchantTransactionDateTime(string $merchantTransactionDateTime)
    {
        $this->merchantTransactionDateTime = $merchantTransactionDateTime;

        return $this;
    }

    /**
     * Get merchant web site URL.
     *
     * @return  string
     */
    public function getMerchantUrl()
    {
        return $this->merchantUrl;
    }

    /**
     * Set merchant web site URL.
     *
     * @param  string  $merchantUrl  Merchant web site URL.
     *
     * @return  self
     */
    public function setMerchantUrl(string $merchantUrl)
    {
        $this->merchantUrl = $merchantUrl;

        return $this;
    }

    /**
     * Get contains specific information regarding the order context
     *
     * @return  string
     */
    public function getOrderContext()
    {
        return $this->orderContext;
    }

    /**
     * Set contains specific information regarding the order context
     *
     * @param  string  $orderContext  Contains specific information regarding the order context
     *
     * @return  self
     */
    public function setOrderContext(string $orderContext)
    {
        $this->orderContext = $orderContext;

        return $this;
    }

    /**
     * Get type of payment (per operation, 1st recurring payment etc).
     *
     * @return  string
     */
    public function getPaymentPattern()
    {
        return $this->paymentPattern;
    }

    /**
     * Set type of payment (per operation, 1st recurring payment etc).
     *
     * @param  string  $paymentPattern  Type of payment (per operation, 1st recurring payment etc).
     *
     * @return  self
     */
    public function setPaymentPattern(string $paymentPattern)
    {
        $this->paymentPattern = $paymentPattern;

        return $this;
    }

    /**
     * Get contains specific information regarding the payment method used by the buyer.
     *
     * @return  string
     */
    public function getPaymentMeanData()
    {
        return $this->paymentMeanData;
    }

    /**
     * Set contains specific information regarding the payment method used by the buyer.
     *
     * @param  string  $paymentMeanData  Contains specific information regarding the payment method used by the buyer.
     *
     * @return  self
     */
    public function setPaymentMeanData(string $paymentMeanData)
    {
        $this->paymentMeanData = $paymentMeanData;

        return $this;
    }

    /**
     * Get list of merchant privative information transmitted by the a Business Score scoring system.
     *
     * @return  string
     */
    public function getRiskManagementCustomDataList()
    {
        return $this->riskManagementCustomDataList;
    }

    /**
     * Set list of merchant privative information transmitted by the a Business Score scoring system.
     *
     * @param  string  $riskManagementCustomDataList  List of merchant privative information transmitted by the a Business Score scoring system.
     *
     * @return  self
     */
    public function setRiskManagementCustomDataList(string $riskManagementCustomDataList)
    {
        $this->riskManagementCustomDataList = $riskManagementCustomDataList;

        return $this;
    }

    /**
     * Get attention : the following characters "|", "«", "»", and «"» are forbidden in this field. If they are used, they will be replaced by blanks
     *
     * @return  string
     */
    public function getReturnContext()
    {
        return $this->returnContext;
    }

    /**
     * Set attention : the following characters "|", "«", "»", and «"» are forbidden in this field. If they are used, they will be replaced by blanks
     *
     * @param  string  $returnContext  Attention : the following characters "|", "«", "»", and «"» are forbidden in this field. If they are used, they will be replaced by blanks
     *
     * @return  self
     */
    public function setReturnContext(string $returnContext)
    {
        $this->returnContext = $returnContext;

        return $this;
    }

    /**
     * Get identifier of the merchant's secret key used to calculate the imprint of the response.
     *
     * @return  integer
     */
    public function getResponseKeyVersion()
    {
        return $this->responseKeyVersion;
    }

    /**
     * Set identifier of the merchant's secret key used to calculate the imprint of the response.
     *
     * @param  integer  $responseKeyVersion  Identifier of the merchant's secret key used to calculate the imprint of the response.
     *
     * @return  self
     */
    public function setResponseKeyVersion($responseKeyVersion)
    {
        $this->responseKeyVersion = $responseKeyVersion;

        return $this;
    }

    /**
     * Get encoding type of the response expected by the merchant.
     *
     * @return  string
     */
    public function getResponseEncoding()
    {
        return $this->responseEncoding;
    }

    /**
     * Set encoding type of the response expected by the merchant.
     *
     * @param  string  $responseEncoding  Encoding type of the response expected by the merchant.
     *
     * @return  self
     */
    public function setResponseEncoding(string $responseEncoding)
    {
        $this->responseEncoding = $responseEncoding;

        return $this;
    }

    /**
     * Get information specific to the basket.
     *
     * @return  \Worldline\Sips\Common\Field\ShoppingCartDetail
     */
    public function getShoppingCartDetail()
    {
        return $this->shoppingCartDetail;
    }

    /**
     * Set information specific to the basket.
     *
     * @param  \Worldline\Sips\Common\Field\ShoppingCartDetail  $shoppingCartDetail  Information specific to the basket.
     *
     * @return  self
     */
    public function setShoppingCartDetail(\Worldline\Sips\Common\Field\ShoppingCartDetail $shoppingCartDetail)
    {
        $this->shoppingCartDetail = $shoppingCartDetail;

        return $this;
    }

    /**
     * Get contains address information of a merchant of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     *
     * @return  \Worldline\Sips\Common\Field\Address
     */
    public function getSubMerchantAddress()
    {
        return $this->subMerchantAddress;
    }

    /**
     * Set contains address information of a merchant of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     *
     * @param  \Worldline\Sips\Common\Field\Address  $subMerchantAddress  Contains address information of a merchant of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     *
     * @return  self
     */
    public function setSubMerchantAddress(\Worldline\Sips\Common\Field\Address $subMerchantAddress)
    {
        $this->subMerchantAddress = $subMerchantAddress;

        return $this;
    }

    /**
     * Get mCC Code of the vendor at the Payment Facilitator in a context of Collecting offer or a Marketplace offer.
     *
     * @return  string
     */
    public function getSubMerchantCategoryCode()
    {
        return $this->subMerchantCategoryCode;
    }

    /**
     * Set mCC Code of the vendor at the Payment Facilitator in a context of Collecting offer or a Marketplace offer.
     *
     * @param  string  $subMerchantCategoryCode  MCC Code of the vendor at the Payment Facilitator in a context of Collecting offer or a Marketplace offer.
     *
     * @return  self
     */
    public function setSubMerchantCategoryCode(string $subMerchantCategoryCode)
    {
        $this->subMerchantCategoryCode = $subMerchantCategoryCode;

        return $this;
    }

    /**
     * Get merchant contract number of the Payment Facilitator in the context of Collecting offer or a Marketplace offer (only used for Cetelem).
     *
     * @return  string
     */
    public function getSubMerchantContractNumber()
    {
        return $this->subMerchantContractNumber;
    }

    /**
     * Set merchant contract number of the Payment Facilitator in the context of Collecting offer or a Marketplace offer (only used for Cetelem).
     *
     * @param  string  $subMerchantContractNumber  Merchant contract number of the Payment Facilitator in the context of Collecting offer or a Marketplace offer (only used for Cetelem).
     *
     * @return  self
     */
    public function setSubMerchantContractNumber(string $subMerchantContractNumber)
    {
        $this->subMerchantContractNumber = $subMerchantContractNumber;

        return $this;
    }

    /**
     * Get merchant identifier of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     *
     * @return  string
     */
    public function getSubMerchantId()
    {
        return $this->subMerchantId;
    }

    /**
     * Set merchant identifier of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     *
     * @param  string  $subMerchantId  Merchant identifier of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     *
     * @return  self
     */
    public function setSubMerchantId(string $subMerchantId)
    {
        $this->subMerchantId = $subMerchantId;

        return $this;
    }

    /**
     * Get legal identifier of vendor as merchant of the Payment Facilitator, expressed in the legal codification specific to each country.
     *
     * @return  string
     */
    public function getSubMerchantLegalId()
    {
        return $this->subMerchantLegalId;
    }

    /**
     * Set legal identifier of vendor as merchant of the Payment Facilitator, expressed in the legal codification specific to each country.
     *
     * @param  string  $subMerchantLegalId  Legal identifier of vendor as merchant of the Payment Facilitator, expressed in the legal codification specific to each country.
     *
     * @return  self
     */
    public function setSubMerchantLegalId(string $subMerchantLegalId)
    {
        $this->subMerchantLegalId = $subMerchantLegalId;

        return $this;
    }

    /**
     * Get name of the merchant of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     *
     * @return  string
     */
    public function getSubMerchantName()
    {
        return $this->subMerchantName;
    }

    /**
     * Set name of the merchant of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     *
     * @param  string  $subMerchantName  Name of the merchant of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     *
     * @return  self
     */
    public function setSubMerchantName(string $subMerchantName)
    {
        $this->subMerchantName = $subMerchantName;

        return $this;
    }

    /**
     * Get short name of the merchant of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     *
     * @return  string
     */
    public function getSubMerchantShortName()
    {
        return $this->subMerchantShortName;
    }

    /**
     * Set short name of the merchant of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     *
     * @param  string  $subMerchantShortName  Short name of the merchant of the Payment Facilitator in the context of Collecting offer or a Marketplace offer.
     *
     * @return  self
     */
    public function setSubMerchantShortName(string $subMerchantShortName)
    {
        $this->subMerchantShortName = $subMerchantShortName;

        return $this;
    }

    /**
     * Get indicates the players in the transaction.
     *
     * @return  string
     */
    public function getTransactionActors()
    {
        return $this->transactionActors;
    }

    /**
     * Set indicates the players in the transaction.
     *
     * @param  string  $transactionActors  Indicates the players in the transaction.
     *
     * @return  self
     */
    public function setTransactionActors(string $transactionActors)
    {
        $this->transactionActors = $transactionActors;

        return $this;
    }

    /**
     * Get origin of a transaction (for example: name of the programme), set by the merchant. Exemple: "Website A v1.32".
     *
     * @return  string
     */
    public function getTransactionOrigin()
    {
        return $this->transactionOrigin;
    }

    /**
     * Set origin of a transaction (for example: name of the programme), set by the merchant. Exemple: "Website A v1.32".
     *
     * @param  string  $transactionOrigin  Origin of a transaction (for example: name of the programme), set by the merchant. Exemple: "Website A v1.32".
     *
     * @return  self
     */
    public function setTransactionOrigin(string $transactionOrigin)
    {
        $this->transactionOrigin = $transactionOrigin;

        return $this;
    }

    /**
     * Get contains specific information regarding the travel.
     *
     * @return  string
     */
    public function getTravelContext()
    {
        return $this->travelContext;
    }

    /**
     * Set contains specific information regarding the travel.
     *
     * @param  string  $travelContext  Contains specific information regarding the travel.
     *
     * @return  self
     */
    public function setTravelContext(string $travelContext)
    {
        $this->travelContext = $travelContext;

        return $this;
    }

    /**
     * Get yYYYMMDD
     *
     * @return  string
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * Set yYYYMMDD
     *
     * @param  string  $valueDate  YYYYMMDD
     *
     * @return  self
     */
    public function setValueDate(string $valueDate)
    {
        $this->valueDate = $valueDate;

        return $this;
    }
}
