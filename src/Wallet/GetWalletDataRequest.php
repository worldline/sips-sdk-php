<?php

namespace Worldline\Sips\Wallet;

/**
 * This function allows to consult a wallet and payment means associated to it. If the account does not exist,
 * a 01 response code is returned. If the request works,
 * 00 response code is returned as well as information related to the payment means.
 * 
 * @author Guiled <guislain.duthieuw@gmail.com>
 */
class GetWalletDataRequest extends \Worldline\Sips\SipsRequest
{
    protected $merchantWalletId;

    protected $intermediateServiceProviderId;

    /**
     * @author Guiled <guislain.duthieuw@gmail.com>
     */
    public function __construct()
    {
        $this->connecter        = \Worldline\Sips\Common\SipsEnvironment::OFFICE;
        $this->serviceUrl       = "rs-services/v2/wallet/getWalletData";
        $this->interfaceVersion = "WR_WS_2.12";
    }

    public function getMerchantWalletId()
    {
        return $this->merchantWalletId;
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

    public function setIntermediateServiceProviderId($intermediateServiceProviderId)
    {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;
        return $this;
    }


}