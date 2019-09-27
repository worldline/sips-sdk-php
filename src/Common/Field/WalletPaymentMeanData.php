<?php

namespace Worldline\Sips\Common\Field;

/**
 * 
 *
 * @author Guiled <guislain.duthieuw@gmail.com>
 */
class WalletPaymentMeanData
{
    /**
     *
     * @var int
     */
    protected $paymentMeanId;

    /**
     *
     * @var string
     */
    protected $maskedPan;

    /**
     *
     * @var string
     */
    protected $paymentMeanAlias;

    /**
     * Format YYYYMM
     * @var int
     */
    protected $panExpiryDate;

    /**
     *
     * @var string
     */
    protected $paymentMeanBrand;

    /**
     * Indicates the players in the transaction.
     * Values: BTOB, BTOC, BTOF
     * @var string
     */
    protected $transactionActors;

    /**
     *
     * @var Worldline\Sips\Common\PspData
     */
    protected $pspData;

    /**
     *
     * @var string
     */
    protected $mandateId;

    /**
     * Identifier provided by issuer wallet to identify a payment mean.
     * @var string
     */
    protected $issuerWalletId;

    /**
     * Can be "Paylib"
     * @var string
     */
    protected $issuerWalletType;

    public function __construct($data)
    {
        foreach ($data as $name => $value)
        {
            if ($name === 'pspData')
            {
                $value = new PspData($value);
            }
            $this->$name = $value;
        }
    }

    public function getPaymentMeanId()
    {
        return $this->paymentMeanId;
    }

    public function getMaskedPan()
    {
        return $this->maskedPan;
    }

    public function getPaymentMeanAlias()
    {
        return $this->paymentMeanAlias;
    }

    public function getPanExpiryDate()
    {
        return $this->panExpiryDate;
    }

    public function getPaymentMeanBrand()
    {
        return $this->paymentMeanBrand;
    }

    public function getTransactionActors()
    {
        return $this->transactionActors;
    }

    public function getPspData(): Worldline\Sips\Common\PspData
    {
        return $this->pspData;
    }

    public function getMandateId()
    {
        return $this->mandateId;
    }

    public function getIssuerWalletId()
    {
        return $this->issuerWalletId;
    }

    public function getIssuerWalletType()
    {
        return $this->issuerWalletType;
    }

    public function setPaymentMeanId($paymentMeanId)
    {
        $this->paymentMeanId = $paymentMeanId;
        return $this;
    }

    public function setMaskedPan($maskedPan)
    {
        $this->maskedPan = $maskedPan;
        return $this;
    }

    public function setPaymentMeanAlias($paymentMeanAlias)
    {
        $this->paymentMeanAlias = $paymentMeanAlias;
        return $this;
    }

    public function setPanExpiryDate($panExpiryDate)
    {
        $this->panExpiryDate = $panExpiryDate;
        return $this;
    }

    public function setPaymentMeanBrand($paymentMeanBrand)
    {
        $this->paymentMeanBrand = $paymentMeanBrand;
        return $this;
    }

    public function setTransactionActors($transactionActors)
    {
        $this->transactionActors = $transactionActors;
        return $this;
    }

    public function setPspData(Worldline\Sips\Common\PspData $pspData)
    {
        $this->pspData = $pspData;
        return $this;
    }

    public function setMandateId($mandateId)
    {
        $this->mandateId = $mandateId;
        return $this;
    }

    public function setIssuerWalletId($issuerWalletId)
    {
        $this->issuerWalletId = $issuerWalletId;
        return $this;
    }

    public function setIssuerWalletType($issuerWalletType)
    {
        $this->issuerWalletType = $issuerWalletType;
        return $this;
    }



}