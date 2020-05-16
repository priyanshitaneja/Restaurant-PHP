<?php 

session_start();

$name = "";
$password = "";

$errors = array();

$conn = mysqli_connect('localhost', 'root', '', 'foodshaladb');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Register user
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$preference = mysqli_real_escape_string($conn, $_POST['preference']);

if(!empty($name) && !empty($email) && !empty($phone) && !empty($password) && !empty($preference)) {

}

//check db for existing email/phone
$customer_check_query = "SELECT * FROM customers WHERE email = '$email' or phone = '$phone' LIMIT 1";

$results = mysqli_query($conn, $customer_check_query);
$customer = mysqli_fetch_assoc($results);

if($customer) {
    if($customer[$email] === $email) {
        array_push($errors, "Email already exists");
    }
    if($customer[$phone] === $phone) {
        array_push($errors, "Phone Number already exists");
    }
}

//Register user if no errors exist
if(count($errors) == 0) {

    //encrypt password
    $encrypted_password = md5($password);

    //set up insertion query
    $query = "INSERT INTO customers (name, email, phone, password, preference) VALUES ('$name', '$email', '$phone', '$encrypted_password', '$preference')";

    //run the query
    mysqli_query($conn, $query);


    $_SESSION['email'] = $email;

    $_SESSION['success'] = "You are successfully registered. Welcome to FoodShala!";
    header('location: menu.php');
}










?>