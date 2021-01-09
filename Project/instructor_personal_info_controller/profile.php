<?php 
include '../view/header.php'; 
session_set_cookie_params(0);
session_start();
?>
<main>
    <h2>Profile</h2>
    
    <table>
        <form action="." method="post" id="aligned">
           <input type="hidden" name="action" value="update_instructor">
           <input type="hidden" name="instructorID" 
                  value="<?php echo htmlspecialchars($instructor['instructorID']); ?>">
           <tr>
               <td><label>First Name:</label></td>
               <td><input type="text" name="fname" 
                          value="<?php echo htmlspecialchars($instructor['fname']); ?>"><br></td>
           </tr>
           <tr>
               <td><label>Last Name:</label></td>
               <td><input type="text" name="lname" 
                       value="<?php echo htmlspecialchars($instructor['lname']); ?>"><br></td>
           </tr>
           <tr>
               <td><label>Gender:</label></td>
               <td><input type="text" name="gender" 
                           value="<?php echo htmlspecialchars($instructor['gender']); ?>"><br></td>
           </tr>
            <tr>
               <td><label>Birthday:</label></td>
               <td><input type="text" name="birthday" 
                           value="<?php echo htmlspecialchars($bday['birthday']); ?>"><br></td>
           </tr>
           <tr>
               <td><label>Email:</label></td>
               <td><input type="text" name="email" 
                       value="<?php echo htmlspecialchars($instructor['email']); ?>"><br></td>
           </tr>
           <tr>
               <td><label>New Password:</label></td>
               <td><input type="password" name="npassword" ><br></td>
           </tr>
           <tr>
               <td><label>Confirm New Password:</label></td>
               <td><input type="password" name="cpassword" ><br></td>
           </tr>
           <tr>
               <td></td>
               <td><input type="submit" value="Update Profile"><br></td>
           </tr>
       </form>
    </table>
    
</main>
<?php include '../view/footer.php'; ?>

