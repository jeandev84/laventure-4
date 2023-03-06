<?php
namespace App\Entity;

class Address
{

    /**
     * @var int
    */
    private $id;


    /**
     * @var string
    */
    private $city;



    /**
     * @var string
    */
    private $street;




    /**
     * @return int|null
    */
    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @param string $city
     * @return $this
     */
    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }


    /**
     * @return string
    */
    public function getCity(): string
    {
        return $this->city;
    }


    /**
     * @param string $street
     * @return Address
    */
    public function setStreet(string $street): static
    {
        $this->street = $street;

        return $this;
    }



    /**
     * @return string
    */
    public function getStreet(): string
    {
        return $this->street;
    }
}