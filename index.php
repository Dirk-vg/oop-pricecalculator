<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require_once 'credentials.php';

# INCLUDE MODEL FILES
require_once 'Model/Customer.php';
require_once 'Model/Customer.php';
require_once 'Model/Discount.php';
require_once 'Model/Product.php';
require_once 'Model/Login.php';
require_once 'Model/DatabaseManager.php';

# INCLUDE CONTROLLERS HERE
require_once 'Controller/HomePageController.php';

require_once 'View/homepage.php';