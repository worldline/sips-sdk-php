<?php

namespace Worldline\Sips\Common\Field;

class S10FromTransactionReference extends Field
{
    protected $s10FromTransactionId;

    protected $s10FromTransactionIdDate;

    public function getS10TransactionId()
    {
        return $this->s10FromTransactionId;
    }

    public function getS10TransactionIdDate()
    {
        return $this->s10FromTransactionIdDate;
    }

    public function setS10TransactionId($s10TransactionId)
    {
        $this->s10FromTransactionId = $s10TransactionId;
        return $this;
    }

    public function setS10TransactionIdDate($s10TransactionIdDate)
    {
        $this->s10FromTransactionIdDate = $s10TransactionIdDate;
        return $this;
    }


}