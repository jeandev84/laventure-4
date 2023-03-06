<?php
namespace App\Entity;

class Product
{
    /**
     * @var int
     */
    private $id;


    /**
     * @var string
     */
    private $title;



    /**
     * @var string
    */
    private $description;




    /**
     * @var string
    */
    private $brochure;




    /**
     * @var
     */
    private $created_at;




    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }


    /**
     * @param string $description
     */
    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }


    /**
     * @return string
    */
    public function getDescription(): string
    {
        return $this->description;
    }




    /**
     * @param \DateTime $created_at
     * @return $this
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
     * @param string $brochure
     * @return $this
    */
    public function setBrochure(string $brochure): static
    {
        $this->brochure = $brochure;

        return $this;
    }


    /**
     * @return string
     */
    public function getBrochure(): string
    {
        return $this->brochure;
    }
}