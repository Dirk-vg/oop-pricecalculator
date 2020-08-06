<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require_once 'credentials.php';


# INCLUDE CONTROLLERS HERE
require_once 'Controller/HomePageController.php';
require_once 'Model/DatabaseManager.php';
# INCLUDE MODEL FILES

require_once 'Model/Customer.php';
require_once 'Model/CustomerLoader.php';
require_once 'Model/Discount.php';
require_once 'Model/Product.php';
require_once 'Model/ProductLoader.php';
require_once 'Model/Customergroup.php';
require_once 'Model/CustomergroupLoader.php';
//require_once 'Model/Login.php';


$controller = new HomePageController();
$controller->render();





//require_once 'View/homepage.php';