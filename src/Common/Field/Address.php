<?php

namespace Worldline\Sips\Common\Field;


/**
 * Class Address
 * @package Worldline\Sips\Common\Field
 */
class Address extends Field
{
    /**
     * @var string
     */
    private $addressAdditional1;
    /**
     * @var string
     */
    private $addressAdditional2;
    /**
     * @var string
     */
    private $addressAdditional3;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $company;
    /**
     * @var string
     */
    private $country;
    /**
     * @var string
     */
    private $postBox;
    /**
     * @var string
     */
    private $state;
    /**
     * @var string
     */
    private $street;
    /**
     * @var string
     */
    private $streetNumber;
    /**
     * @var string
     */
    private $zipCode;

    /**
     * @return string|null
     */
    public function getAddressAdditional1(): ?string
    {
        return $this->addressAdditional1;
    }

    /**
     * @param string $addressAdditional1
     * @return Address
     */
    public function setAddressAdditional1(string $addressAdditional1): Address
    {
        $this->addressAdditional1 = $addressAdditional1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressAdditional2(): ?string
    {
        return $this->addressAdditional2;
    }

    /**
     * @param string $addressAdditional2
     * @return Address
     */
    public function setAddressAdditional2(string $addressAdditional2): Address
    {
        $this->addressAdditional2 = $addressAdditional2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressAdditional3(): ?string
    {
        return $this->addressAdditional3;
    }

    /**
     * @param string $addressAdditional3
     * @return Address
     */
    public function setAddressAdditional3(string $addressAdditional3): Address
    {
        $this->addressAdditional3 = $addressAdditional3;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return Address
     */
    public function setCompany(string $company): Address
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry(string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostBox(): ?string
    {
        return $this->postBox;
    }

    /**
     * @param string $postBox
     * @return Address
     */
    public function setPostBox(string $postBox): Address
    {
        $this->postBox = $postBox;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->state = $state;
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet(string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    /**
     * @param string $streetNumber
     * @return Address
     */
    public function setStreetNumber(string $streetNumber): Address
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return Address
     */
    public function setZipCode(string $zipCode): Address
    {
        $this->zipCode = $zipCode;
        return $this;
    }

}
