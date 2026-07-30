<?php

use App\Controllers\EmployeeController;

require_once __DIR__ . '/../vendor/autoload.php';

$controller = new EmployeeController();

$controller->index();


