<?php 
include 'view/header.php';
session_set_cookie_params(0);
session_start();
?>
<main>
    <nav>
        
        <?php
        if(!isset($_SESSION['email_i'])){
            echo '<h2>Students</h2>';    
            echo '<ul>';
            if(!isset($_SESSION['email_s'])){
                echo'<li><a href="student_controller">Register</a></li>';
                echo'<li><a href="student_controller?action=login">Login</a></li>';
            } else {
                echo '<li><a href="student_course_info_controller">Course Info</a></li>';
                echo '<li><a href="student_personal_info_controller">Personal Info</a></li>';
                echo '<li><a href="student_controller?action=logout">Logout</a></li>';
            }
            echo '</ul>';
        }

        if(!isset($_SESSION['email_s'])){
            echo '<h2>Instructors</h2>';    
            echo '<ul>';
            if(!isset($_SESSION['email_i'])){
                echo '<li><a href="instructor_controller">Register</a></li>';
                echo '<li><a href="instructor_controller?action=login">Login</a></li>';
            } else {
                echo '<li><a href="instructor_personal_info_controller">Personal Info</a></li>';
                echo '<li><a href="instructor_controller?action=logout">Logout</a></li>';
            }
            echo '</ul>';
        }
        ?>
 
    </nav>
    <form></form>
</main>
<?php include 'view/footer.php'?>
