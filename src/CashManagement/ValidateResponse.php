<?php

namespace Worldline\Sips\CashManagement;

class ValidateResponse
{
    protected $acquirerResponseCode;
    protected $authorisationId;
    protected $newAmount;
    protected $newStatus;
    protected $operationDateTime;
    protected $responseCode;
    protected $captureLimitDate;
    protected $seal;
    protected $errorFieldName;

    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    function getAcquirerResponseCode()
    {
        return $this->acquirerResponseCode;
    }

    function getAuthorisationId()
    {
        return $this->authorisationId;
    }

    function getNewAmount()
    {
        return $this->newAmount;
    }

    function getNewStatus()
    {
        return $this->newStatus;
    }

    function getOperationDateTime()
    {
        return $this->operationDateTime;
    }

    function getResponseCode()
    {
        return $this->responseCode;
    }

    function getCaptureLimitDate()
    {
        return $this->captureLimitDate;
    }

    function getSeal()
    {
        return $this->seal;
    }

    function getErrorFieldName()
    {
        return $this->errorFieldName;
    }


}