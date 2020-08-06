<?php require 'includes/header.php'?>

    <section>

        <label for="products">
            <select>
                <option value="">Select Product</option>
                    <?php
                    /** @var Product[] $products */
                    $products = $products->getAllProducts();
                    foreach ($products as $product) {
                            $id = $product->getId();
                            $name = ucfirst($product->getName());
                            $price = number_format($product->getPrice() / 100, 2) ;
                            echo "<option value='{$id}'>{$name}={$price} &euro;</option>";
                    }
                    ?>
            </select>
        </label>
        <label for="customers">
            <select name="" id="">
                <option value="">Select Customer</option>
                <?php
                /** @var Customer[] $customers */
                $customers = $customers->getCustomers();
                foreach ($customers as $customer) {
                    $id = $customer->getId();
                    $firstname = $customer->getFirstname();
                    $lastname =$customer->getLastname() ;
                    echo "<option value='{$id}'>{$firstname}{$lastname}</option>";
                }
                ?>
            </select>

        </label>


    </section>
<?php require 'includes/footer.php'?>