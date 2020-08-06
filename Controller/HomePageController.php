<?php
declare(strict_types = 1);

class HomePageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render():void
    {
        $customers = new CustomerLoader();
        $customers->getCustomers();


        //this is just example code, you can remove the line below
        if (isset($_POST['submit'])){
            $customer = $customers->getCustomerById((int)$_POST['customer']);
            //var_dump($customer);
        }

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        $products = new ProductLoader();
        $products->getAllProducts();



        //var_dump($customers->getCustomers());
        require 'View/homepage.php';
    }
}