<?php


class Customer
{
    private int $îd;
    private string $firstName;
    private string $lastName;
    private int $groupId;
    private int $fixedDiscount;
    private int $variableDiscount;

    public function __construct(int $id, string $firstName, string $lastName, int $groupId, int $fixedDiscount, int $variableDiscount)
    {
        $this->îd = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->groupId = $groupId;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;

    }

    public function getId()
    {
        return $this->îd;
    }

    public function getFirstname()
    {
        return $this->firstName;
    }

    public function getLastname()
    {
        return $this->lastName;
    }

    public function getGroupid()
    {
        return $this->groupId;
    }

    public function getFixeddiscount()
    {
        return $this->fixedDiscount;
    }

    public function getVariablediscount()
    {
        return $this->variableDiscount;
    }



}