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

// object