<?php 
namespace App\Controllers;

use App\Models\Employee;
use App\Services\EmailService;

class EmployeeController
{
    public function index() {
        
        $employee = new Employee();
        echo $employee->getName();

        $email = new EmailService();
        $email->send();

    }
}

