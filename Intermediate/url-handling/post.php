<?php 



// Filter Single Input
/*
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING); 
$email = filter_input(INPUT_POST, FILTER_SANITIZE_EMAIL);
*/

// Filter Group Input
/*
$senitized = filter_input_array(INPUT_POST, [
    'name' => FILTER_SANITIZE_STRING,
    'email' => FILTER_SANITIZE_EMAIL,
]);
*/


// Input Safety
$username = $_POST['username'] ?? '';
$pwd = $_POST['password'] ?? '';
$email = $_POST['email'] ?? '';

// Simple Validation
$errors = [];
if ($username === '') $errors[] = "Username is required";
if ($email === '') $errors[] = "Email is required";
if ($pwd === '') $errors[] = "Password is required";    

// Show errors 
if (!empty($errors)) {
    echo "<h3> Fix These Errors: </h3>";
    foreach($errors as $err) {
        echo "<p style='color:red'> $err </p>";
    }
    echo "<a href='http://localhost/php/intermediate/url-handling'> Got Back </a>";
}

// Disply submtted data
echo "username: $username <br/>";
echo "password: $pwd <br/>";
echo "email: $email <br/>";
?>

<!-- $_SERVER Method  -->

<?php 
// Generator Full Page Url by $_SERVER function 
$http = "http://";
$http_host = $_SERVER['HTTP_HOST']; // Host Name
$request_url = $_SERVER['REQUEST_URI']; // Request Url
$generated_url = $http . $http_host . $request_url; // Generate full rul


$client_remote_ip = $_SERVER['REMOTE_ADDR']; // remote ip address
$client_server_ip = $_SERVER['SERVER_ADDR']; // server ip address
$client_browser = $_SERVER['HTTP_USER_AGENT']; // Browser name
$scipt_name = $_SERVER['SCRIPT_NAME']; // file name
$file_path = $_SERVER['SCRIPT_FILENAME'];  // Full Disk path

// Real Visitor IP Address
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ip_address = getUserIP();
$ip = file_get_contents('https://api64.ipify.org?format=json');
$ip = json_decode($ip)->ip;

echo $ip;


?>