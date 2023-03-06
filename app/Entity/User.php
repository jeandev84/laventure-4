<?php
namespace App\Entity;

use Lexus\Component\Database\ORM\Mapper\Collection\ArrayCollection;

class User
{

       /**
        * @var int
       */
       private $id;


       /**
        * @var string
       */
       private $name;



       /**
        * @var string
       */
       private $phone;



       /**
         * @var
       */
       private $created_at;



       /**
        * @var Address
       */
       private $address;




      /**
       * @var ArrayCollection
       */
       private $products;




       public function __construct()
       {
            $this->products = new ArrayCollection();
       }



       /**
        * @return int|null
       */
       public function getId(): ?int
       {
            return $this->id;
       }


      /**
       * @param string $name
       * @return User
       */
       public function setName(string $name): static
       {
            $this->name = $name;

            return $this;
       }


       /**
        * @return string
       */
       public function getName(): string
       {
           return $this->name;
       }


       /**
        * @param string $phone
        * @return User
       */
       public function setPhone(string $phone): static
       {
           $this->phone = $phone;

           return $this;
       }




      /**
       * @return string
      */
      public function getPhone(): string
      {
          return $this->phone;
      }


      /**
       * @param \DateTime $created_at
       * @return User
      */
      public function setCreatedAt(\DateTime $created_at): static
      {
          $this->created_at = $created_at;

          return $this;
      }




     /**
      * @return mixed
     */
     public function getCreatedAt()
     {
        return $this->created_at;
     }




    /**
     * @param Product $product
     * @return $this
    */
    public function addProduct(Product $product): static
    {
        $this->products[] = $product;

        return $this;
    }


    /**
     * @return ArrayCollection
    */
    public function getProducts(): ArrayCollection
    {
        return $this->products;
    }




    /**
     * @param Address $address
     * @return $this
    */
    public function setAddress(Address $address): static
    {
        $this->address = $address;

        return $this;
    }




    /**
     * @return Address
    */
    public function getAddress(): Address
    {
        return $this->address;
    }
}