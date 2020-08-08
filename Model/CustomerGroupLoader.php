<?php

class CustomerGroupLoader extends DatabaseManager
{
    private array $customerGroup;

    public function __construct()
    {

        $sql = 'SELECT * FROM customer_group';
        $stmt = $this->connect()->query($sql);
        $customerGroups = $stmt->fetchAll();
        foreach ($customerGroups as $customergroup){
            $this->customerGroup[] = new CustomerGroup((int)$customergroup['id'], (string)$customergroup['name'], (int)$customergroup['parent_id'],
                (int)$customergroup['fixed_discount'], (int)$customergroup['variable_discount']);
        }
    }

    public function getCustomerGroup(): array
    {
        return $this->customerGroup;
    }

}
