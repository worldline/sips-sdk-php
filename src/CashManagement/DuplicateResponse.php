<?php

namespace Worldline\Sips\CashManagement;

class DuplicateResponse
{
    protected $acquirerResponseCode;
    protected $authorisationId;
    protected $complementaryCode;
    protected $complementaryInfo;
    protected $maskedPan;
    protected $panExpiryDate;
    protected $paymentMeanBrand;
    protected $scoreValue;
    protected $scoreColor;
    protected $scoreInfo;
    protected $scoreProfile;
    protected $scoreThreshold;
    protected $responseCode;
    protected $transactionDateTime;

    /**
     *
     * @var \Worldline\Sips\Common\Field\S10TransactionReference
     */
    protected $s10TransactionReference;
    
    protected $transactionReference;
    protected $cardData;
    protected $paymentMeanBrandSelectionStatus;
    protected $preAuthorisationProfile;
    protected $preAuthorisationProfileValue;
    protected $preAuthorisationRuleResultList;
    protected $transactionPlatform;
    protected $avsPostcodeResponseCode;
    protected $avsAddressResponseCode;
    protected $errorFieldName;

    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            if ($key === 's10TransactionReference') {
                $s10 = new \Worldline\Sips\Common\Field\S10TransactionReference();
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

    public function getComplementaryCode()
    {
        return $this->complementaryCode;
    }

    public function getComplementaryInfo()
    {
        return $this->complementaryInfo;
    }

    public function getMaskedPan()
    {
        return $this->maskedPan;
    }

    public function getPanExpiryDate()
    {
        return $this->panExpiryDate;
    }

    public function getPaymentMeanBrand()
    {
        return $this->paymentMeanBrand;
    }

    public function getScoreValue()
    {
        return $this->scoreValue;
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

    public function getResponseCode()
    {
        return $this->responseCode;
    }

    public function getTransactionDateTime()
    {
        return $this->transactionDateTime;
    }

    public function getS10TransactionReference(): \Worldline\Sips\Common\Field\S10TransactionReference
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

    public function getPaymentMeanBrandSelectionStatus()
    {
        return $this->paymentMeanBrandSelectionStatus;
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

    public function getTransactionPlatform()
    {
        return $this->transactionPlatform;
    }

    public function getAvsPostcodeResponseCode()
    {
        return $this->avsPostcodeResponseCode;
    }

    public function getAvsAddressResponseCode()
    {
        return $this->avsAddressResponseCode;
    }

    public function getErrorFieldName()
    {
        return $this->errorFieldName;
    }

    public function setAcquirerResponseCode($acquirerResponseCode)
    {
        $this->acquirerResponseCode = $acquirerResponseCode;
        return $this;
    }

    public function setAuthorisationId($authorisationId)
    {
        $this->authorisationId = $authorisationId;
        return $this;
    }

    public function setComplementaryCode($complementaryCode)
    {
        $this->complementaryCode = $complementaryCode;
        return $this;
    }

    public function setComplementaryInfo($complementaryInfo)
    {
        $this->complementaryInfo = $complementaryInfo;
        return $this;
    }

    public function setMaskedPan($maskedPan)
    {
        $this->maskedPan = $maskedPan;
        return $this;
    }

    public function setPanExpiryDate($panExpiryDate)
    {
        $this->panExpiryDate = $panExpiryDate;
        return $this;
    }

    public function setPaymentMeanBrand($paymentMeanBrand)
    {
        $this->paymentMeanBrand = $paymentMeanBrand;
        return $this;
    }

    public function setScoreValue($scoreValue)
    {
        $this->scoreValue = $scoreValue;
        return $this;
    }

    public function setScoreColor($scoreColor)
    {
        $this->scoreColor = $scoreColor;
        return $this;
    }

    public function setScoreInfo($scoreInfo)
    {
        $this->scoreInfo = $scoreInfo;
        return $this;
    }

    public function setScoreProfile($scoreProfile)
    {
        $this->scoreProfile = $scoreProfile;
        return $this;
    }

    public function setScoreThreshold($scoreThreshold)
    {
        $this->scoreThreshold = $scoreThreshold;
        return $this;
    }

    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    public function setTransactionDateTime($transactionDateTime)
    {
        $this->transactionDateTime = $transactionDateTime;
        return $this;
    }

    public function setS10TransactionReference(\Worldline\Sips\Common\Field\S10TransactionReference $s10TransactionReference)
    {
        $this->s10TransactionReference = $s10TransactionReference;
        return $this;
    }

    public function setTransactionReference($transactionReference)
    {
        $this->transactionReference = $transactionReference;
        return $this;
    }

    public function setCardData($cardData)
    {
        $this->cardData = $cardData;
        return $this;
    }

    public function setPaymentMeanBrandSelectionStatus($paymentMeanBrandSelectionStatus)
    {
        $this->paymentMeanBrandSelectionStatus = $paymentMeanBrandSelectionStatus;
        return $this;
    }

    public function setPreAuthorisationProfile($preAuthorisationProfile)
    {
        $this->preAuthorisationProfile = $preAuthorisationProfile;
        return $this;
    }

    public function setPreAuthorisationProfileValue($preAuthorisationProfileValue)
    {
        $this->preAuthorisationProfileValue = $preAuthorisationProfileValue;
        return $this;
    }

    public function setPreAuthorisationRuleResultList($preAuthorisationRuleResultList)
    {
        $this->preAuthorisationRuleResultList = $preAuthorisationRuleResultList;
        return $this;
    }

    public function setTransactionPlatform($transactionPlatform)
    {
        $this->transactionPlatform = $transactionPlatform;
        return $this;
    }

    public function setAvsPostcodeResponseCode($avsPostcodeResponseCode)
    {
        $this->avsPostcodeResponseCode = $avsPostcodeResponseCode;
        return $this;
    }

    public function setAvsAddressResponseCode($avsAddressResponseCode)
    {
        $this->avsAddressResponseCode = $avsAddressResponseCode;
        return $this;
    }

    public function setErrorFieldName($errorFieldName)
    {
        $this->errorFieldName = $errorFieldName;
        return $this;
    }



}