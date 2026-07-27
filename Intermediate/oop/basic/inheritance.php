<?php
class Student {
    public string $name;
    public string $email;
    protected int $student_id;

    public function __construct(string $name, string $email, int $student_id)
    {
        $this->name = $name;
        $this->email = $email;
        $this->student_id = $student_id;
    }


    public function registration(): void {
        echo "Student Registration: </br>";
        echo "Name: {$this->name}<br/>";
        echo "email: {$this->email}<br/>";
        echo "ID: {$this->student_id}<br/>";
    }

    /** Method Overriding */
    public function login(): void {
        echo "Student Logged In";
    }

}

final class StudentPayment {
    public function pay(): void {
        echo "Payment Successful!!";
    }
}

// class PaymentTransition extends StudentPayment {

// }


$student = new Student("Jakariya", "jek@gmail.com", 49444884);

class Attendence extends Student {
    // public function studentInfo() {
    //     // echo "Name: {$this->name} <br>";
    //     // echo "Name: {$this->email} <br>";
    //     // echo "Name: {$this->student_id} <br>";
    // }

    public function __construct(string $name, string $email, int $student_id)
    {
        parent::__construct($name, $email, $student_id);
    }

    public function studentInfo(): void {
        echo "Login Info:<br/>";
        echo "Name: {$this->name}<br>";
        echo "email: {$this->email}<br>";
        echo "ID: {$this->student_id}<br>";
    }

    public function login(): void {
        // parent::registration();
        echo "Teacher Logged In";
    }


}

$name = "Ahmed ali";
$email = "ali@gmail.com";
$student_id = 48459448;

$attendence = new Attendence($name, $email, $student_id);

$attendence->registration();
echo "<br>";
$attendence->studentInfo();
echo "<br>";
$attendence->login();







