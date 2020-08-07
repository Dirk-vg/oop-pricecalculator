<?php


class Customer
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private CustomerGroup $customerGroup;
    private int $fixedDiscount;
    private int $variableDiscount;

    public function __construct(int $id, string $firstName, string $lastName, CustomerGroup $customerGroup, int $fixedDiscount, int $variableDiscount)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->customerGroup = $customerGroup;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;


    }

    public function getId():int
    {
        return $this->id;
    }

    public function getFirstname():string
    {
        return $this->firstName;
    }

    public function getLastname(): string
    {
        return $this->lastName;
    }

    public function getCustomerGroup():CustomerGroup
    {
        return $this->customerGroup;
    }

    public function getFixedDiscount()
    {
        return $this->fixedDiscount;
    }

    public function getVariableDiscount()
    {
        return$this->variableDiscount;
    }

    public function makeVarArray(CustomerGroup $customerGroup, $array=[])
    {
        $array[] = $customerGroup-> getVariableDiscount();

        if ($customerGroup !== null) {
            $customerGroup = $this->makeVarArray($customerGroup, $array);
        }
        return $customerGroup;
    }

}

