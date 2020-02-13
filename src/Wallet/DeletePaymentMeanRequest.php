<?php

namespace Worldline\Sips\Wallet;

/**
 * This function allows a merchant to permanently delete one of the payment means of his wallet.
 * If the account or the card does not exist, a 01 response code is returned.
 * If the deletion works, 00 response code is returned and the date of removal
 * 
 * @author Guiled <guislain.duthieuw@gmail.com>
 */
class DeletePaymentMeanRequest extends \Worldline\Sips\SipsRequest
{
    protected $merchantWalletId;
    protected $paymentMeanId;
    protected $intermediateServiceProviderId;

    /**
     * @author Guiled <guislain.duthieuw@gmail.com>
     */
    public function __construct()
    {
        $this->connecter        = \Worldline\Sips\Common\SipsEnvironment::OFFICE;
        $this->serviceUrl       = "rs-services/v2/wallet/deletePaymentMean";
        $this->interfaceVersion = "WR_WS_2.12";
    }

    public function getMerchantWalletId()
    {
        return $this->merchantWalletId;
    }

    public function getPaymentMeanId()
    {
        return $this->paymentMeanId;
    }

    public function getIntermediateServiceProviderId()
    {
        return $this->intermediateServiceProviderId;
    }

    public function setMerchantWalletId($merchantWalletId)
    {
        $this->merchantWalletId = $merchantWalletId;
        return $this;
    }

    public function setPaymentMeanId($paymentMeanId)
    {
        $this->paymentMeanId = $paymentMeanId;
        return $this;
    }

    public function setIntermediateServiceProviderId($intermediateServiceProviderId)
    {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;
        return $this;
    }


}