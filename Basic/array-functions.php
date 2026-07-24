<!--
============================== 1. Array Information =======================
count() – Count array elements
sizeof() – Alias of count()
array_is_list() – Check if array is a list
array_key_first() – Get first key
array_key_last() – Get last key
============================== 2. Add / Remove Elements =======================
array_push() – Add elements to the end
array_pop() – Remove the last element
array_shift() – Remove the first element
array_unshift() – Add elements to the beginning
unset() – Remove a specific element
array_splice() – Remove or replace part of an array
array_slice() – Extract a portion of an array
array_fill() – Fill an array with values
array_pad() – Pad an array to a specified length
============================== 3. Search & Check =======================
in_array() – Check if a value exists
array_search() – Search for a value and return its key
array_key_exists() – Check if a key exists
isset() – Check if key exists and is not null
array_keys() – Get all keys
array_values() – Get all values
array_flip() – Swap keys and values
============================== 4. Merge & Combine =======================
array_merge() – Merge arrays
array_merge_recursive() – Recursive merge
array_replace() – Replace values
array_replace_recursive() – Recursive replace
array_combine() – Combine keys and values into one array
array_column() – Return values from a single column
array_chunk() – Split an array into chunks
============================== 5. Sorting =======================
sort() – Sort ascending
rsort() – Sort descending
asort() – Sort values, keep keys
arsort() – Reverse sort values, keep keys
ksort() – Sort by keys
krsort() – Reverse sort by keys
usort() – Custom value sorting
uasort() – Custom value sorting (preserve keys)
uksort() – Custom key sorting
natsort() – Natural sorting
natcasesort() – Case-insensitive natural sorting
shuffle() – Randomize array
============================== 6. Filter & Transform =======================
array_map() – Transform every element
array_filter() – Filter elements
array_reduce() – Reduce array to one value
array_walk() – Iterate over elements
array_walk_recursive() – Recursive iteration
============================== 7. Compare Arrays =======================
array_diff() – Difference by values
array_diff_assoc() – Difference by keys and values
array_diff_key() – Difference by keys
array_intersect() – Common values
array_intersect_assoc() – Common keys and values
array_intersect_key() – Common keys
============================== 8. Mathematical Operations =======================
array_sum() – Sum values
array_product() – Multiply values
min() – Smallest value
max() – Largest value
============================== 9. Random & Unique =======================
array_rand() – Get random key(s)
array_unique() – Remove duplicate values
array_count_values() – Count occurrences
============================== 10. Stack & Queue =======================
array_push()
array_pop()
array_shift()
array_unshift()
============================== 11. Recursive Functions =======================
array_merge_recursive()
array_replace_recursive()
array_walk_recursive()
array_multisort()
============================== 12. Array Utility Functions =======================
range() – Create a range of values
compact() – Create an array from variables
extract() – Import array elements as variables
list() – Assign array values to variables
current() – Current element
next() – Next element
prev() – Previous element
reset() – First element
end() – Last element
key() – Current key

============================== Industry-Level Functions (Most Used) =======================
count()
isset()
array_key_exists()
array_keys()
array_values()
array_column()
array_merge()
array_replace()
array_filter()
array_map()
array_reduce()
array_search()
in_array()
array_unique()
sort()
usort()
array_slice()
array_splice()
array_diff()
array_intersect()
Learning Order (Recommended)
Phase 1 – Fundamentals
count()
isset()
array_key_exists()
array_keys()
array_values()
array_flip()
Phase 2 – CRUD Operations
array_push()
array_pop()
array_shift()
array_unshift()
unset()
array_slice()
array_splice()
Phase 3 – Searching
in_array()
array_search()
array_column()
Phase 4 – Transformation
array_map()
array_filter()
array_reduce()
array_walk()
Phase 5 – Sorting
sort()
asort()
ksort()
usort()
Phase 6 – Advanced
array_merge()
array_replace()
array_diff()
array_intersect()
array_unique()
array_multisort()
-->

<?php

$fruits = ['Apple', 'Banana', 'orange'];

/**
 * Associative Array
 */

$user = [
    "id" => 1,
    "name" => "Jakariya Aman",
    "email" => "aman@gmail.com",
    "country" => "Bangladesh",
];

/**
 * ----------------------------------------
 * Retrive Users Data form Database 
 * ----------------------------------------
 * All users query form users table for manupulation
 */

$users = [
    [
        "name" => "Ahmed Ali",
        "email" => "ali@gmail.com",
        "designation" => "Desigener",
        "Status" => "active",
    ],
    [
        "name" => "Hussain Ahmed",
        "email" => "hussain@gmail.com",
        "designation" => "developer",
        "Status" => "active",
    ],
    [
        "name" => "Jakariya",
        "email" => "jek@gmail.com",
        "designation" => "Engineer",
        "Status" => "active",
    ],
    [
        "name" => "Jaffor",
        "email" => "jaffor@gmail.com",
        "designation" => "Desigener",
        "Status" => "inactive",
    ],
    [
        "name" => "Mahmud alom",
        "email" => "alom@gmail.com",
        "designation" => "Marketing Expert",
        "Status" => "active",
    ],
];

/**
 * Recursive Count
 */

$data = [
    "users" => ["Rahman", "Ali"],
    "products" => ["Laptop", "Mobile"],
];

/**
 * Example: Display the total number of active products of cart
 */

$cart = [
    [
        "name" => "laptop",
        "price" => 12000,
        "qty" => 1,
    ],
    [
        "name" => "Mobile Phone",
        "price" => 6720,
        "qty" => 2,
    ],
];

/**
 * ------------------------------------------------------------
 * Calculate Product Count
 * ------------------------------------------------------------
 * Store the total numer of products in a dedicated variable instead of
 * calling count() multiple times. This improves readability and makes 
 * the value easy to reuse throughout the request.
 * 
 */
$cartProductCount = count($cart);

if ($cartProductCount > 0) {
    foreach ($cart as $product) {
        echo "<pre>";
        // print_r($product);
        echo "</pre>";
    }
}

/**
 * -------------------------------------------------------------
 * sizeof() -> Alias of count()
 * -------------------------------------------------------------
 * sizeof() is simply another name (alias) for count().
 * 
 */

// echo sizeof($cart);


/**
 * array_key_first()
 */

$first_key = array_key_first($user);
// array_key_last();
$last_key = array_key_last($user);

/** array_push() -> add element to the end of array list */
array_push($fruits, "Dragon", "Jackfruit");

/** array_pop() -> Remove element to the end of array */
array_pop($fruits);

/** array_unshift() -> Add Elements to the beggining of array list  */
$include_fruits = ['Strawbery', 'Watermilon'];
array_unshift($fruits, $include_fruits);

/** array_shift() -> Remove Element to the end of array list */
array_shift($fruits);

/** unset() -> removes a variable or a specific array element */
unset($fruits[1]);

/**
 * ---------------------------------------------
 * Start the session 
 * --------------------------------------------
 * All Session Start When page is Loaded
 */

// session_start();

/**
 * -------------------------------------------------
 * Log Out User
 * -------------------------------------------------
 * 
 * Remove the authencation flag from the current session
 * This prevents the application form treating the user as authenticated
 * 
 */

unset($_SESSION['logged_in']);

/**
 * --------------------------------------------------
 * Destroy the session
 * ---------------------------------------------------
 * 
 * Remove all session data stored on the server
 * 
 */
 
// session_destroy();.


/**
 * ----------------------------------------------------
 * array_fill() -> Fill an Array wit values
 * ----------------------------------------------------
 * Initialize Theater Seats
 * 
 * Every seat starts wit the same default status.
 * This avoids manually creating eac seat entry.
 * 
 */
$seats = array_fill(1, 10, "Available");


/**
 * ----------------------------------------------------
 * array_pad() -> increases te size of an existing array
 * ----------------------------------------------------
 * 
 */

$numbers = [10, 20];
$result = array_pad($numbers, 5, 0);

/**
 * ----------------------------------------------------
 * Normalize Product Gallery 
 * array_pad() -> increases te size of an existing array
 * ----------------------------------------------------
 * 
 * Ensure eac product salways contains five image slots,
 * Missing images use a placeholder image so the frontend 
 * layout remains consistent
 */

$tourGallery = [
    "japan-tour.jpg",
    "Indonesia-tour.jpg",
];

$tourGallery = array_pad($tourGallery, 5, "placeolder.jpg");




/**
 * ------------------------------------------------------------
 * Searching Array Functions 
 * ------------------------------------------------------------
 * in_array() -> checks whether a valude exists in an array
 * array_search() -> Find the key/index of a value
 * array_column() -> Extract values from a specific column of a multidimesioan array
 * 
 */





echo "<pre>";
print_r($tourGallery);
echo "</pre>";



