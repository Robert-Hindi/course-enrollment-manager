<?php 
require '../model/database.php';
require '../model/course_db.php';
include '../view/header.php'; 
session_set_cookie_params(0);
session_start();

$courses = get_courses();
?>
<main>
    <h2>Search by Course Name</h2>
    
        <table>
            <form action="." method="post" id="aligned">
            <input type="hidden" name="action" value="search_name">
            <tr>
            <label>Course Name:</label>
                    <select name="course_name">
                    <?php foreach ($courses as $course) : ?>
                        <option value="<?php echo htmlspecialchars($course['name']); ?>">
                            <?php echo htmlspecialchars($course['name']); ?>
                        </option>
                    <?php endforeach; ?>
                    </select>
            </tr>
            <tr><input type="submit" value="Search"></tr>
            </form>
        </table>
    
</main>
<?php include '../view/footer.php'; ?>
