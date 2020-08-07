<?php

class CustomerLoader extends DatabaseManager
{
    private array $customers;

   public function __construct()
    {

        $sql = 'SELECT * FROM customer';
        $stmt = $this->connect()->query($sql);
        $customers = $stmt->fetchAll();
        $customerGroupLoader = new CustomerGroupLoader();
        $customerGroupLoader->getCustomerGroup();
       foreach ($customers as $customer){
           $customerGroup = $customerGroupLoader[$customer['group_id']];
           $this->customers[$customer['id']] = new Customer((int)$customer['id'], (string)$customer['firstname'], (string)$customer['lastname'],$customerGroup, (int)$customer['fixed_discount'], (int)$customer['variable_discount']);
      }
    }

    public function getCustomers()
    {
        return $this->customers;
    }
/*
    public function getCustomerById(int $id)
    {
        foreach ($this->customers as $customer) {
            if ($customer->getId() === $id) {
                return $customer;
            }
        }
    }
*/



}
