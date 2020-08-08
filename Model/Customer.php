<?php


class Customer
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private Customergroup $customerGroup;
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

    public function getCustomerGroup(): CustomerGroup
    {
        return $this->customerGroup;
    }

    public function getFixedDiscount():int
    {
        return $this->fixedDiscount;
    }

    public function getVariableDiscount():int
    {
        return$this->variableDiscount;
    }

    public function makeVarArray(CustomerGroup $customerGroup, $array=[])
    {
        $array[] = $customerGroup-> getVariableDiscount();

        if ($customerGroup->getCustomerGroup() !== null) {
            $customerGroup = $customerGroup->getCustomerGroup();
            $array = $this->makeVarArray($customerGroup, $array);
        }
        return $array;
    }

}

