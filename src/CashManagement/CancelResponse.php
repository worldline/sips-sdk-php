<?php

namespace Worldline\Sips\CashManagement;

class CancelResponse
{
    protected $acquirerResponseCode;
    protected $newAmount;
    protected $newStatus;
    protected $operationDateTime;
    protected $responseCode;
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

    function getSeal()
    {
        return $this->seal;
    }

    function getErrorFieldName()
    {
        return $this->errorFieldName;
    }
}