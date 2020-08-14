<?php

namespace Worldline\Sips\Wallet;

/**
 * This function allows to create a wallet account with a card. The latter is created at the same time as adding the
 * card, if it does not exist. If the card is already recorded in the wallet, then a 94 response code is returned.
 * If the creation succeeds, response code 00 is returned as well as a lot of information about the account
 * and the associated card
 * 
 * @author Guiled <guislain.duthieuw@gmail.com>
 */
class AddCardRequest extends \Worldline\Sips\SipsRequest
{
    protected $cardNumber;

    protected $cardExpiryDate;

    protected $merchantWalletId;

    protected $paymentMeanAlias;

    protected $paymentMeanBrand;

    protected $intermediateServiceProviderId;

    protected $panType;

    /**
     * @author Guiled <guislain.duthieuw@gmail.com>
     */
    public function __construct()
    {
        $this->connecter        = \Worldline\Sips\Common\SipsEnvironment::OFFICE;
        $this->serviceUrl       = "rs-services/v2/wallet/addCard";
        $this->interfaceVersion = "WR_WS_2.31";
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function getCardExpiryDate()
    {
        return $this->cardExpiryDate;
    }

    public function getMerchantWalletId()
    {
        return $this->merchantWalletId;
    }

    public function getPaymentMeanAlias()
    {
        return $this->paymentMeanAlias;
    }

    public function getPaymentMeanBrand()
    {
        return $this->paymentMeanBrand;
    }

    public function getIntermediateServiceProviderId()
    {
        return $this->intermediateServiceProviderId;
    }

    function getPanType()
    {
        return $this->panType;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    public function setCardExpiryDate($cardExpiryDate)
    {
        $this->cardExpiryDate = $cardExpiryDate;
        return $this;
    }

    public function setMerchantWalletId($merchantWalletId)
    {
        $this->merchantWalletId = $merchantWalletId;
        return $this;
    }

    public function setPaymentMeanAlias($paymentMeanAlias)
    {
        $this->paymentMeanAlias = $paymentMeanAlias;
        return $this;
    }

    public function setPaymentMeanBrand($paymentMeanBrand)
    {
        $this->paymentMeanBrand = $paymentMeanBrand;
        return $this;
    }

    public function setIntermediateServiceProviderId($intermediateServiceProviderId)
    {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;
        return $this;
    }

    function setPanType($panType): void
    {
        $this->panType = $panType;
    }


}