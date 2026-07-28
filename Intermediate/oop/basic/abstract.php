<?php
/** Created a Abstract Class */
abstract class Payment {
    /** Abstract method */
    abstract public function pay(float $amount): void;

}


/** Normal class extend Abstract Class */
class BkashPayment extends Payment {
    public function pay(float $amount): void {
        echo "Paid {$amount} by Bkash";
    }
}


/** Abstract class allow normal metod */
abstract class StudentPayment {
    public string $name;
    protected int $student_id;
    /** This is normal method in abstract clss */
    public function setInfo(string $name, int $student_id) {
        $this->name = $name;
        $this->student_id = $student_id;
        echo "Student Information <br/>";
    }

    /** Abstract Method */
    abstract public function pay(float $amount): void;


}


/** Extend Abstract Class */
class NagadPayment extends StudentPayment {

    public function pay(float $amount): void
    {
        echo "Student name:{$this->name}<br> Student ID:{$this->student_id}<br/> Pay {$amount} by Nogod";
    }
}


$student = new NagadPayment();
$student->setInfo("Jakariya Ahmed", 4848494949);
$student->pay(450);






































