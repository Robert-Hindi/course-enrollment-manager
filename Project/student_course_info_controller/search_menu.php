<?php 
include '../view/header.php'; 
session_set_cookie_params(0);
session_start();
?>
<main>
    <h2>Search Courses</h2>
    <ul>
        <li><a href="search_id.php">Search by Course ID</a></li>
        <li><a href="search_name.php">Search by Course Name</a></li>
        <li><a href="search_instructor.php">Search by Instructor</a></li>
    </ul>

    
</main>
<?php include '../view/footer.php'; ?>

