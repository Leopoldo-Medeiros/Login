<?php
session_start();
include('dbcon.php');

// Checking if the buttonm is clicked or not
if(isset($_POST['register_btn'])) 
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Email exist or not
    $check_email_query = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

if(mysqli_num_rows(check_email_query_run) > 0)
{
    $_SESSION['status'] = "Email ID Already Exists";
    header("Location: register.php");
}
else
{
    // Insert User or Register User Data
    $query = "INSERT INTO users (name,phone,email,password,verify_token) VALUES ('$name')";
}
}

?>