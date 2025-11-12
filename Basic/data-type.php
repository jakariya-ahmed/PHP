<?php

/**
 * PHP Support 8 main data types:
 * 1. String   2. Integer(JS called Number)   3. Float(JS not avaiable)   4. Boolean 
 * 5. Array   5. Object   6. Object  7. Null  8. Resource(Not avaialbe in JS)
 *  */ 



// Array 
$skills = ['HTML', 'CSS', 'JS', 'React'];

foreach($skills as $skill) {
    echo "<li style='font-size:20px;color:green'>". $skill . "</li>";
}

/**  Object  */
class Person {
    public $name;
    public $email;    

    function __construct($name, $email) {
        $this-> name = $name;
        $this-> email = $email;
    }


    function view() {
        echo "My name is <b>$this->name </b> and email is <b> $this->email </b> ";
    }

    
}

    $person = new Person("Jakariya Ahmed", "jek@gmail.com");

    $person->view();



/**  Resource */ 
$file = fopen('demo.txt', 'r');
// var_dump($file);


echo "</br>";
echo "</br>";

/** Checking data type */
$score = 80.0; // float

$langs = ['Banlga', 'English', 'Arabia', 'China'];

/** Type Conversion */
$str_price = "24905";
$price = (int) $str_price;

var_dump($price, );


/** Different (&& vs and), (|| vs or) */
echo "</br>";
echo "</br>";

$name = true;
$email = false;

// if ($name && $email) {
//     echo "Both is true";
// } else {
//     echo "At least one is false";
// }

// $result = $name and $email;

$role = $_GET['role'] ?? 'subscriber';




var_dump($role);