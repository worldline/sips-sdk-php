<?php

namespace Worldline\Sips\Common\Field;

class FraudData extends \Worldline\Sips\Common\Field
{
    protected $bypassCtrlList;
    protected $bypassInfoList;
    protected $bypass3DS;
    protected $allowedCardCountryList;
    protected $deniedCardCountryList;
    protected $allowedIpCountryList;
    protected $deniedIpCountryList;
    protected $allowedCardArea;
    protected $deniedCardArea;
    protected $allowedIpArea;
    protected $deniedIpArea;
    protected $riskManagementDynamicSettingList;
    protected $challengeMode3DS;
    protected $addressDeliveryBillingMatchIndicator;
    protected $nameDeliveryCustomerMatchIndicator;
    protected $productAvailabilityIndicator;
    protected $reorderProductIndicator;
    protected $merchantCustomerAuthentMethod;

    public function getBypassCtrlList()
    {
        return $this->bypassCtrlList;
    }

    public function getBypassInfoList()
    {
        return $this->bypassInfoList;
    }

    public function getBypass3DS()
    {
        return $this->bypass3DS;
    }

    public function getAllowedCardCountryList()
    {
        return $this->allowedCardCountryList;
    }

    public function getDeniedCardCountryList()
    {
        return $this->deniedCardCountryList;
    }

    public function getAllowedIpCountryList()
    {
        return $this->allowedIpCountryList;
    }

    public function getDeniedIpCountryList()
    {
        return $this->deniedIpCountryList;
    }

    public function getAllowedCardArea()
    {
        return $this->allowedCardArea;
    }

    public function getDeniedCardArea()
    {
        return $this->deniedCardArea;
    }

    public function getAllowedIpArea()
    {
        return $this->allowedIpArea;
    }

    public function getDeniedIpArea()
    {
        return $this->deniedIpArea;
    }

    public function getRiskManagementDynamicSettingList()
    {
        return $this->riskManagementDynamicSettingList;
    }

    public function getChallengeMode3DS()
    {
        return $this->challengeMode3DS;
    }

    public function getAddressDeliveryBillingMatchIndicator()
    {
        return $this->addressDeliveryBillingMatchIndicator;
    }

    public function getNameDeliveryCustomerMatchIndicator()
    {
        return $this->nameDeliveryCustomerMatchIndicator;
    }

    public function getProductAvailabilityIndicator()
    {
        return $this->productAvailabilityIndicator;
    }

    public function getReorderProductIndicator()
    {
        return $this->reorderProductIndicator;
    }

    public function getMerchantCustomerAuthentMethod()
    {
        return $this->merchantCustomerAuthentMethod;
    }

    public function setBypassCtrlList($bypassCtrlList)
    {
        $this->bypassCtrlList = $bypassCtrlList;
        return $this;
    }

    public function setBypassInfoList($bypassInfoList)
    {
        $this->bypassInfoList = $bypassInfoList;
        return $this;
    }

    public function setBypass3DS($bypass3DS)
    {
        $this->bypass3DS = $bypass3DS;
        return $this;
    }

    public function setAllowedCardCountryList($allowedCardCountryList)
    {
        $this->allowedCardCountryList = $allowedCardCountryList;
        return $this;
    }

    public function setDeniedCardCountryList($deniedCardCountryList)
    {
        $this->deniedCardCountryList = $deniedCardCountryList;
        return $this;
    }

    public function setAllowedIpCountryList($allowedIpCountryList)
    {
        $this->allowedIpCountryList = $allowedIpCountryList;
        return $this;
    }

    public function setDeniedIpCountryList($deniedIpCountryList)
    {
        $this->deniedIpCountryList = $deniedIpCountryList;
        return $this;
    }

    public function setAllowedCardArea($allowedCardArea)
    {
        $this->allowedCardArea = $allowedCardArea;
        return $this;
    }

    public function setDeniedCardArea($deniedCardArea)
    {
        $this->deniedCardArea = $deniedCardArea;
        return $this;
    }

    public function setAllowedIpArea($allowedIpArea)
    {
        $this->allowedIpArea = $allowedIpArea;
        return $this;
    }

    public function setDeniedIpArea($deniedIpArea)
    {
        $this->deniedIpArea = $deniedIpArea;
        return $this;
    }

    public function setRiskManagementDynamicSettingList($riskManagementDynamicSettingList)
    {
        $this->riskManagementDynamicSettingList = $riskManagementDynamicSettingList;
        return $this;
    }

    public function setChallengeMode3DS($challengeMode3DS)
    {
        $this->challengeMode3DS = $challengeMode3DS;
        return $this;
    }

    public function setAddressDeliveryBillingMatchIndicator($addressDeliveryBillingMatchIndicator)
    {
        $this->addressDeliveryBillingMatchIndicator = $addressDeliveryBillingMatchIndicator;
        return $this;
    }

    public function setNameDeliveryCustomerMatchIndicator($nameDeliveryCustomerMatchIndicator)
    {
        $this->nameDeliveryCustomerMatchIndicator = $nameDeliveryCustomerMatchIndicator;
        return $this;
    }

    public function setProductAvailabilityIndicator($productAvailabilityIndicator)
    {
        $this->productAvailabilityIndicator = $productAvailabilityIndicator;
        return $this;
    }

    public function setReorderProductIndicator($reorderProductIndicator)
    {
        $this->reorderProductIndicator = $reorderProductIndicator;
        return $this;
    }

    public function setMerchantCustomerAuthentMethod($merchantCustomerAuthentMethod)
    {
        $this->merchantCustomerAuthentMethod = $merchantCustomerAuthentMethod;
        return $this;
    }

}