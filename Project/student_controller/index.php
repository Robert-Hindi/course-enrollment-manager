<?php
require('../model/database.php');
require('../model/student_db.php');
session_set_cookie_params(0);
session_start();

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'register';
    }
}

//instantiate variable(s)
$email = '';

switch($action){
    case 'register':
        include('register.php');
        break;
    case 'add_student':
        $fname = filter_input(INPUT_POST, 'fname');
        $lname = filter_input(INPUT_POST, 'lname');
        $gender = filter_input(INPUT_POST, 'gender');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $confirm_p = filter_input(INPUT_POST, 'cpassword');
        
        if($fname === NULL || $lname === NULL || $gender === NULL ||
                $email === NULL || $password === NULL || $confirm_p === NULL 
                || $password != $confirm_p){
            $error = "Invalid student data. Check all fields and try again.";
            include('../view/registration_error.php');
        } else {
            add_student($fname, $lname, $gender, $email, $password);
            include('../view/registration_success.php');
        }
        break;
    case 'login':
        include('login.php');
        break;
    case 'login_student':
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        if(!isset($_SESSION['email_s'])){
            $_SESSION['email_s'] = $email;   
        }
        
        if($email === NULL || $password === NULL) {
            $error = "Invalid Login attempt.";
            include('../view/login_error.php');
        } else {
            $isLoggedIn = student_login($email, $password);
            if($isLoggedIn) {
                include("../view/login_success.php");
            } else {
                $error = "Sorry, username or password incorrect. Try again!";  
                include('../view/login_error.php');
            }   
        }
        break;
    case 'logout':
        session_destroy();
        include('../view/logged_out.php');
        break;
}

