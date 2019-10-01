<?php

namespace Worldline\Sips\Checkout;

/**
 *
 * @author Guiled <guislain.duthieuw@gmail.com>
 */
class WalletOrderResponse
{
    protected $acquirerResponseCode;
    protected $authorisationId;
    protected $cardScheme;
    protected $complementaryCode;
    protected $complementaryInfo;
    protected $maskedPan;
    protected $responseCode;
    protected $returnContext;
    protected $transactionDateTime;
    protected $tokenPan;
    protected $scoreColor;
    protected $scoreInfo;
    protected $scoreProfile;
    protected $scoreThreshold;
    protected $scoreValue;
    /**
     *
     * @var \Worldline\Sips\Common\Field\S10TransactionReference
     */
    protected $s10TransactionReference;
    protected $transactionReference;
    protected $cardData;
    protected $preAuthorisationProfile;
    protected $preAuthorisationProfileValue;
    protected $preAuthorisationRuleResultList;
    protected $captureDay;
    protected $captureMode;
    protected $transactionPlatform;
    protected $cardCSCResultCode;
    protected $avsPostcodeResponseCode;
    protected $avsAddressResponseCode;
    protected $authorMessageReference;
    protected $authorisationTypeLabel;
    protected $acquirerResponseMessage;
    protected $recurringResponseCode;
    protected $holderAuthentRelegationCode;
    protected $holderAuthentStatus;
    protected $guaranteeIndicator;
    protected $acceptanceSystemApplicationId;
    protected $errorFieldName;
    protected $intermediateServiceProviderOperationId;
    protected $orderId;
    
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

    public function getTransactionDateTime()
    {
        return $this->transactionDateTime;
    }

    public function getTokenPan()
    {
        return $this->tokenPan;
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

    public function getAuthorMessageReference()
    {
        return $this->authorMessageReference;
    }

    public function getAuthorisationTypeLabel()
    {
        return $this->authorisationTypeLabel;
    }

    public function getAcquirerResponseMessage()
    {
        return $this->acquirerResponseMessage;
    }

    public function getRecurringResponseCode()
    {
        return $this->recurringResponseCode;
    }

    public function getHolderAuthentRelegationCode()
    {
        return $this->holderAuthentRelegationCode;
    }

    public function getHolderAuthentStatus()
    {
        return $this->holderAuthentStatus;
    }

    public function getGuaranteeIndicator()
    {
        return $this->guaranteeIndicator;
    }

    public function getAcceptanceSystemApplicationId()
    {
        return $this->acceptanceSystemApplicationId;
    }

    public function getErrorFieldName()
    {
        return $this->errorFieldName;
    }

    public function getIntermediateServiceProviderOperationId()
    {
        return $this->intermediateServiceProviderOperationId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }


}