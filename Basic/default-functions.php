<?php
/** Build in Functios  */

// String Functions 

$username = "jakariya aman";
$user_email = "jakariya9345@gmail.com";
$user_age = 26;

// Check String Length
$checkLength = strlen($username);

// Make String Uppercase
$uppderCase = strtoupper($username);

// Make String in Lowercase
$lowerCase = strtolower($username);

// Make First Letter Uppercase
$firstCharacterUpper = ucfirst($username);

//Specific Characters show
$specificCharaters = substr($username, 4, 5);


/** Number & Math Functions 
$price = 450.89094 * 2340;
$roundPrice = round(450.89094, 2) * 2340;
$qty = 6;

$total = $price * $qty;

$roundTotal = $roundPrice * $qty;

// round() 

// echo $total;
// echo "</br>";
// echo $roundTotal;

// echo "</br>";
// $distancePrice = $total - $roundTotal;

// echo $distancePrice;/// increase 13.197 compare to $roundPrice

**/
// round() function
$price = 450.89094;
$qty = 2340 * 6;
$total = $price * $qty;
$finalTotal = round($total, 2);


// ceil() function 

$itemPrice = 34.33;
$quantity = 5;
$total = $itemPrice * $quantity;

// echo "Raw Total: $total </br>";
// echo "Ceil up total: ". ceil($total);

/**
 * Summary
 * round(2.6) => Round up nearest Integer => 3;
 * round(2.4) => Round Down nearest Integer => 2;
 * ceil(2.1) => Always Round Up Nearest Integer => 2;
 * floor(2.9) => Always Round Down Nearst Integer => 2; 
 */


/**
 * rand(), max(), min() functions
 * 
 */


// rand() function generate random numbers; 
$totolUsers = 549;
$randOtp = rand(100000, 999999); /// Generate Radom OTP

$randId = rand(1, 999999999);  // Generate Unique IDs Number

$randFile = "file".rand(1, 999999999). ".jpg"; // Image Name Generate

$luckyDraw = rand(1, $totolUsers);


// $rand = rand(1, 100);

// if ($rand <= 5) $result = "💰 Jackpot";
// elseif ($rand <= 15) $result = "🎟 Free Spin";
// elseif ($rand <= 25) $result = "🎉 Bonus";
// elseif ($rand <= 40) $result = "💵 $10 Cash";
// elseif ($rand <= 55) $result = "🪙 5 Coins";
// elseif ($rand <= 80) $result = "😢 Lose";
// elseif ($rand <= 90) $result = "🎁 Gift Box";
// else $result = "🔁 Try Again";

// echo "You got: $result";


// $sections = ['💰 Jackpot', '🎟 Free Spin', '🎉 Bonus', '💵 $10', '🪙 5 Coins', '😢 Lose', '🎁 Gift Box', '🔁 Try Again'];

// $randIndex = rand(0, count($sections) - 1);

// $result = $sections[$randIndex];

// echo "Wheel stopped at: $result";
$rewards = [
    '💰 Jackpot'   => 1,
    '🎁 Bonus'     => 10,
    '🎟 Free Spin' => 20,
    '😢 Lose'      => 69,
];

$totalWeight = array_sum($rewards);
$rand = rand(1, $totalWeight);

$current = 0;
foreach ($rewards as $reward => $weight) {
    $current += $weight;
    if ($rand <= $current) {
        echo "🎡 You got: $reward (Random: $rand)";
        break;
    }
}


// max();
echo "</br>";
$nums = ['5','9','24','3','50'];
$maxVal = max($nums);
$minVal = min($nums);
echo "max number is $maxVal and min number is $minVal";


/******** Array Functions 
 * count(), array_push(), array_pop(), array_merge(), in_array(),
 * array_key(), array_values(), sort(), resort();
 */


// count()

$arryCount = count($nums);

echo "</br>";


$products = [
    ["name" => "T-shirt", "price" => 246, "category" => "Man"],
    ["name" => "Jeans Pant", "price" => 3485, "category" => "Women"],
];



$pushNew = [
    ["name" => "Smart Watch", "price" => 356, "category" => "Electronic"],
    ["name" => "Yellow paijama", "price" => 595, "category" => "Baby"],
];

// push push new array end of the existing array 
// array_push($products, $pushNew);
$products[] = $pushNew; // add similar array without push_array

echo print_r($products);
echo "</br>";
echo count($products);


