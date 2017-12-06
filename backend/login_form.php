<?php
session_start();
if(isset($_GET['message']))echo $_GET['message'];

session_destroy();
?>


<form method="post" action="login.php" >
<table>
<tr><td>Username: </td> <td><input type="text" name="username" placeholder="Username" title="Username must be unique."></td></tr>
<tr><td>Password: </td><td><input type="password" name="password" placeholder="password" title="Password must contain atleast a number, capital and small letter alphabet, special character."></td></tr>
<tr><td><input type="submit" name="login" value="login"></td><td><input type="button" name="sign_up" value="Sign up"></td></tr>
</table>
</form>