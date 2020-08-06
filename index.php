<?php

require 'Model/Databasemanager.php';
require 'Model/Product.php';
require 'View/Viewproduct.php';


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// include all your model files here
require 'Model/Customer.php';
//include all your controllers here
require 'Controller/HomePageController.php';

$controller = new HomePageController();
$controller->render($_GET, $_POST);

$products = new Viewproduct();
$products->showAllProcucts();

/*$dbhost = "localhost";
$dbuser = "becode";
$dbpass = "becode123";
$dbname = "pricecalculator";

    // set DSN
    $dsn = 'mysql:host=' . $dbhost . ';dbname=' . $dbname;

    // create a PDO instance
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


    //PDO QUERY
    $stmt = $pdo->query('SELECT * FROM product ');
    while ($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
        echo $row['name']. '<br>';
}
*/