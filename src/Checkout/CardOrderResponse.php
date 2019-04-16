<?php

namespace Worldline\Sips\Checkout;

class CardOrderResponse
{
    protected $acquirerResponseCode;
    protected $authorisationId;
    protected $cardScheme;
    protected $complementaryCode;
    protected $complementaryInfo;
    protected $guaranteeIndicator;
    protected $holderAuthentRelegationCode;
    protected $holderAuthentStatus;
    protected $maskedPan;
    protected $responseCode;
    protected $returnContext;
    protected $scoreColor;
    protected $scoreInfo;
    protected $scoreProfile;
    protected $scoreThreshold;
    protected $scoreValue;
    protected $transactionDateTime;
    protected $tokenPan;
    protected $cardCSCResultCode;
    protected $avsPostcodeResponseCode;
    protected $avsAddressResponseCode;
    protected $recurringResponseCode;
    protected $acquirerResponseIdentifier;
    protected $acquirerResponseMessage;
    protected $paymentMeanTradingName;
    protected $paymentMeanData;
    protected $s10TransactionReference;
    protected $transactionReference;
    protected $cardData;
    protected $seal;
    protected $preAuthorisationProfile;
    protected $preAuthorisationProfileValue;
    protected $preAuthorisationRuleResultList;
    protected $paymentMeanBrandSelectionStatus;
    protected $captureDay;
    protected $captureMode;
    protected $transactionPlatform;
    protected $authorMessageReference;
    protected $authorisationTypeLabel;
    protected $acceptanceSystemApplicationId;
    protected $errorFieldName;
    protected $panEntryMode;
    protected $walletType;
    protected $issuerWalletInformation;
    protected $paymentMeanBrand;

    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            if ($key === 's10TransactionReference') {
                $s10   = new \Worldline\Sips\Common\Field\S10TransactionReference();
                $s10->setS10TransactionId($value['s10TransactionId']);
                $s10->setS10TransactionIdDate($value['s10TransactionIdDate']);
                $value = $s10;
            }
            $this->$key = $value;
        }
    }

    public function getAcquirerResponseCode()
    {
        return $this->acquirerResponseCode;
    }

    public function getAuthorisationId()
    {
        return $this->authorisationId;
    }

    public function getCardScheme()
    {
        return $this->cardScheme;
    }

    public function getComplementaryCode()
    {
        return $this->complementaryCode;
    }

    public function getComplementaryInfo()
    {
        return $this->complementaryInfo;
    }

    public function getGuaranteeIndicator()
    {
        return $this->guaranteeIndicator;
    }

    public function getHolderAuthentRelegationCode()
    {
        return $this->holderAuthentRelegationCode;
    }

    public function getHolderAuthentStatus()
    {
        return $this->holderAuthentStatus;
    }

    public function getMaskedPan()
    {
        return $this->maskedPan;
    }

    public function getResponseCode()
    {
        return $this->responseCode;
    }

    public function getReturnContext()
    {
        return $this->returnContext;
    }

    public function getScoreColor()
    {
        return $this->scoreColor;
    }

    public function getScoreInfo()
    {
        return $this->scoreInfo;
    }

    public function getScoreProfile()
    {
        return $this->scoreProfile;
    }

    public function getScoreThreshold()
    {
        return $this->scoreThreshold;
    }

    public function getScoreValue()
    {
        return $this->scoreValue;
    }

    public function getTransactionDateTime()
    {
        return $this->transactionDateTime;
    }

    public function getTokenPan()
    {
        return $this->tokenPan;
    }

    public function getCardCSCResultCode()
    {
        return $this->cardCSCResultCode;
    }

    public function getAvsPostcodeResponseCode()
    {
        return $this->avsPostcodeResponseCode;
    }

    public function getAvsAddressResponseCode()
    {
        return $this->avsAddressResponseCode;
    }

    public function getRecurringResponseCode()
    {
        return $this->recurringResponseCode;
    }

    public function getAcquirerResponseIdentifier()
    {
        return $this->acquirerResponseIdentifier;
    }

    public function getAcquirerResponseMessage()
    {
        return $this->acquirerResponseMessage;
    }

    public function getPaymentMeanTradingName()
    {
        return $this->paymentMeanTradingName;
    }

    public function getPaymentMeanData()
    {
        return $this->paymentMeanData;
    }

    public function getS10TransactionReference()
    {
        return $this->s10TransactionReference;
    }

    public function getTransactionReference()
    {
        return $this->transactionReference;
    }

    public function getCardData()
    {
        return $this->cardData;
    }

    public function getSeal()
    {
        return $this->seal;
    }

    public function getPreAuthorisationProfile()
    {
        return $this->preAuthorisationProfile;
    }

    public function getPreAuthorisationProfileValue()
    {
        return $this->preAuthorisationProfileValue;
    }

    public function getPreAuthorisationRuleResultList()
    {
        return $this->preAuthorisationRuleResultList;
    }

    public function getPaymentMeanBrandSelectionStatus()
    {
        return $this->paymentMeanBrandSelectionStatus;
    }

    public function getCaptureDay()
    {
        return $this->captureDay;
    }

    public function getCaptureMode()
    {
        return $this->captureMode;
    }

    public function getTransactionPlatform()
    {
        return $this->transactionPlatform;
    }

    public function getAuthorMessageReference()
    {
        return $this->authorMessageReference;
    }

    public function getAuthorisationTypeLabel()
    {
        return $this->authorisationTypeLabel;
    }

    public function getAcceptanceSystemApplicationId()
    {
        return $this->acceptanceSystemApplicationId;
    }

    public function getErrorFieldName()
    {
        return $this->errorFieldName;
    }

    public function getPanEntryMode()
    {
        return $this->panEntryMode;
    }

    public function getWalletType()
    {
        return $this->walletType;
    }

    public function getIssuerWalletInformation()
    {
        return $this->issuerWalletInformation;
    }

    public function getPaymentMeanBrand()
    {
        return $this->paymentMeanBrand;
    }
}