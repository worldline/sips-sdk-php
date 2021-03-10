<?php
namespace Worldline\Sips\Common\Field;

class CustomerAccountHistoric extends Field
{

    protected $addPaymentMeanDate;
    protected $changeDate;
    protected $creationDate;
    protected $customerAccountId;
    protected $numberOfAttemptsAddCard24Hours;
    protected $numberOfPurchase180Days;
    protected $numberOfTransaction24Hours;
    protected $numberOfTransactionYear;
    protected $passwordChangeDate;
    protected $suspiciousActivityIndicator;

    public function getAddPaymentMeanDate()
    {
        return $this->addPaymentMeanDate;
    }

    public function getChangeDate()
    {
        return $this->changeDate;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function getCustomerAccountId()
    {
        return $this->customerAccountId;
    }

    public function getNumberOfAttemptsAddCard24Hours()
    {
        return $this->numberOfAttemptsAddCard24Hours;
    }

    public function getNumberOfPurchase180Days()
    {
        return $this->numberOfPurchase180Days;
    }

    public function getNumberOfTransaction24Hours()
    {
        return $this->numberOfTransaction24Hours;
    }

    public function getPasswordChangeDate()
    {
        return $this->passwordChangeDate;
    }

    public function getSuspiciousActivityIndicator()
    {
        return $this->suspiciousActivityIndicator;
    }

    public function setAddPaymentMeanDate($addPaymentMeanDate)
    {
        $this->addPaymentMeanDate = $addPaymentMeanDate;
        return $this;
    }

    public function setChangeDate($changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }

    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    public function setCustomerAccountId($customerAccountId)
    {
        $this->customerAccountId = $customerAccountId;
        return $this;
    }

    public function setNumberOfAttemptsAddCard24Hours($numberOfAttemptsAddCard24Hours)
    {
        $this->numberOfAttemptsAddCard24Hours = $numberOfAttemptsAddCard24Hours;
        return $this;
    }

    public function setNumberOfPurchase180Days($numberOfPurchase180Days)
    {
        $this->numberOfPurchase180Days = $numberOfPurchase180Days;
        return $this;
    }

    public function setNumberOfTransaction24Hours($numberOfTransaction24Hours)
    {
        $this->numberOfTransaction24Hours = $numberOfTransaction24Hours;
        return $this;
    }

    public function setPasswordChangeDate($passwordChangeDate)
    {
        $this->passwordChangeDate = $passwordChangeDate;
        return $this;
    }

    public function setSuspiciousActivityIndicator($suspiciousActivityIndicator)
    {
        $this->suspiciousActivityIndicator = $suspiciousActivityIndicator;
        return $this;
    }

    public function getNumberOfTransactionYear()
    {
        return $this->numberOfTransactionYear;
    }

    public function setNumberOfTransactionYear($numberOfTransactionYear)
    {
        $this->numberOfTransactionYear = $numberOfTransactionYear;
        return $this;
    }
}
