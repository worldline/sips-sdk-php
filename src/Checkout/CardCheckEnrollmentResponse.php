<?php

namespace Worldline\Sips\Checkout;

class CardCheckEnrollmentResponse extends CheckEnrollmentResponse
{
    protected $paymentMeanBrandSelectionStatus;

    public function getPaymentMeanBrandSelectionStatus()
    {
        return $this->paymentMeanBrandSelectionStatus;
    }

}