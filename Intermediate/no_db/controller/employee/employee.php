<?php 
require_once __DIR__ . '/../../config/app.php';
require_once __DIR__ . '/../../config/session.php';

if ($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['edit_id'] === null) {
    $employeeId = trim($_POST['employeeId']);
    $fullName = trim($_POST['fullName']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $department = trim($_POST['department']);
    $designation = trim($_POST['designation']);
    $salary = trim($_POST['salary']);
    $dateOfJoining = trim($_POST['dateOfJoining']);
    $gender = trim($_POST['gender']);
    $employeeId = trim($_POST['status']);
    $address = trim($_POST['address']);

    $_SESSION['employees'][] = [
        'employeeId' => trim($_POST['employeeId']),
        'fullName' => trim($_POST['fullName']),
        'email' => trim($_POST['email']),
        'phone' => trim($_POST['phone']),
        'department' => trim($_POST['department']),
        'designation' => trim($_POST['designation']),
        'salary' => trim($_POST['salary']),
        'dateOfJoining' => trim($_POST['dateOfJoining']),
        'gender' => trim($_POST['gender']),
        'status' => trim($_POST['status']),
        'address' => trim($_POST['address']),
    ];


    header("Location:". APP_URL . "/view/employee/index.php");
    exit();

}



// Delete Employee 
if (isset($_GET['del_id'])) {
    
    $id = $_GET['del_id'];
    foreach ($_SESSION['employees'] as $index=> $employee) {

        if ($employee['employeeId'] === $id) {
            unset($_SESSION['employees'][$index]);
            $_SESSION['employees'] = array_values($_SESSION['employees']);
            break;
        }

    }

    header("Location:". APP_URL . "/view/employee/index.php");
    exit();

}


// Update Employee

if (isset($_POST['edit_id'])) {
    $employeeId = $_POST['edit_id'];
    
    foreach ($_SESSION['employees'] as &$employee) {
        if ($employee['employeeId'] === $employeeId) {
            
            $employee['fullName'] = trim($_POST['fullName']);
            $employee['email'] = trim($_POST['email']);
            $employee['phone'] = trim($_POST['phone']);
            $employee['department'] = trim($_POST['department']);
            $employee['designation'] = trim($_POST['designation']);
            $employee['salary'] = trim($_POST['salary']);
            $employee['dateOfJoining'] = trim($_POST['dateOfJoining']);
            $employee['gender'] = trim($_POST['gender']);
            $employee['status'] = trim($_POST['status']);
            $employee['address'] = trim($_POST['address']);

        }

        unset($employee);
    }

    header("Location:". APP_URL . "/view/employee/index.php");
    exit();
    
} 