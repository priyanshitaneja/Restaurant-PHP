<?php 
require_once 'config.php';

//Register user
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$preference = mysqli_real_escape_string($conn, $_POST['preference']);

//if(!empty($name) && !empty($email) && !empty($phone) && !empty($password) && !empty($preference)) {

//}

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





//login user

if(isset($_POST['login-user'])) {
    $email= mysqli_real_escape_string($conn, $POST['email']);
    $password= mysqli_real_escape_string($conn, $POST['password']);

    if(empty($email)) {
        array_push($errors, "Email is required");
    }
    if(empty($password)) {
        array_push($errors, "Password is required");
    }

    if(count($errors)==0){
        $password=md5($password);

        $query = "SELECT * FROM customers WHERE email = '$email' AND password = '$password' ";
        $results = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($results)) {
            $_SESSION['name']=$name;
            $_SESSION['password']=$password;
            $_SESSION['success']="You are now logged in!";
            // header('location: menu.php');
        } else {
            array_push($errors, "Wrong email/password, Please try again");
        }


    }
}


?>