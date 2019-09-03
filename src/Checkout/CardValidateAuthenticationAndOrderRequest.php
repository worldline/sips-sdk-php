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
class CardValidateAuthenticationAndOrderRequest extends \Worldline\Sips\SipsRequest
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
    protected $paymentMeanBrand;
    protected $paymentMeanBrandSelectionStatus;
    protected $travelContext;
    protected $orderContext;
    protected $paymentMeanData;
    protected $customerAccountHistoric;

    /**
     * @author Guiled <guislain.duthieuw@gmail.com>
     */
    public function __construct()
    {
        $this->connecter        = \Worldline\Sips\Common\SipsEnvironment::OFFICE;
        $this->serviceUrl       = "/rs-services/v2/checkout/cardValidateAuthenticationAndOrder";
        $this->interfaceVersion = "IR_WS_2.23";
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

    public function getPaymentMeanBrand()
    {
        return $this->paymentMeanBrand;
    }

    public function getPaymentMeanBrandSelectionStatus()
    {
        return $this->paymentMeanBrandSelectionStatus;
    }

    public function getTravelContext()
    {
        return $this->travelContext;
    }

    public function getOrderContext()
    {
        return $this->orderContext;
    }

    public function getPaymentMeanData()
    {
        return $this->paymentMeanData;
    }

    public function getCustomerAccountHistoric()
    {
        return $this->customerAccountHistoric;
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

    public function setPaymentMeanBrand($paymentMeanBrand)
    {
        $this->paymentMeanBrand = $paymentMeanBrand;
        return $this;
    }

    public function setPaymentMeanBrandSelectionStatus($paymentMeanBrandSelectionStatus)
    {
        $this->paymentMeanBrandSelectionStatus = $paymentMeanBrandSelectionStatus;
        return $this;
    }

    public function setTravelContext($travelContext)
    {
        $this->travelContext = $travelContext;
        return $this;
    }

    public function setOrderContext($orderContext)
    {
        $this->orderContext = $orderContext;
        return $this;
    }

    public function setPaymentMeanData($paymentMeanData)
    {
        $this->paymentMeanData = $paymentMeanData;
        return $this;
    }

    public function setCustomerAccountHistoric($customerAccountHistoric)
    {
        $this->customerAccountHistoric = $customerAccountHistoric;
        return $this;
    }


}