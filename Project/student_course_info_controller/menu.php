<?php 
include '../view/header.php';
session_set_cookie_params(0);
session_start();
?>
<main>
    <nav>
        
    <h2>Course Information</h2>
    <ul>
        <li><a href="?action=show_all">Show All Courses</a></li>
        <li><a href="?action=search">Search Courses</a></li>
    </ul>
    
    </nav>
</main>
<?php include '../view/footer.php'?>

