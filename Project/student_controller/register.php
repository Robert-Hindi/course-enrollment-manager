<?php
include '../view/header.php';
session_set_cookie_params(0);
session_start();
?>
<main>
    <h2>Register</h2>
    <p>Already have an account?</p>
    <a href="?action=login">Login</a><br><br>
    <table>
        <form action="." method="post" id="aligned">
            <input type="hidden" name="action" value="add_student">
            <tr>
                <td><label>First Name:</label></td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td><label>Last Name:</label></td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td><label>Gender:</label></td>
                <td><input type="text" name="gender"></td>
            </tr> 
            <tr>
                <td><label>Email:</label></td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password" ></td>
            </tr>
            <tr>
                <td><label>Confirm Password:</label></td>
                <td><input type="password" name="cpassword"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label>&nbsp;</label>
                    <input type="submit" value="Register" />
                </td>
            </tr>
        </form>
    </table>
    

</main>
<?php include '../view/footer.php'; ?>

