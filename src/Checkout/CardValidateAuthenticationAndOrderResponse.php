<?php

namespace Worldline\Sips\Checkout;

use Worldline\Sips\Common\Field\CardData;

class CardValidateAuthenticationAndOrderResponse
{
    protected $acquirerResponseCode;
    protected $acquirerResponseMessage;
    protected $amount;
    protected $authorisationId;
    protected $avsAddressResponseCode;
    protected $avsPostcodeResponseCode;
    protected $captureDay;
    protected $captureMode;
    protected $cardCSCResultCode;
    protected $cardExpiryDate;
    protected $complementaryCode;
    protected $complementaryInfo;
    protected $currencyCode;
    protected $customerId;
    protected $customerIpAddress;
    protected $errorFieldName;
    protected $holderAuthentMethod;
    protected $holderAuthentRelegation;
    protected $holderAuthentStatus;
    protected $holderAuthentProgram;
    protected $invoiceReference;
    protected $guaranteeIndicator;
    protected $maskedPan;
    protected $merchantTransactionDateTime;
    protected $merchantId;
    protected $orderChannel;
    protected $orderId;
    protected $paymentMeanBrand;
    protected $paymentPattern;
    protected $responseCode;
    protected $returnContext;
    protected $statementReference;
    protected $holderAuthentResponseCode;
    protected $transactionDateTime;
    protected $transactionReference;
    protected $tokenPan;
    protected $scoreColor;
    protected $scoreInfo;
    protected $scoreProfile;
    protected $scoreThreshold;
    protected $scoreValue;
    protected $s10TransactionReference;
    protected $paymentMeanBrandSelectionStatus;
    protected $preAuthorisationProfile;
    protected $preAuthorisationProfileValue;
    protected $preAuthorisationRuleResultList;
    protected $acquirerNativeResponseCode;
    protected $transactionPlatform;
    protected $holderAuthentRelegationCode;
    
    /**
     * @var \Worldline\Sips\Common\Field\CardData
     */
    protected $cardData;
    protected $authorMessageReference;
    protected $authorisationTypeLabel;
    protected $acceptanceSystemApplicationId;
    protected $panEntryMode;
    protected $walletType;
    protected $issuerWalletInformation;
    protected $intermediateServiceProviderOperationId;
    protected $holderAuthentType;

    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            if ($key === 's10TransactionReference') {
                $s10   = new \Worldline\Sips\Common\Field\S10TransactionReference();
                $s10->hydrate($value);
                $value = $s10;
            } elseif ($key === 'cardData') {
                $cardData = new CardData();
                $cardData->hydrate($value);
                $value = $cardData;
            }
            $this->$key = $value;
        }
    }

    public function getAcquirerResponseCode()
    {
        return $this->acquirerResponseCode;
    }

    public function getAcquirerResponseMessage()
    {
        return $this->acquirerResponseMessage;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getAuthorisationId()
    {
        return $this->authorisationId;
    }

    public function getAvsAddressResponseCode()
    {
        return $this->avsAddressResponseCode;
    }

    public function getAvsPostcodeResponseCode()
    {
        return $this->avsPostcodeResponseCode;
    }

    public function getCaptureDay()
    {
        return $this->captureDay;
    }

    public function getCaptureMode()
    {
        return $this->captureMode;
    }

    public function getCardCSCResultCode()
    {
        return $this->cardCSCResultCode;
    }

    public function getCardExpiryDate()
    {
        return $this->cardExpiryDate;
    }

    public function getComplementaryCode()
    {
        return $this->complementaryCode;
    }

    public function getComplementaryInfo()
    {
        return $this->complementaryInfo;
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

    public function getErrorFieldName()
    {
        return $this->errorFieldName;
    }

    public function getHolderAuthentMethod()
    {
        return $this->holderAuthentMethod;
    }

    public function getHolderAuthentRelegation()
    {
        return $this->holderAuthentRelegation;
    }

    public function getHolderAuthentStatus()
    {
        return $this->holderAuthentStatus;
    }

    public function getHolderAuthentProgram()
    {
        return $this->holderAuthentProgram;
    }

    public function getInvoiceReference()
    {
        return $this->invoiceReference;
    }

    public function getGuaranteeIndicator()
    {
        return $this->guaranteeIndicator;
    }

    public function getMaskedPan()
    {
        return $this->maskedPan;
    }

    public function getMerchantTransactionDateTime()
    {
        return $this->merchantTransactionDateTime;
    }

    public function getMerchantId()
    {
        return $this->merchantId;
    }

    public function getOrderChannel()
    {
        return $this->orderChannel;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function getPaymentMeanBrand()
    {
        return $this->paymentMeanBrand;
    }

    public function getPaymentPattern()
    {
        return $this->paymentPattern;
    }

    public function getResponseCode()
    {
        return $this->responseCode;
    }

    public function getReturnContext()
    {
        return $this->returnContext;
    }

    public function getStatementReference()
    {
        return $this->statementReference;
    }

    public function getHolderAuthentResponseCode()
    {
        return $this->holderAuthentResponseCode;
    }

    public function getTransactionDateTime()
    {
        return $this->transactionDateTime;
    }

    public function getTransactionReference()
    {
        return $this->transactionReference;
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

    public function getS10TransactionReference()
    {
        return $this->s10TransactionReference;
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

    public function getAcquirerNativeResponseCode()
    {
        return $this->acquirerNativeResponseCode;
    }

    public function getTransactionPlatform()
    {
        return $this->transactionPlatform;
    }

    public function getHolderAuthentRelegationCode()
    {
        return $this->holderAuthentRelegationCode;
    }

    /**
     * @return Worldline\Sips\Common\Field\CardData
     */
    public function getCardData(): CardData
    {
        return $this->cardData;
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

    public function getIntermediateServiceProviderOperationId()
    {
        return $this->intermediateServiceProviderOperationId;
    }

    public function getHolderAuthentType()
    {
        return $this->holderAuthentType;
    }


}