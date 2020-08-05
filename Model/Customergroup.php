<?php

class Customergroup{

    private int $id;
    private string $name;
    private int $groupId;
    private int $fixedDiscount;
    private int $variableDiscount;

    public function __construct(int $id, string $name, int $groupid, int $fixedDiscount, int $variableDiscount)
    {
        $this->id = $id;
        $this->name = $name;
        $this->groupId = $groupId;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;

    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
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