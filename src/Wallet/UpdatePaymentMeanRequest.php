<?php

namespace Worldline\Sips\Wallet;

/**
 * This function allows you to update one of the payment means contained in the client's wallet.
 * If the account or the payment mean do not exist, a 01 response code is returned.
 * If the update works, 00 response code is returned and the date of update.
 * 
 * @author Guiled <guislain.duthieuw@gmail.com>
 */
class UpdatePaymentMeanRequest extends \Worldline\Sips\SipsMessage
{
    protected $merchantWalletId;
    protected $paymentMeanId;
    protected $paymentMeanAlias;
    protected $intermediateServiceProviderId;

    /**
     * @author Guiled <guislain.duthieuw@gmail.com>
     */
    public function __construct()
    {
        $this->connecter        = \Worldline\Sips\Common\SipsEnvironment::OFFICE;
        $this->serviceUrl       = "rs-services/v2/wallet/updatePaymentMean";
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

    public function getPaymentMeanAlias()
    {
        return $this->paymentMeanAlias;
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

    public function setPaymentMeanAlias($paymentMeanAlias)
    {
        $this->paymentMeanAlias = $paymentMeanAlias;
        return $this;
    }

    public function setIntermediateServiceProviderId($intermediateServiceProviderId)
    {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;
        return $this;
    }
}