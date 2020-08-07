<?php

class CustomerGroupLoader extends DatabaseManager
{
    private array $customerGroup;

    public function __construct()
    {

        $sql = 'SELECT * FROM customer_group';
        $stmt = $this->connect()->query($sql);
        $customergroups = $stmt->fetchAll();
        foreach ($customergroups as $customergroup){
            $this->customergroup[] = new CustomerGroup((int)$customergroup['id'], (string)$customergroup['name'], (int)$customergroup['parent_id'],
                new Discount((int)$customergroup['fixed_discount'], (int)$customergroup['variable_discount']));
        }
    }

    public function getCustomergroup():array
    {
        return $this->customerGroup;
    }
}
