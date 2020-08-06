<?php

class CustomerGroup
{

    private int $id;
    private string $name;
    private int $groupId;
    private Discount $discount;


    public function __construct(int $id, string $name, int $groupId, Discount $discount)
    {
        $this->id = $id;
        $this->name = $name;
        $this->groupId = $groupId;
        $this->discount = $discount;


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

    public function getDiscount()
    {
        return $this->discount;
    }




}