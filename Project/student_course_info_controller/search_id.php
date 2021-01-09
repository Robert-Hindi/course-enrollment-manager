<?php 
require '../model/database.php';
require '../model/course_db.php';
include '../view/header.php'; 
session_set_cookie_params(0);
session_start();

$courses = get_courses();
?>
<main>
    
    
    <h2>Search By Course ID</h2>
    
        <table>
            <form action="." method="post" id="aligned">
            <input type="hidden" name="action" value="search_id">
            <tr>
            <label>Course ID:</label>
                    <select name="course_id">
                    <?php foreach ($courses as $course) : ?>
                        <option value="<?php echo htmlspecialchars($course['courseCode']); ?>">
                            <?php echo htmlspecialchars($course['courseCode']); ?>
                        </option>
                    <?php endforeach; ?>
                    </select>
            </tr>
            <tr><input type="submit" value="Search"></tr>
            </form>
        </table>
  
</main>
<?php include '../view/footer.php'; ?>

