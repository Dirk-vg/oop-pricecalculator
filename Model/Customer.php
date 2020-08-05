<?php


class Customer
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private int $groupId;
    private int $fixedDiscount;
    private int $variableDiscount;

    public function __construct(int $id, string $firstName, string $lastName, int $groupId, int $fixedDiscount, int $variableDiscount)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->groupId = $groupId;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;

    }

    public function getId()
    {
        return $this->id;
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