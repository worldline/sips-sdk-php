<?php

namespace Worldline\Sips\Checkout;

/**
 * Requests for payment initialization via card with 3-D Secure process.
 * This request initializes a transaction on Sips platform and checks the card enrollment. If the card is enrolled to
 * 3D-Secure program, you will receive in response a secure URL (redirectionUrl) to which the customer should be
 * redirected to continue the authentication. This redirection must be made via a POST form.
 * 
 * @author Guiled <guislain.duthieuw@gmail.com>
 */
class CardValidateAuthenticationAndOrderRequest extends \Worldline\Sips\SipsMessage
{

    /**
     *
     * @var \Worldline\Sips\Common\Field\S10TransactionReference
     */
    protected $s10TransactionReference;
    protected $messageVersion;
    protected $redirectionData;
    protected $paResMessage;
    protected $intermediateServiceProviderId;

    /**
     * @author Guiled <guislain.duthieuw@gmail.com>
     */
    public function __construct()
    {
        $this->connecter        = \Worldline\Sips\Common\SipsEnvironment::OFFICE;
        $this->serviceUrl       = "/rs-services/v2/checkout/cardValidateAuthenticationAndOrder";
        $this->interfaceVersion = "IR_WS_2.35";
    }

    public function getS10TransactionReference(): \Worldline\Sips\Common\Field\S10TransactionReference
    {
        return $this->s10TransactionReference;
    }

    public function getMessageVersion()
    {
        return $this->messageVersion;
    }

    public function getRedirectionData()
    {
        return $this->redirectionData;
    }

    public function getPaResMessage()
    {
        return $this->paResMessage;
    }

    public function getIntermediateServiceProviderId()
    {
        return $this->intermediateServiceProviderId;
    }

    public function setS10TransactionReference(\Worldline\Sips\Common\Field\S10TransactionReference $s10TransactionReference)
    {
        $this->s10TransactionReference = $s10TransactionReference;
        return $this;
    }

    public function setMessageVersion($messageVersion)
    {
        $this->messageVersion = $messageVersion;
        return $this;
    }

    public function setRedirectionData($redirectionData)
    {
        $this->redirectionData = $redirectionData;
        return $this;
    }

    public function setPaResMessage($paResMessage)
    {
        $this->paResMessage = $paResMessage;
        return $this;
    }

    public function setIntermediateServiceProviderId($intermediateServiceProviderId)
    {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;
        return $this;
    }

}