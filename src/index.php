<?php
//Show PHP error messages.
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once '../vendor/autoload.php';
require_once 'User.php';

echo new User('Ibrahim', 'Xyz@example.com');
