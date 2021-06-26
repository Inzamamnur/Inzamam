<?php
    
    $validateUserName="";
    $validatePassword="";

if($_SERVER["REQUEST_METHOD"] == "POST")
    {
           
            $userName = $_REQUEST['userName'];
            $pass = $_REQUEST['pass'];
            if(empty($userName) || !preg_match('/[a-zA-Z0-9._]{5,}$/', $userName)){
                $validateUserName="Invalid Username!!! Please enter a valid Username";
            }
            else{
                $validateUserName=$userName;
            }
            if(empty($pass) || strlen($pass)<8 || !preg_match("/(?=.*[@#$%^&+=]).*$/", $pass)){
                $validatePassword = "!!!Password must contain atleast 8 characters including atleast 1 special character!!!";
            }
            else{
                $validatePassword = "Password accepted!!!";
            }
        }

         $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["username"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
     
       
     
       
 }  
 

                ?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <table>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    
        <td>User Name: </td><td><input type="text" id="userName" name="userName"></td>
        <?php echo $validateUserName ?><br>
    </tr>
    <tr>  
        <td>Password:</td><td> <input type="password" id="pass" name="pass">
        <?php echo $validatePassword ?><br>
    
  <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label></td><br></tr>
  <tr>
     <td><input type="submit" value="SUBMIT">
      <span class="forgot-password">
          <a href="no-javascript1.html" title="Forgot Password" id="link-reset">Forgot Password?</a>
        </span></td>
    </tr>
    </form>
    </table>
</body>
</html>