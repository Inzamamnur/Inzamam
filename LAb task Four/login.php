<?php
$title = "Login";                   
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

    session_start();
    $unameErr = $passwordErr = "";
    $uname = $password = "";
    //$username = "";
    $message = "";
    
    $data = file_get_contents("data.json");  
    $data = json_decode($data, true); 

    if(isset($_POST['submit'])){
        foreach ($data as $row) {
            if($row["username"]==$_POST["uname"] && $row["password"]==$_POST["password"]){
                $_SESSION['username'] = $row["uname"];
                $_SESSION['password'] = $row["password"];
                $_SESSION['name'] = $row["name"];
                $_SESSION['email'] = $row["email"];
                $_SESSION['dob'] = $row["dob"];
                $_SESSION['gender']=$row["gender"];

                header("location:dashboard.php");
            }
            else{
                $message = "Wrong username or password!";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["uname"])) {
            $unameErr = "User Name is required";
        }

        if(empty($_POST["password"]))
        {
            $passwordErr = "Password is required";
        }
    } 

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST["Remember"])) {
        setcookie ("uname",$_POST["uname"],time()+ 60*5);
        setcookie ("password",$_POST["password"],time()+ 60*5);
    } 

    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <br>
        <fieldset style="width:30%;text-align: center;margin-left: 515;">
            <legend>LOGIN</legend>
            <label>User Name: </label>
            <input type="text" name="uname" value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>">
            <span class="error">* <?php echo $unameErr;?></span>
            <br><br>
            <label>&nbsp; &nbsp;Password: </label>
            <input type="text" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
            <span class="error">* <?php echo $passwordErr;?></span>
            <hr style="width:95%;text-align:left;margin-left:0">
            <input type="checkbox" name="Remember" value="Remember">
            <label for="Remember">Remember Me </label>
            <br><br>
            <input type="submit" name="submit" value="Submit"> 
            <a href="forgotPassword.php">Forgot Password?</a>
            <?php  
            if(!empty($_POST["uname"])  && !empty($_POST["password"])){
                if(isset($message))  
                     {  
                          echo $message;  
                     }          
            }
            ?>
                     
        </fieldset>
    </form>
</body>
</html>
    
<?php
include "footer.php";                 
?>