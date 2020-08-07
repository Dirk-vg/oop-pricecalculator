<?php

class CustomerLoader extends DatabaseManager
{
    private array $customers;

    public function __construct()
    {

        $sql = 'SELECT customer.id as customer_id,
        firstname,
        lastname,
        group_id,
        customer.fixed_discount as customer_fixed_discount, 
        customer.variable_discount as customer_variable_discount,
        customer_group.name,
        customer_group.parent_id,
        customer_group.fixed_discount as group_fixed_discount,
        customer_group.variable_discount as group_variable_discount
        FROM customer 
        LEFT JOIN customer_group 
        ON customer.group_id =customer_group.id;';
        $stmt = $this->connect()->query($sql);
        $customers = $stmt->fetchAll();
        foreach ($customers as $customer){
            $this->customers[] = new Customer((int)$customer['customer_id'], (string)$customer['firstname'], (string)$customer['lastname'],
                new CustomerGroup((int)$customer['group_id'], (string)$customer['name'], (int)$customer['parent_id'],
                    new Discount($customer['group_fixed_discount'], $customer['group_variable_discount'])),
                new Discount($customer['customer_fixed_discount'], $customer['customer_variable_discount']));
        }
    }

    public function getCustomers():array
    {

        return $this->customers;
    }

    public function getCustomerById(int $id)  :? Customer
    {
        foreach ($this->customers as $customer) {
            if ($customer->getId() === $id) {
                return $customer;
            }
        }
    }




}
