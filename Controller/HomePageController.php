<?php
declare(strict_types = 1);

class HomePageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render():void
    {
        $customers = new CustomerLoader();
        $customers->getCustomers();

        $products = new ProductLoader();
        $products->getAllProducts();

        if (isset($_POST['submit'])){
                $customer = $customers->getCustomerById((int)$_POST['customer']);
                var_dump($customer);
        }

        if (isset($_POST['submit'])){
            $products = $products->getProductById((int)$_POST['product']);
            //var_dump($products);
        }

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view




        //var_dump($customers->getCustomers());
        require 'View/homepage.php';
    }
}