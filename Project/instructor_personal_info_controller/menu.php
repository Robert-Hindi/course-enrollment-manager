<?php
include '../view/header.php';
session_set_cookie_params(0);
session_start();
?>
<main>
    <nav>
        
    <h2>Personal Information</h2>
    <ul>
        <li><a href="?action=my_courses">My Courses</a></li>
        <li><a href="?action=profile">Profile</a></li>
    </ul>
    
    </nav>
</main>
<?php include '../view/footer.php'?>

