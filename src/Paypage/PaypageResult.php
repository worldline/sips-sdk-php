<?php

namespace Worldline\Sips\Paypage;


class PaypageResult
{
    private $acquirerNativeResponseCode;
    private $acquirerResponseCode;
    private $acquirerResponseIdentifier;
    private $acquirerResponseMessage;
    private $additionalAuthorisationNumber;
    private $amount;
    private $avsAdressResponseCode;
    private $avsPostcodeResponseCode;
    private $authorisationId;
    private $captureDay;
    private $CaptureLimitData;
    private $captureMode;
    private $cardCSCResultCode;
    private $cardProductCode;
    private $cardProductName;
    private $cardProductProfile;
    private $complementaryCode;
    private $creditorId;
    private $currencyCode;
    private $customerBusinessName;
    private $customerCompanyName;
    private $customerEmail;
    private $customerId;
    private $customerIpAddress;
    private $customerLegalId;
    private $customerMobilePhone;
    private $customerPositionOccupied;
    private $dccAmount;
    private $dccExchangeRate;
    private $dccEchangeRateValidity;
    private $dccProvider;
    private $dccStatus;
    private $dccResponseCode;
    private $guaranteeIndicator;
    private $hashPan1;
    private $hashPan2;
    private $holderAuthentMethod;
    private $holderAuthentProgram;
    private $holderAuthentRelegation;
    private $holderAuthentStatus;
    private $instalmentAmaountsList;
    private $instalmentDatesList;
    private $instalmentNumber;
    private $instalmentTransactionReferencesList;
    private $interfaceVersion;
    private $invoiceReference;
    private $issuerCode;
    private $issuerCountryCode;
    private $issuerEnrollementIndicator;
    private $issuerWalletInformation;
    private $keyVersion;
    private $mandateAuthentMethod;
    private $mandateCertificationType;
    private $mandateId;
    private $mandateUsage;
    private $maskedPan;
    private $merchantId;
    private $merchantSessionId;
    private $merchantTransactionDataTime;
    private $merchantWalletId;
    private $orderChannel;
    private $orderId;
    private $panEntryMode;
    private $panExpireDate;
    private $paymentAttemptNumber;
    private $paymentMeanBrand;
    private $paymentMeanBrandSelectionStatus;
    private $paymentMeanData;
    private $paymentMeanId;
    private $paymentMeanTradingName;
    private $paymentMeanType;
    private $paymentMeanPattern;
    private $preAuthenticationColor;
    private $preAuthenticationInfo;
    private $preAuthenticationProfile;
    private $preAuthenticationProfileValue;
    private $preAuthenticationRuleResultList;
    private $preAuthorisationThreshold;
    private $preAuthenticationValue;
    private $preAuthorisationProfile;
    private $preAuthorisationProfileValue;
    private $preAuthorisationRuleResultList;
    private $responseCode;
    private $returnContext;
    private $s10TransactionId;
    private $s10TransactionIdDate;
    private $s10TransactionIdsList;
    private $scoreColor;
    private $scoreInfo;
    private $scoreThreshold;
    private $scoreValue;
    private $settlementMode;
    private $settlementModeComplement;
    private $statementReference;
    private $tokenPan;
    private $transactionActors;
    private $transactionDateTime;
    private $transactionOrigin;
    private $transactionReference;
    private $walletType;

    /**
     * PaypageResult constructor.
     * @param string $data
     */
    public function __construct(string $data)
    {
        $data = explode('|', $data);
        $dataArray = [];
        foreach ($data as $value) {
            $value = explode('=', $value, 2);
            $dataArray[$value[0]] = $value[1];
        }
        foreach ($dataArray as $key => $value) {
            $this->$key = $value;
        }
    }


    /**
     * @return string
     */
    public function getAcquirerNativeResponseCode(): string
    {
        return $this->acquirerNativeResponseCode;
    }

    /**
     * @return string
     */
    public function getAcquirerResponseCode(): string
    {
        return $this->acquirerResponseCode;
    }

    /**
     * @return string
     */
    public function getAcquirerResponseIdentifier(): string
    {
        return $this->acquirerResponseIdentifier;
    }

    /**
     * @return string
     */
    public function getAcquirerResponseMessage(): string
    {
        return $this->acquirerResponseMessage;
    }

    /**
     * @return string
     */
    public function getAdditionalAuthorisationNumber(): string
    {
        return $this->additionalAuthorisationNumber;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getAvsAdressResponseCode(): string
    {
        return $this->avsAdressResponseCode;
    }

    /**
     * @return string
     */
    public function getAvsPostcodeResponseCode(): string
    {
        return $this->avsPostcodeResponseCode;
    }

    /**
     * @return string
     */
    public function getAuthorisationId(): string
    {
        return $this->authorisationId;
    }

    /**
     * @return string
     */
    public function getCaptureDay(): string
    {
        return $this->captureDay;
    }

    /**
     * @return string
     */
    public function getCaptureLimitData(): string
    {
        return $this->CaptureLimitData;
    }

    /**
     * @return string
     */
    public function getCaptureMode(): string
    {
        return $this->captureMode;
    }

    /**
     * @return string
     */
    public function getCardCSCResultCode(): string
    {
        return $this->cardCSCResultCode;
    }

    /**
     * @return string
     */
    public function getCardProductCode(): string
    {
        return $this->cardProductCode;
    }

    /**
     * @return string
     */
    public function getCardProductName(): string
    {
        return $this->cardProductName;
    }

    /**
     * @return string
     */
    public function getCardProductProfile(): string
    {
        return $this->cardProductProfile;
    }

    /**
     * @return string
     */
    public function getComplementaryCode(): string
    {
        return $this->complementaryCode;
    }

    /**
     * @return string
     */
    public function getCreditorId(): string
    {
        return $this->creditorId;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @return string
     */
    public function getCustomerBusinessName(): string
    {
        return $this->customerBusinessName;
    }

    /**
     * @return string
     */
    public function getCustomerCompanyName(): string
    {
        return $this->customerCompanyName;
    }

    /**
     * @return string
     */
    public function getCustomerEmail(): string
    {
        return $this->customerEmail;
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * @return string
     */
    public function getCustomerIpAddress(): string
    {
        return $this->customerIpAddress;
    }

    /**
     * @return string
     */
    public function getCustomerLegalId(): string
    {
        return $this->customerLegalId;
    }

    /**
     * @return string
     */
    public function getCustomerMobilePhone(): string
    {
        return $this->customerMobilePhone;
    }

    /**
     * @return string
     */
    public function getCustomerPositionOccupied(): string
    {
        return $this->customerPositionOccupied;
    }

    /**
     * @return string
     */
    public function getDccAmount(): string
    {
        return $this->dccAmount;
    }

    /**
     * @return string
     */
    public function getDccExchangeRate(): string
    {
        return $this->dccExchangeRate;
    }

    /**
     * @return string
     */
    public function getDccEchangeRateValidity(): string
    {
        return $this->dccEchangeRateValidity;
    }

    /**
     * @return string
     */
    public function getDccProvider(): string
    {
        return $this->dccProvider;
    }

    /**
     * @return string
     */
    public function getDccStatus(): string
    {
        return $this->dccStatus;
    }

    /**
     * @return string
     */
    public function getDccResponseCode(): string
    {
        return $this->dccResponseCode;
    }

    /**
     * @return string
     */
    public function getGuaranteeIndicator(): string
    {
        return $this->guaranteeIndicator;
    }

    /**
     * @return string
     */
    public function getHashPan1(): string
    {
        return $this->hashPan1;
    }

    /**
     * @return string
     */
    public function getHashPan2(): string
    {
        return $this->hashPan2;
    }

    /**
     * @return string
     */
    public function getHolderAuthentMethod(): string
    {
        return $this->holderAuthentMethod;
    }

    /**
     * @return string
     */
    public function getHolderAuthentProgram(): string
    {
        return $this->holderAuthentProgram;
    }

    /**
     * @return string
     */
    public function getHolderAuthentRelegation(): string
    {
        return $this->holderAuthentRelegation;
    }

    /**
     * @return string
     */
    public function getHolderAuthentStatus(): string
    {
        return $this->holderAuthentStatus;
    }

    /**
     * @return string
     */
    public function getInstalmentAmaountsList(): string
    {
        return $this->instalmentAmaountsList;
    }

    /**
     * @return string
     */
    public function getInstalmentDatesList(): string
    {
        return $this->instalmentDatesList;
    }

    /**
     * @return string
     */
    public function getInstalmentNumber(): string
    {
        return $this->instalmentNumber;
    }

    /**
     * @return string
     */
    public function getInstalmentTransactionReferencesList(): string
    {
        return $this->instalmentTransactionReferencesList;
    }

    /**
     * @return string
     */
    public function getInterfaceVersion(): string
    {
        return $this->interfaceVersion;
    }

    /**
     * @return string
     */
    public function getInvoiceReference(): string
    {
        return $this->invoiceReference;
    }

    /**
     * @return string
     */
    public function getIssuerCode(): string
    {
        return $this->issuerCode;
    }

    /**
     * @return string
     */
    public function getIssuerCountryCode(): string
    {
        return $this->issuerCountryCode;
    }

    /**
     * @return string
     */
    public function getIssuerEnrollementIndicator(): string
    {
        return $this->issuerEnrollementIndicator;
    }

    /**
     * @return string
     */
    public function getIssuerWalletInformation(): string
    {
        return $this->issuerWalletInformation;
    }

    /**
     * @return string
     */
    public function getKeyVersion(): string
    {
        return $this->keyVersion;
    }

    /**
     * @return string
     */
    public function getMandateAuthentMethod(): string
    {
        return $this->mandateAuthentMethod;
    }

    /**
     * @return string
     */
    public function getMandateCertificationType(): string
    {
        return $this->mandateCertificationType;
    }

    /**
     * @return string
     */
    public function getMandateId(): string
    {
        return $this->mandateId;
    }

    /**
     * @return string
     */
    public function getMandateUsage(): string
    {
        return $this->mandateUsage;
    }

    /**
     * @return string
     */
    public function getMaskedPan(): string
    {
        return $this->maskedPan;
    }

    /**
     * @return string
     */
    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    /**
     * @return string
     */
    public function getMerchantSessionId(): string
    {
        return $this->merchantSessionId;
    }

    /**
     * @return string
     */
    public function getMerchantTransactionDataTime(): string
    {
        return $this->merchantTransactionDataTime;
    }

    /**
     * @return string
     */
    public function getMerchantWalletId(): string
    {
        return $this->merchantWalletId;
    }

    /**
     * @return string
     */
    public function getOrderChannel(): string
    {
        return $this->orderChannel;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getPanEntryMode(): string
    {
        return $this->panEntryMode;
    }

    /**
     * @return string
     */
    public function getPanExpireDate(): string
    {
        return $this->panExpireDate;
    }

    /**
     * @return string
     */
    public function getPaymentAttemptNumber(): string
    {
        return $this->paymentAttemptNumber;
    }

    /**
     * @return string
     */
    public function getPaymentMeanBrand(): string
    {
        return $this->paymentMeanBrand;
    }

    /**
     * @return string
     */
    public function getPaymentMeanBrandSelectionStatus(): string
    {
        return $this->paymentMeanBrandSelectionStatus;
    }

    /**
     * @return string
     */
    public function getPaymentMeanData(): string
    {
        return $this->paymentMeanData;
    }

    /**
     * @return string
     */
    public function getPaymentMeanId(): string
    {
        return $this->paymentMeanId;
    }

    /**
     * @return string
     */
    public function getPaymentMeanTradingName(): string
    {
        return $this->paymentMeanTradingName;
    }

    /**
     * @return string
     */
    public function getPaymentMeanType(): string
    {
        return $this->paymentMeanType;
    }

    /**
     * @return string
     */
    public function getPaymentMeanPattern(): string
    {
        return $this->paymentMeanPattern;
    }

    /**
     * @return string
     */
    public function getPreAuthenticationColor(): string
    {
        return $this->preAuthenticationColor;
    }

    /**
     * @return string
     */
    public function getPreAuthenticationInfo(): string
    {
        return $this->preAuthenticationInfo;
    }

    /**
     * @return string
     */
    public function getPreAuthenticationProfile(): string
    {
        return $this->preAuthenticationProfile;
    }

    /**
     * @return string
     */
    public function getPreAuthenticationProfileValue(): string
    {
        return $this->preAuthenticationProfileValue;
    }

    /**
     * @return string
     */
    public function getPreAuthenticationRuleResultList(): string
    {
        return $this->preAuthenticationRuleResultList;
    }

    /**
     * @return string
     */
    public function getPreAuthorisationThreshold(): string
    {
        return $this->preAuthorisationThreshold;
    }

    /**
     * @return string
     */
    public function getPreAuthenticationValue(): string
    {
        return $this->preAuthenticationValue;
    }

    /**
     * @return string
     */
    public function getPreAuthorisationProfile(): string
    {
        return $this->preAuthorisationProfile;
    }

    /**
     * @return string
     */
    public function getPreAuthorisationProfileValue(): string
    {
        return $this->preAuthorisationProfileValue;
    }

    /**
     * @return string
     */
    public function getPreAuthorisationRuleResultList(): string
    {
        return $this->preAuthorisationRuleResultList;
    }

    /**
     * @return string
     */
    public function getResponseCode(): string
    {
        return $this->responseCode;
    }

    /**
     * @return string
     */
    public function getReturnContext(): string
    {
        return $this->returnContext;
    }

    /**
     * @return string
     */
    public function getS10TransactionId(): string
    {
        return $this->s10TransactionId;
    }

    /**
     * @return string
     */
    public function getS10TransactionIdDate(): string
    {
        return $this->s10TransactionIdDate;
    }

    /**
     * @return string
     */
    public function getS10TransactionIdsList(): string
    {
        return $this->s10TransactionIdsList;
    }

    /**
     * @return string
     */
    public function getScoreColor(): string
    {
        return $this->scoreColor;
    }

    /**
     * @return string
     */
    public function getScoreInfo(): string
    {
        return $this->scoreInfo;
    }

    /**
     * @return string
     */
    public function getScoreThreshold(): string
    {
        return $this->scoreThreshold;
    }

    /**
     * @return string
     */
    public function getScoreValue(): string
    {
        return $this->scoreValue;
    }

    /**
     * @return string
     */
    public function getSettlementMode(): string
    {
        return $this->settlementMode;
    }

    /**
     * @return string
     */
    public function getSettlementModeComplement(): string
    {
        return $this->settlementModeComplement;
    }

    /**
     * @return string
     */
    public function getStatementReference(): string
    {
        return $this->statementReference;
    }

    /**
     * @return string
     */
    public function getTokenPan(): string
    {
        return $this->tokenPan;
    }

    /**
     * @return string
     */
    public function getTransactionActors(): string
    {
        return $this->transactionActors;
    }

    /**
     * @return string
     */
    public function getTransactionDateTime(): string
    {
        return $this->transactionDateTime;
    }

    /**
     * @return string
     */
    public function getTransactionOrigin(): string
    {
        return $this->transactionOrigin;
    }

    /**
     * @return string
     */
    public function getTransactionReference(): string
    {
        return $this->transactionReference;
    }

    /**
     * @return string
     */
    public function getWalletType(): string
    {
        return $this->walletType;
    }


}