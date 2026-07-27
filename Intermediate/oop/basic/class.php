<?php 
/**
 * Created a class name Employee for 
 * Class is a blueprint or template for properties and methods
 */
class Employee {
    /**
     * These are properties of calss 
     */
    public string $name;
    public string $email;
    public string $designation;
    public float $salary;
/**
 * Methods of class 
 */

    public function greet() {
        return "My Name is: " . $this->name;
    }

    public function annualSalary() {
        return "Your Annual Salary:" . $this->salary * 12;
    }



} 


/**
 * Creatd a new object for Employee class
 * Object is an acctual instant of class
 */
$employee = new Employee();

$employee->name = "Jakariya Aman";
$employee->salary = 12000;


/**
 * Practise Constractor 
 * 
 */
class Student {
/** Class Properties */
    public string $name;
    public string $email;
    public int $id_number;
    
/** Constructor  */
    public function __construct(string $name, string $email, int $id_number)
    {
        $this->name = $name;
        $this->email = $email;
        $this->id_number = $id_number;
        echo "Student Created" . "<br/>";
    }

    /** show info */
    public function showInfo() {
        echo "Student Name:" . $this->name . "<br/>";
        echo "Student email:" . $this->email . "<br/>";
        echo "Student ID:" . $this->id_number . "<br/>";
    }
    /** Desctructor */
    public function __destruct()
    {
        echo "Student Object is removed!";
    }
}

$name = "Jakariya Hussain";
$email = "jakariya@gmail.com";
$id_number = 1389484;

$student =  new Student($name, $email, $id_number);

$student->showInfo();


















































