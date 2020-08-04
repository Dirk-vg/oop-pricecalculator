<?php
require 'credentials.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// include all your model files here
require 'model/Customer.php';
//include all your controllers here
require 'Controller/HomePageController.php;