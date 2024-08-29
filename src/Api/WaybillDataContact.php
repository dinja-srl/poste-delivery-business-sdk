<?php

namespace Dinja\PosteDeliveryBusinessSDK\Api;

class WaybillDataContact
{
    /** @var string */
    private $zipCode;

    /** @var string */
    private $addressId;

    /** @var string */
    private $streetNumber;

    /** @var string */
    private $city;

    /** @var string */
    private $address;

    /** @var string */
    private $country;

    /** @var string */
    private $countryName;

    /** @var string */
    private $nameSurname;

    /** @var string */
    private $contactName;

    /** @var string */
    private $province;

    /** @var string */
    private $email;

    /** @var string */
    private $phone;

    /** @var string */
    private $cellphone;

    /** @var string */
    private $note1;

    public function toArray()
    {
        return [
            'zipCode' => $this->zipCode,
            'addressId' => $this->addressId,
            //'streetNumber' => $this->streetNumber,
            'city' => $this->city,
            'address' => $this->address,
            'country' => $this->country,
            'countryName' => $this->countryName,
            'nameSurname' => $this->nameSurname,
            'contactName' => $this->contactName,
            'province' => $this->province,
            'email' => $this->email,
            'phone' => $this->phone,
            'cellphone' => $this->cellphone,
            'note1' => $this->note1
        ];
    }

    /**
     * Get the value of zipCode
     */ 
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set the value of zipCode
     *
     * @return  self
     */ 
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get the value of addressId
     */ 
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set the value of addressId
     *
     * @return  self
     */ 
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * Get the value of streetNumber
     */ 
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Set the value of streetNumber
     *
     * @return  self
     */ 
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of country
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */ 
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of countryName
     */ 
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Set the value of countryName
     *
     * @return  self
     */ 
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Get the value of nameSurname
     */ 
    public function getNameSurname()
    {
        return $this->nameSurname;
    }

    /**
     * Set the value of nameSurname
     *
     * @return  self
     */ 
    public function setNameSurname($nameSurname)
    {
        $this->nameSurname = $nameSurname;

        return $this;
    }

    /**
     * Get the value of contactName
     */ 
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set the value of contactName
     *
     * @return  self
     */ 
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get the value of province
     */ 
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set the value of province
     *
     * @return  self
     */ 
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of cellphone
     */ 
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * Set the value of cellphone
     *
     * @return  self
     */ 
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get the value of note1
     */ 
    public function getNote1()
    {
        return $this->note1;
    }

    /**
     * Set the value of note1
     *
     * @return  self
     */ 
    public function setNote1($note1)
    {
        $this->note1 = $note1;

        return $this;
    }

}
