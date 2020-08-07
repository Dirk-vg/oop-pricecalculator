<?php

class CustomerGroup
{

    private int $id;
    private string $name;
    private array $parentId;
    private int $variableDiscount;
    private int $fixedDiscount;


    public function __construct(int $id, string $name, array $parentId, int $variableDiscount, int $fixedDiscount)
    {
        $this->id = $id;
        $this->name = $name;
        $this->parentId = $parentId;
        $this->variableDiscount = $variableDiscount;
        $this->fixedDiscount = $fixedDiscount;


    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    public function getVariableDiscount()
    {
        return $this->variableDiscount;
    }

    public function getFixedDiscount()
    {
        return $this->fixedDiscount;
    }

    public function getBestDiscount()
    {

    }
}