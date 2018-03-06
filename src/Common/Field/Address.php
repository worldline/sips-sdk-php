<?php

namespace Worldline\Sips\Common\Field;


class Address
{
    private $addressAdditional1;
    private $addressAdditional2;
    private $addressAdditional3;
    private $city;
    private $company;
    private $country;
    private $postBox;
    private $state;
    private $street;
    private $streetNumber;
    private $zipCode;

    /**
     * @return string
     */
    public function getAddressAdditional1(): string
    {
        return $this->addressAdditional1;
    }

    /**
     * @param string $addressAdditional1
     */
    public function setAddressAdditional1(string $addressAdditional1)
    {
        $this->addressAdditional1 = $addressAdditional1;
    }

    /**
     * @return string
     */
    public function getAddressAdditional2(): string
    {
        return $this->addressAdditional2;
    }

    /**
     * @param string $addressAdditional2
     */
    public function setAddressAdditional2(string $addressAdditional2)
    {
        $this->addressAdditional2 = $addressAdditional2;
    }

    /**
     * @return string
     */
    public function getAddressAdditional3(): string
    {
        return $this->addressAdditional3;
    }

    /**
     * @param string $addressAdditional3
     */
    public function setAddressAdditional3(string $addressAdditional3)
    {
        $this->addressAdditional3 = $addressAdditional3;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany(string $company)
    {
        $this->company = $company;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getPostBox(): string
    {
        return $this->postBox;
    }

    /**
     * @param string $postBox
     */
    public function setPostBox(string $postBox)
    {
        $this->postBox = $postBox;
    }

    /**
     * @return string
     */
    public function getState(): string
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
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getStreetNumber(): string
    {
        return $this->streetNumber;
    }

    /**
     * @param string $streetNumber
     */
    public function setStreetNumber(string $streetNumber)
    {
        $this->streetNumber = $streetNumber;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode(string $zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        foreach ($this as $key => $value) {
            if ($value != null) {
                $array[$key] = $value;
            }
        }
        ksort($array);
        return $array;
    }
}