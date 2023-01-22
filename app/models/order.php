<?php
class Order
{

    private int $id;
    private string $firstName;
    private string $lastName;
    private string $emailAddress;
    private string $dateOrdered;
    private string $price;


    /**
     * @return int 
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id 
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName 
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName 
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress 
     * @return self
     */
    public function setEmailAddress(string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateOrdered(): string
    {
        return $this->dateOrdered;
    }

    /**
     * @param string $dateOrdered 
     * @return self
     */
    public function setDateOrdered(string $dateOrdered): self
    {
        $this->dateOrdered = $dateOrdered;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price 
     * @return self
     */
    public function setPrice(string $price): self
    {
        $this->price = $price;
        return $this;
    }
}