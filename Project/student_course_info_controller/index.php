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
    case 'search':
        include('search_menu.php');
        break;
    case 'search_id':
        $courseID = filter_input(INPUT_POST,'course_id');
        $courses = get_courses_by_courseID($courseID);
        include ('show_all.php');
        break;
    case 'search_name':
        $name = filter_input(INPUT_POST,'course_name');
        $courses = get_courses_by_name($name);
        include ('show_all.php');
        break;
    case 'search_instructor':
        $email = filter_input(INPUT_POST,'instructor');
        $courses = get_courses_by_instructor($email);
        include ('show_all.php');
        break;
    case 'show_all':
        $courses = get_courses();
        include ('show_all.php');
        break;
    case 'enroll':
        if(!isset($_SESSION['email_s'])){
            $email = filter_input(INPUT_POST, 'email');
        } else {
            $email = $_SESSION['email_s'];
        }
        $student = get_student($email);
        $student_id = $student['studentID'];
        $course_code = filter_input(INPUT_POST, 'course_code');
        add_student_registration($student_id, $course_code);
        header("Location: .");
        break;
}

