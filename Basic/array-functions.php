<?php
/**
 * Array Function 
 * count(), array_push(), array_pop(), in_arry(),
 *  array_keys(), sort(), resort();
 * 
 */


// Index Array
$fruits = ["Apple", "Banana", "Papaya", "mango"]; // same in JS 
$nums = [1, 5, 8, 0, 9, "7"];

array_push($fruits, "Orange"); // in js fruits.push("Orange")

// print_r($fruits);
echo "</br>";

// Asociated array with push
$userInfo = ["name" => "alex", "email" => "jek@gmail"];
/**  Methods : 
 * $userInfo["phone"] = "+4884848448"; // Best for single key => value
 * $userInfo = array_merge($userInfo, ["phone" => "+93484848", "desi" => "PHP Developer"]);  // By merge_array() best for multiple key => value
 * $userInfo = [
 *      ...$userInfo, 
 *      "phone" => "+844949848"],
 *       "desi" => "PHP Developer",
 *       "status" => "active",
 *  ]; // By Spread Operators [...], Modern for multiple arrays
 * 
*/

$userInfo = array_merge($userInfo, ["phone" => "+93484848", "desi" => "PHP Developer"]);



/* In js const (1). userInfo.phone = "+4858585"; 
(2). const userInfo["phone"] = "+484848044949" 
(3). const userInfo = {...$userIno, "phone": "+84585858"}
*/


/** Array array_pop() delete the last element */
$lastElement = array_pop($fruits);
$userLastElement = array_pop($userInfo); 

/** Array array_marge() */
$userBasic = ["name" => "smith", "email" => "smith@gamil.com"];
$userEdu = ["degree" => "CSE", "year" => 2022, "Grade" => "B+"];
$userAddress = ["location" => "Moulivibazar, Sadar", "state" => "Moulvibazar", "zip" => "3032"];

    $userDetails = array_merge($userBasic, $userEdu, $userAddress);


/** in_array() */
if (in_array("pple", $fruits)) {
    echo "Apple is Avaible";
} else {
    echo "Apple is Not avaible";
}

// check strick mode in array
echo "</br>";
var_dump(in_array("7", $nums)); // just check not check type
echo "</br>";
var_dump(in_array(7, $nums, true)); // check condition and type 

// in associative array check
echo "</br>";
var_dump(in_array("alex", $userInfo));


/** array_keys() */

$keys = array_keys($userInfo);

echo "</br>";




/** array_keys() */
$values = array_values($userInfo);

/** Array sort() */
sort($nums); // sort by ascending numerically

sort($fruits); // sort by alphabetically

$mixInfo = [299, "jakariya", 49597, 99, "100"];

sort($mixInfo, SORT_NUMERIC);

rsort($nums);

print_r($nums);
