<?php

class CustomerGroupLoader extends DatabaseManager
{
    private array $customerGroups = [];

    public function __construct()
    {
        if (empty($this->customerGroups)) {
            $sql = 'SELECT * FROM customer_group';
            $stmt = $this->connect()->query($sql);
            $customerGroups = $stmt->fetchAll();
            foreach ($customerGroups as $customerGroup) {
                $this->customerGroups[$customerGroup['id']] = new CustomerGroup((int)$customerGroup['id'], (string)$customerGroup['name'], (int)$customerGroup['parent_id'],
                    (int)$customerGroup['fixed_discount'], (int)$customerGroup['variable_discount'], $this);
            }
        }
    }

    public function getCustomerGroups(): array
    {
        return $this->customerGroups;
    }

}
