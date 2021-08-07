<?php 
include_once 'Main_header.php';
include_once '../Controller/Registration_validation.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
</head>
<body>
    <form method="post" action=" ">
        <br>
        <fieldset style="width:30%;text-align: center;margin-left: 515;">
            <legend>Registration</legend>
            </select> 
            <br><br>
           <label>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="email" value="<?php echo $email;?>"> 
            <span class="error">* <?php echo $emailErr;?></span>
            <hr style="width:80%;text-align:left;margin-left:50">
            <br><br>
            <label>User Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="uname" value="<?php echo $uname;?>">
            <span class="error">* <?php echo $unameErr;?></span>
            <hr style="width:80%;text-align:left;margin-left:50">
            <br><br>
              <label>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="password" value="<?php echo $password;?>">
            <span class="error">* <?php echo $passwordErr;?></span>
            <hr style="width:80%;text-align:left;margin-left:50">
            <br><br>
            <label>Confirm Password: </label>
            <input type="text" name="rpassword" value="<?php echo $rpassword;?>">
            <span class="error">* <?php echo $rpasswordErr;?></span>
            <hr style="width:80%;text-align:left;margin-left:50">
            <br>
            <input type="submit" name="submit" value="Signup"> 
            <br><br> Already have an account? <a href="login.php">Sign in</a>      
        </fieldset>
    </form>
</body>
</html>
<?php
include "footer.php";                 
?>