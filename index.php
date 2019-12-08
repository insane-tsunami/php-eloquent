<?php

ini_set('display_errors', 1);

// Enable error reporting for NOTICES
error_reporting(E_NOTICE);


require_once 'vendor/autoload.php';
require_once 'settings.php';

//Database
use App\Services\Database;
new Database;

//Routes
require_once 'routes.php';





