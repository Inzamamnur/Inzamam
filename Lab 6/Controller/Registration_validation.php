<?php 
require_once '../Model/db_connect.php';
$title = "Registration";                                   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
    .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php 
session_start();
    $message = '';
    $emailErr = $unameErr = $passwordErr = $rpasswordErr = "";
    $email = $uname = $password = $rpassword = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                $email = "";
            }
        }

       if (empty($_POST["uname"])) {
            $unameErr = "Name is required";
        } else {
            $uname = test_input($_POST["uname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$uname)) {
                $unameErr = "Only letters and white space allowed";
            }
            else{
                if(str_word_count($uname)<2){
                    $unameErr = "Name must contain at least two words.";
                    $uname="";
                }
                else{
                    $uname = test_input($_POST["uname"]);
                }
            }
        }

        if(empty($_POST["password"]))
        {
            $passwordErr = "Password is required";
        }
        else {
            $password=test_input($_POST["password"]);
            if(strlen($password)<8)
            {
                $passwordErr="Password can't be less than 8 characters";
            }
            else {
                if(substr_count($password,"@")<1 && substr_count($password,"#")<1 && substr_count($password,"%")<1 &&
                    substr_count($password,"$")<1)
                {
                    $passwordErr="Password must contain at least one of the special characters (@, #, $,%)";
                }
            }
        }

        if(!empty($_POST["password"])){ 
            $rpassword = test_input($_POST["rpassword"]);
            if (empty($_POST["rpassword"])) 
            {
                 $rpasswordErr = "Please Confirm Your Password!";
            }
            else if(($_POST["password"] != $_POST["rpassword"])){
                $rpasswordErr = "Password didn't match.";
            }
        }
        }

    if(isset($_POST["submit"]))  
    {  
      if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["uname"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["rpassword"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
        else{
        $query = "INSERT INTO user_info( email, username, password,rpassword) VALUES (:email, :username, :password,:rpassword)";
        $stm = $conn->prepare($query);
        $stm->execute(['email'=> $email, 'username'=> $username, 'password'=> $password,'rpassword'=>$rpassword]);
        $message = "Registration Successful!";
    }
        
    }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
