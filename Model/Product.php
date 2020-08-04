<?php


class Product
{
    private int $id;
    private string $name;
    private int $price;

    public function __construct(id $id, string $name, int $price){
        

    }

    public function getId(){

        return $this->id;
    }

    public function getName(){

        return $this->name;
    }

    public function getPrice(){

        return $this->price;
    }
}