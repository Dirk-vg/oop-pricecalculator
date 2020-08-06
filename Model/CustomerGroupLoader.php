<?php

class CustomerGroupLoader extends DatabaseManager
{
    private array $customergroup;

    public function __construct()
    {

        $sql = 'SELECT * FROM customer_group';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $customergroups = $stmt->fetchAll();
        foreach ($customergroups as $customergroup){
            $this->customergroup[] = new Customergroup((int)$customergroup['id'], (string)$customergroup['name'], (int)$customergroup['parent_id'],
                (int)$customergroup['fixed_discount'], (int)$customergroup['variable_discount']);
        }
    }

    public function getCustomergroup():array
    {
        return $this->customergroup;
    }
}
