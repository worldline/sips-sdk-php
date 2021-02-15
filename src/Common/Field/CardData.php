<?php

namespace Worldline\Sips\Common\Field;

class CardData
{
    /**
     * Network name associated with the card.
     * @var string
     */
    protected $cardScheme;

    /**
     * Name of the payment method that is used. It is related to one paymentMeanType.
     * @var string
     */
    protected $cardBrand;

    /**
     * Product code of the card.
     * @var string
     */
    protected $cardProductCode;

    /**
     * Product name of the card.
     * @var string
     */
    protected $cardProductName;

    /**
     * Indicates whether the card is an Enterprise / Commercial card or not.
     * @var string
     */
    protected $cardCorporateIndicator;

    /**
     * Indicator of existence of a card effective date (Y/N/Empty)
     * @var string
     */
    protected $cardEffectiveDateIndicator;

    /**
     * Indicator of existence of an issue number
     * @var string
     */
    protected $cardSeqNumberIndicator;

    /**
     * Issuer code of the card
     * @var string
     */
    protected $issuerCode;

    /**
     * Issuer name of the card
     * @var string
     */
    protected $issuerName;

    /**
     * Country code of the card issuer
     * @var string
     */
    protected $issuerCountryCode;

    /**
     * region code of the card issuer
     * @var string
     */
    protected $issuerRegionCode;

    /**
     * Minimal length of the PAN
     * @var int
     */
    protected $panLengthMin;

    /**
     * Maximum length of the PAN
     * @var int
     */
    protected $panLengthMax;

    /**
     * Control algorithm applied on the PAN (L/V/N/Empty)
     * @var string
     */
    protected $panCheckAlgorithm;

    /**
     * Profile code of the card.
     * @var string
     */
    protected $cardProductProfile;

    /**
     * Indicates whether the card is a virtual card
     * @var string
     */
    protected $virtualCardIndicator;

    /**
     * Profile name of the card which is displayed on payment electronic ticket in accordance with MPADS requirements.
     * @var string
     */
    protected $cardProductUsageLabel;
}
