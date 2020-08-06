<?php


class Customer
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private CustomerGroup $customerGroup;
    private Discount $discount;

    public function __construct(int $id, string $firstName, string $lastName, CustomerGroup $customerGroup, Discount $discount)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->customerGroup = $customerGroup;
        $this->discount = $discount;

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

    public function getCustomerGroup()
    {
        return $this->customerGroup;
    }

    public function getDiscount()
    {
        return $this->discount;
    }


}