<?php

class CustomerLoader extends DatabaseManager
{
    private array $customers;
    private CustomerGroup $customerGroup;

    public function getCustomers(): array
    {
        return $this->customers;
    }
   public function __construct()
    {

        $sql = 'SELECT * FROM customer';
        $stmt = $this->connect()->query($sql);
        $customers = $stmt->fetchAll();
        $customerGroupLoader = new CustomerGroupLoader();
        //$customerGroupLoader->getCustomerGroups();
       foreach ($customers as $customer){
           $this->customerGroup = $customerGroupLoader->getCustomerGroups()[$customer['group_id']];
           $this->customers[$customer['id']] = new Customer((int)$customer['id'], (string)$customer['firstname'], (string)$customer['lastname'], $this->customerGroup, (int)$customer['fixed_discount'], (int)$customer['variable_discount']);
      }
    }



    public function getCustomerById(int $id)
    {
        foreach ($this->customers as $customer) {
            if ($customer->getId() === $id) {
                return $customer;
            }
        }
    }

}
