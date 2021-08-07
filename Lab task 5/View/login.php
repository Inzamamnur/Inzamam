<?php 
include_once 'Main_header.php';
include_once '../Controller/login_validation.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>
    <form method="post" action=" ">
        <br>
        <fieldset style="width:30%;text-align: center;margin-left: 515;">
            <legend>LOGIN</legend>
            <label>Username: </label>
            <input type="text" name="username" placeholder = "Username" value=" ">
            <br><br>
            <label>&nbsp; &nbsp;Password: </label>
            <input type="text" name="password" placeholder= "Password" value=" ">
            <hr style="width:95%;text-align:left;margin-left:0">
            <input type="checkbox" name="Remember" value="Remember">
            <label for="Remember">Remember Me </label>
            &nbsp; <a href="forgotPassword.php">Forgotten Password?</a>
            <br><br>
            <input type="submit" name="submit" value="Login"> 
            <br><br> Don't have an account? <a href="registration.php">Sign up</a>      
        </fieldset>
    </form>
</body>
</html>
<?php
include "footer.php";                 
?>