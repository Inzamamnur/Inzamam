<?php
$title = "Forgot Password";                   
include "header.php";                
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
   $email = "";
   $emailErr = "";
   $message = "";
   $message1 = $message2 = "";

   $data = file_get_contents("data.json");  
   $data = json_decode($data, true);
   
   if(isset($_POST['submit'])){
    foreach ($data as $row) {
        if($row["email"]==$_POST['email']){
            $_SESSION['email'] = $row["email"];
            $_SESSION['password'] = $row["password"];

            $message1 = $row["password"];
            $message2 = "Your password is: $message1";
        }
        else{
            $message = "Email doesn't exist!";
        }
    }
   }

   if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["email"])){
         $emailErr = "Email is required.";
    }
   }

   function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
   ?>

   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <br>
        <fieldset style="width:30%;text-align: center;margin-left: 515;">
            <legend>FORGOT PASSWORD</legend>
            <label>Enter Email: </label>
            <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
            <hr style="width:95%;text-align:left;margin-left:0">
            <input type="submit" name="submit" value="Submit">
            <?php 
            if(isset($message1)){
                echo $message2;
            }
            if(empty($_POST["email"])){
                $emailErr = "Email is required.";
            }
            else if(isset($message)){
                echo $message;
            }
            ?>
             <br>
             <a href="login.php">Go back to login!</a>
            
        </fieldset>
</body>
</html>
<?php
include "footer.php";                 
?>