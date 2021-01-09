<?php
require('../model/database.php');
require('../model/course_db.php');
require('../model/registrations_db.php');
require('../model/instructor_db.php');
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
    case 'my_courses':
        if(!isset($_SESSION['email_i'])){
            $email = filter_input(INPUT_POST, 'email');
        } else {
            $email = $_SESSION['email_i'];
        }
        $courses = get_courses_by_instructor($email);
        include('my_courses.php');
        break;
    case 'profile':
        if(!isset($_SESSION['email_i'])){
            $email = filter_input(INPUT_POST, 'email');
        } else {
            $email = $_SESSION['email_i'];
        }
        $instructor = get_instructor($email);
        $instructor_id = $instructor['instructorID'];
        $bday = get_birthday($instructor_id);
        include ('profile.php');
        break;
    case 'class_roster':
        $course_code = filter_input(INPUT_POST,'course_code');
        $students = get_students_by_course($course_code);
        include('class_roster.php');
        break;
    case 'add_grade':
        $student_id = filter_input(INPUT_POST, 'student_id');
        $course_code = filter_input(INPUT_POST, 'course_code');
        $grade = filter_input(INPUT_POST, 'grade');
        add_grade($student_id, $course_code, $grade);
        header ("Location: .");
        break;
    case 'update_instructor':
        $instructor_id = filter_input(INPUT_POST, 'instructorID');
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

        update_instructor($instructor_id, $first_name, $last_name, $gender, $email, $password);
        header ("Location: .");
        break;
}
