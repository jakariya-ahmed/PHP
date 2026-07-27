<?php
$fullName = "Jakariya aman";

$checkLengt = strlen($fullName);

/**
 * password validation example
 */

$password = "Admin";
if (strlen($password) >= 8) {
    echo "Valid Password";
} else {
    echo "Weak Password";
}

/**
 * strtolower() -> make sentense lower character
 * strtoupper() -> make sentense to upper characters
 *  
 */

$uppderCaseName = strtoupper($fullName);
$lowerCaseName = strtolower($fullName);


echo "<br/>";
echo $uppderCaseName . " " .  $lowerCaseName;

echo "<br/>";
echo ucfirst($fullName) . " " . ucwords($fullName);

echo "<br/>";

echo substr($fullName, 0, 1) . " " . substr($fullName, -3);

echo "<br/>";

$names = "Jakariya,ahmed,Rahim";
$result = explode(",", $names);

$skills = ["php", "laravel", "JS", "React"];
print_r($result);

echo "<br/>";
echo implode(",", $skills);


echo "<br/>";
echo $checkLengt;













































