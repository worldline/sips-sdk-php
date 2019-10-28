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
     * @return null|string
     */
    public function getAcquirerNativeResponseCode(): ?string
    {
        return $this->acquirerNativeResponseCode;
    }

    /**
     * @return null|string
     */
    public function getAcquirerResponseCode(): ?string
    {
        return $this->acquirerResponseCode;
    }

    /**
     * @return null|string
     */
    public function getAcquirerResponseIdentifier(): ?string
    {
        return $this->acquirerResponseIdentifier;
    }

    /**
     * @return null|string
     */
    public function getAcquirerResponseMessage(): ?string
    {
        return $this->acquirerResponseMessage;
    }

    /**
     * @return null|string
     */
    public function getAdditionalAuthorisationNumber(): ?string
    {
        return $this->additionalAuthorisationNumber;
    }

    /**
     * @return null|string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * @return null|string
     */
    public function getAvsAdressResponseCode(): ?string
    {
        return $this->avsAdressResponseCode;
    }

    /**
     * @return null|string
     */
    public function getAvsPostcodeResponseCode(): ?string
    {
        return $this->avsPostcodeResponseCode;
    }

    /**
     * @return null|string
     */
    public function getAuthorisationId(): ?string
    {
        return $this->authorisationId;
    }

    /**
     * @return null|string
     */
    public function getCaptureDay(): ?string
    {
        return $this->captureDay;
    }

    /**
     * @return null|string
     */
    public function getCaptureLimitData(): ?string
    {
        return $this->CaptureLimitData;
    }

    /**
     * @return null|string
     */
    public function getCaptureMode(): ?string
    {
        return $this->captureMode;
    }

    /**
     * @return null|string
     */
    public function getCardCSCResultCode(): ?string
    {
        return $this->cardCSCResultCode;
    }

    /**
     * @return null|string
     */
    public function getCardProductCode(): ?string
    {
        return $this->cardProductCode;
    }

    /**
     * @return null|string
     */
    public function getCardProductName(): ?string
    {
        return $this->cardProductName;
    }

    /**
     * @return null|string
     */
    public function getCardProductProfile(): ?string
    {
        return $this->cardProductProfile;
    }

    /**
     * @return null|string
     */
    public function getComplementaryCode(): ?string
    {
        return $this->complementaryCode;
    }

    /**
     * @return null|string
     */
    public function getCreditorId(): ?string
    {
        return $this->creditorId;
    }

    /**
     * @return null|string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * @return null|string
     */
    public function getCustomerBusinessName(): ?string
    {
        return $this->customerBusinessName;
    }

    /**
     * @return null|string
     */
    public function getCustomerCompanyName(): ?string
    {
        return $this->customerCompanyName;
    }

    /**
     * @return null|string
     */
    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }

    /**
     * @return null|string
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * @return null|string
     */
    public function getCustomerIpAddress(): ?string
    {
        return $this->customerIpAddress;
    }

    /**
     * @return null|string
     */
    public function getCustomerLegalId(): ?string
    {
        return $this->customerLegalId;
    }

    /**
     * @return null|string
     */
    public function getCustomerMobilePhone(): ?string
    {
        return $this->customerMobilePhone;
    }

    /**
     * @return null|string
     */
    public function getCustomerPositionOccupied(): ?string
    {
        return $this->customerPositionOccupied;
    }

    /**
     * @return null|string
     */
    public function getDccAmount(): ?string
    {
        return $this->dccAmount;
    }

    /**
     * @return null|string
     */
    public function getDccExchangeRate(): ?string
    {
        return $this->dccExchangeRate;
    }

    /**
     * @return null|string
     */
    public function getDccEchangeRateValidity(): ?string
    {
        return $this->dccEchangeRateValidity;
    }

    /**
     * @return null|string
     */
    public function getDccProvider(): ?string
    {
        return $this->dccProvider;
    }

    /**
     * @return null|string
     */
    public function getDccStatus(): ?string
    {
        return $this->dccStatus;
    }

    /**
     * @return null|string
     */
    public function getDccResponseCode(): ?string
    {
        return $this->dccResponseCode;
    }

    /**
     * @return null|string
     */
    public function getGuaranteeIndicator(): ?string
    {
        return $this->guaranteeIndicator;
    }

    /**
     * @return null|string
     */
    public function getHashPan1(): ?string
    {
        return $this->hashPan1;
    }

    /**
     * @return null|string
     */
    public function getHashPan2(): ?string
    {
        return $this->hashPan2;
    }

    /**
     * @return null|string
     */
    public function getHolderAuthentMethod(): ?string
    {
        return $this->holderAuthentMethod;
    }

    /**
     * @return null|string
     */
    public function getHolderAuthentProgram(): ?string
    {
        return $this->holderAuthentProgram;
    }

    /**
     * @return null|string
     */
    public function getHolderAuthentRelegation(): ?string
    {
        return $this->holderAuthentRelegation;
    }

    /**
     * @return null|string
     */
    public function getHolderAuthentStatus(): ?string
    {
        return $this->holderAuthentStatus;
    }

    /**
     * @return null|string
     */
    public function getInstalmentAmaountsList(): ?string
    {
        return $this->instalmentAmaountsList;
    }

    /**
     * @return null|string
     */
    public function getInstalmentDatesList(): ?string
    {
        return $this->instalmentDatesList;
    }

    /**
     * @return null|string
     */
    public function getInstalmentNumber(): ?string
    {
        return $this->instalmentNumber;
    }

    /**
     * @return null|string
     */
    public function getInstalmentTransactionReferencesList(): ?string
    {
        return $this->instalmentTransactionReferencesList;
    }

    /**
     * @return null|string
     */
    public function getInterfaceVersion(): ?string
    {
        return $this->interfaceVersion;
    }

    /**
     * @return null|string
     */
    public function getInvoiceReference(): ?string
    {
        return $this->invoiceReference;
    }

    /**
     * @return null|string
     */
    public function getIssuerCode(): ?string
    {
        return $this->issuerCode;
    }

    /**
     * @return null|string
     */
    public function getIssuerCountryCode(): ?string
    {
        return $this->issuerCountryCode;
    }

    /**
     * @return null|string
     */
    public function getIssuerEnrollementIndicator(): ?string
    {
        return $this->issuerEnrollementIndicator;
    }

    /**
     * @return null|string
     */
    public function getIssuerWalletInformation(): ?string
    {
        return $this->issuerWalletInformation;
    }

    /**
     * @return null|string
     */
    public function getKeyVersion(): ?string
    {
        return $this->keyVersion;
    }

    /**
     * @return null|string
     */
    public function getMandateAuthentMethod(): ?string
    {
        return $this->mandateAuthentMethod;
    }

    /**
     * @return null|string
     */
    public function getMandateCertificationType(): ?string
    {
        return $this->mandateCertificationType;
    }

    /**
     * @return null|string
     */
    public function getMandateId(): ?string
    {
        return $this->mandateId;
    }

    /**
     * @return null|string
     */
    public function getMandateUsage(): ?string
    {
        return $this->mandateUsage;
    }

    /**
     * @return null|string
     */
    public function getMaskedPan(): ?string
    {
        return $this->maskedPan;
    }

    /**
     * @return null|string
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * @return null|string
     */
    public function getMerchantSessionId(): ?string
    {
        return $this->merchantSessionId;
    }

    /**
     * @return null|string
     */
    public function getMerchantTransactionDataTime(): ?string
    {
        return $this->merchantTransactionDataTime;
    }

    /**
     * @return null|string
     */
    public function getMerchantWalletId(): ?string
    {
        return $this->merchantWalletId;
    }

    /**
     * @return null|string
     */
    public function getOrderChannel(): ?string
    {
        return $this->orderChannel;
    }

    /**
     * @return null|string
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @return null|string
     */
    public function getPanEntryMode(): ?string
    {
        return $this->panEntryMode;
    }

    /**
     * @return null|string
     */
    public function getPanExpireDate(): ?string
    {
        return $this->panExpireDate;
    }

    /**
     * @return null|string
     */
    public function getPaymentAttemptNumber(): ?string
    {
        return $this->paymentAttemptNumber;
    }

    /**
     * @return null|string
     */
    public function getPaymentMeanBrand(): ?string
    {
        return $this->paymentMeanBrand;
    }

    /**
     * @return null|string
     */
    public function getPaymentMeanBrandSelectionStatus(): ?string
    {
        return $this->paymentMeanBrandSelectionStatus;
    }

    /**
     * @return null|string
     */
    public function getPaymentMeanData(): ?string
    {
        return $this->paymentMeanData;
    }

    /**
     * @return null|string
     */
    public function getPaymentMeanId(): ?string
    {
        return $this->paymentMeanId;
    }

    /**
     * @return null|string
     */
    public function getPaymentMeanTradingName(): ?string
    {
        return $this->paymentMeanTradingName;
    }

    /**
     * @return null|string
     */
    public function getPaymentMeanType(): ?string
    {
        return $this->paymentMeanType;
    }

    /**
     * @return null|string
     */
    public function getPaymentMeanPattern(): ?string
    {
        return $this->paymentMeanPattern;
    }

    /**
     * @return null|string
     */
    public function getPreAuthenticationColor(): ?string
    {
        return $this->preAuthenticationColor;
    }

    /**
     * @return null|string
     */
    public function getPreAuthenticationInfo(): ?string
    {
        return $this->preAuthenticationInfo;
    }

    /**
     * @return null|string
     */
    public function getPreAuthenticationProfile(): ?string
    {
        return $this->preAuthenticationProfile;
    }

    /**
     * @return null|string
     */
    public function getPreAuthenticationProfileValue(): ?string
    {
        return $this->preAuthenticationProfileValue;
    }

    /**
     * @return null|string
     */
    public function getPreAuthenticationRuleResultList(): ?string
    {
        return $this->preAuthenticationRuleResultList;
    }

    /**
     * @return null|string
     */
    public function getPreAuthorisationThreshold(): ?string
    {
        return $this->preAuthorisationThreshold;
    }

    /**
     * @return null|string
     */
    public function getPreAuthenticationValue(): ?string
    {
        return $this->preAuthenticationValue;
    }

    /**
     * @return null|string
     */
    public function getPreAuthorisationProfile(): ?string
    {
        return $this->preAuthorisationProfile;
    }

    /**
     * @return null|string
     */
    public function getPreAuthorisationProfileValue(): ?string
    {
        return $this->preAuthorisationProfileValue;
    }

    /**
     * @return null|string
     */
    public function getPreAuthorisationRuleResultList(): ?string
    {
        return $this->preAuthorisationRuleResultList;
    }

    /**
     * @return null|string
     */
    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    /**
     * @return null|string
     */
    public function getReturnContext(): ?string
    {
        return $this->returnContext;
    }

    /**
     * @return null|string
     */
    public function getS10TransactionId(): ?string
    {
        return $this->s10TransactionId;
    }

    /**
     * @return null|string
     */
    public function getS10TransactionIdDate(): ?string
    {
        return $this->s10TransactionIdDate;
    }

    /**
     * @return null|string
     */
    public function getS10TransactionIdsList(): ?string
    {
        return $this->s10TransactionIdsList;
    }

    /**
     * @return null|string
     */
    public function getScoreColor(): ?string
    {
        return $this->scoreColor;
    }

    /**
     * @return null|string
     */
    public function getScoreInfo(): ?string
    {
        return $this->scoreInfo;
    }

    /**
     * @return null|string
     */
    public function getScoreThreshold(): ?string
    {
        return $this->scoreThreshold;
    }

    /**
     * @return null|string
     */
    public function getScoreValue(): ?string
    {
        return $this->scoreValue;
    }

    /**
     * @return null|string
     */
    public function getSettlementMode(): ?string
    {
        return $this->settlementMode;
    }

    /**
     * @return null|string
     */
    public function getSettlementModeComplement(): ?string
    {
        return $this->settlementModeComplement;
    }

    /**
     * @return null|string
     */
    public function getStatementReference(): ?string
    {
        return $this->statementReference;
    }

    /**
     * @return null|string
     */
    public function getTokenPan(): ?string
    {
        return $this->tokenPan;
    }

    /**
     * @return null|string
     */
    public function getTransactionActors(): ?string
    {
        return $this->transactionActors;
    }

    /**
     * @return null|string
     */
    public function getTransactionDateTime(): ?string
    {
        return $this->transactionDateTime;
    }

    /**
     * @return null|string
     */
    public function getTransactionOrigin(): ?string
    {
        return $this->transactionOrigin;
    }

    /**
     * @return null|string
     */
    public function getTransactionReference(): ?string
    {
        return $this->transactionReference;
    }

    /**
     * @return null|string
     */
    public function getWalletType(): ?string
    {
        return $this->walletType;
    }


}