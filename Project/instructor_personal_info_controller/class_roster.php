<?php 
include '../view/header.php'; 
session_set_cookie_params(0);
session_start();
?>
<main>
    <h2>Class Roster</h2>
    
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Final Grade</th>
        </tr>
        
        <?php foreach ($students as $student) : ?>
        
            <tr>
                <td><?php echo htmlspecialchars($student['studentID']); ?></td>
                <td><?php echo htmlspecialchars($student['fname']); ?></td>
                <td><?php echo htmlspecialchars($student['lname']); ?></td>
                <form action="." method="post">
                    <input type="hidden" name="action"
                           value="add_grade">
                    <td>
                        <select name="grade">
                            <option value=""></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="F">F</option>
                            <option value="FA">FA</option>
                            <option value="W">W</option>
                        </select>
                    </td>
                    <td>
                        <input type="hidden" name="course_code"
                               value="<?php echo htmlspecialchars($student['courseCode']); ?>">
                        <input type="hidden" name="student_id"
                               value="<?php echo htmlspecialchars($student['studentID']); ?>">
                        <input type="submit" value="Add Grade">                  
                    </td>
                </form>
            </tr>
            
        <?php endforeach; ?>
        
    </table>
    
</main>
<?php include '../view/footer.php'; ?>

