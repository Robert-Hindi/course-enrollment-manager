<?php 
include '../view/header.php'; 
session_set_cookie_params(0);
session_start();
?>
<main>
    <h2>Login</h2>
    <a href="?action=register">Register</a><br><br>
    <table>
        <form action="." method="post" id="aligned">
            <input type="hidden" name="action" value="login_student">
            <tr>
                <td><label>Email:</label></td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label>&nbsp;</label>
                    <input type="submit" value="Log In" />
                </td>
            </tr>
        </form>
    </table>

</main>
<?php include '../view/footer.php'; ?>