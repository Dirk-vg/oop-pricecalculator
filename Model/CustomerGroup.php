<?php

class CustomerGroup
{

    private int $id;
    private string $name;
    private int $parentId;
    private int $variableDiscount;
    private int $fixedDiscount;
    private ?CustomerGroup $customerGroup;



    public function __construct(int $id, string $name, int $parentId, int $variableDiscount, int $fixedDiscount, CustomerGroupLoader $customerGroupLoader)
    {
        $this->id = $id;
        $this->name = $name;
        $this->parentId = $parentId;
        $this->variableDiscount = $variableDiscount;
        $this->fixedDiscount = $fixedDiscount;
        $customerGroup = $customerGroupLoader->getCustomerGroup();
        $this->customerGroup = ($parentId !== 0) ?$customerGroup['parent_id'] :null;


    }

    public function getId():int
    {
        return $this->id;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getParentId():int
    {
        return $this->parentId;
    }

    public function getVariableDiscount(): int
    {
        return $this->variableDiscount;
    }

    public function getFixedDiscount():int
    {
        return $this->fixedDiscount;
    }

    public function getCustomerGroup(): CustomerGroup
    {
        return $this->customerGroup;
    }
    
}