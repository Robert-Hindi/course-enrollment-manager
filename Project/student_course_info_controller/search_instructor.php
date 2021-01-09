<?php 
require '../model/database.php';
require '../model/instructor_db.php';
include '../view/header.php'; 
session_set_cookie_params(0);
session_start();

$instructors = get_instructors();
?>
<main>
    <h2>Search Courses by Instructor</h2>
    
        <table>
            <form action="." method="post" id="aligned">
            <input type="hidden" name="action" value="search_instructor">
            <tr>
            <label>Instructor:</label>
                    <select name="instructor">
                    <?php foreach ($instructors as $instructor) : ?>
                        <option value="<?php echo htmlspecialchars($instructor['email']); ?>">
                            <?php echo htmlspecialchars($instructor['email']); ?>
                        </option>
                    <?php endforeach; ?>
                    </select>
            </tr>
            <tr><input type="submit" value="Search"></tr>
            </form>
        </table>
</main>
<?php include '../view/footer.php'; ?>

