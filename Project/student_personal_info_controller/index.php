<?php
require('../model/database.php');
require('../model/course_db.php');
require('../model/registrations_db.php');
require('../model/student_db.php');
session_set_cookie_params(0);
session_start();

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'menu';
    }
}


switch($action){
    case 'menu':
        include('menu.php');
        break;
    case 'enrolled_courses':
        if(!isset($_SESSION['email_s'])){
            $email = filter_input(INPUT_POST, 'email');
        } else {
            $email = $_SESSION['email_s'];
        }
        $courses = get_courses_by_student($email);
        include('enrolled_courses.php');
        break;
    case 'withdraw_course':
        if(!isset($_SESSION['email_s'])){
            $email = filter_input(INPUT_POST, 'email');
        } else {
            $email = $_SESSION['email_s'];
        }
        $instructor = get_student($email);
        $student_id = $instructor['studentID'];
        $course_code = filter_input(INPUT_POST, 'course_code');
        withdraw_student_registration($student_id, $course_code);
        header("Location: .");
        break;
    case 'profile':
        if(!isset($_SESSION['email_s'])){
            $email = filter_input(INPUT_POST, 'email');
        } else {
            $email = $_SESSION['email_s'];
        }
        $instructor = get_student($email);
        $student_id = $instructor['studentID'];
        $bday = get_birthday($student_id);
        include ('profile.php');
        break;
    case 'update_student':
        $studentid = filter_input(INPUT_POST, 'studentID');
        $first_name = filter_input(INPUT_POST, 'fname');
        $last_name = filter_input(INPUT_POST, 'lname');
        $gender = filter_input(INPUT_POST,'gender');
        $email = filter_input(INPUT_POST, 'email');
        if(filter_input(INPUT_POST,'npassword') === filter_input(INPUT_POST, 'cpassword')){
            $password = filter_input(INPUT_POST, 'npassword');
        } else {
            $error = "Passwords must match";
            include ('../view/update_error.php');
        }

        update_student($studentid, $first_name, $last_name, $gender, $email, $password);
        header ("Location: .");
        break;
        
}

