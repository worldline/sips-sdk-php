<?php
namespace Worldline\Sips\Common\Field;

class DeliveryData extends \Worldline\Sips\Common\Field
{

    protected $deliveryChargeAmount;
    protected $estimatedDeliveryDate;
    protected $deliveryMode;
    protected $deliveryMethod;
    protected $deliveryOperator;
    protected $estimatedDeliveryDelay;
    protected $deliveryAddressCreationDate;
    protected $electronicDeliveryIndicator;

    public function getDeliveryChargeAmount()
    {
        return $this->deliveryChargeAmount;
    }

    public function getEstimatedDeliveryDate()
    {
        return $this->estimatedDeliveryDate;
    }

    public function getDeliveryMode()
    {
        return $this->deliveryMode;
    }

    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    public function getDeliveryOperator()
    {
        return $this->deliveryOperator;
    }

    public function getEstimatedDeliveryDelay()
    {
        return $this->estimatedDeliveryDelay;
    }

    public function getDeliveryAddressCreationDate()
    {
        return $this->deliveryAddressCreationDate;
    }

    public function getElectronicDeliveryIndicator()
    {
        return $this->electronicDeliveryIndicator;
    }

    public function setDeliveryChargeAmount($deliveryChargeAmount)
    {
        $this->deliveryChargeAmount = $deliveryChargeAmount;
        return $this;
    }

    public function setEstimatedDeliveryDate($estimatedDeliveryDate)
    {
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
        return $this;
    }

    public function setDeliveryMode($deliveryMode)
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    public function setDeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
        return $this;
    }

    public function setDeliveryOperator($deliveryOperator)
    {
        $this->deliveryOperator = $deliveryOperator;
        return $this;
    }

    public function setEstimatedDeliveryDelay($estimatedDeliveryDelay)
    {
        $this->estimatedDeliveryDelay = $estimatedDeliveryDelay;
        return $this;
    }

    public function setDeliveryAddressCreationDate($deliveryAddressCreationDate)
    {
        $this->deliveryAddressCreationDate = $deliveryAddressCreationDate;
        return $this;
    }

    public function setElectronicDeliveryIndicator($electronicDeliveryIndicator)
    {
        $this->electronicDeliveryIndicator = $electronicDeliveryIndicator;
        return $this;
    }


}
