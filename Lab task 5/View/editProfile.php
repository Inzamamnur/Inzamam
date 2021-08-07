
  
<?php
$title = "Edit Profile";                   
include "newHeader.php";                
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
    if(isset($_SESSION['name'])){
    $nameErr = $emailErr = $unameErr = $passwordErr = $cpasswordErr = $genderErr = $DateofBirthErr = "";
    $name = $email = $uname = $password = $cpassword = $gender = $dob = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
            }
            else{
                if(str_word_count($name)<2){
                    $nameErr = "Name must contain at least two words.";
                    $name="";
                }
                else{
                    $_SESSION['name']=$name;
                }
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                $email = "";
            }
            else{
                $_SESSION['email']=$email;
            }
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
            $_SESSION['gender']=$gender;
        }

        if (empty($_POST["dob"])) {
            $DateofBirthErr = "Date of birth is required.";
        } else {
            $dob = test_input($_POST["dob"]);
            $_SESSION['dob']=$dob;
            // $d = date("dd-mm-yyyy");
            // if($d<1953 && $d>1998){
            //     $DateofBirthErr = "Input Year between 1952 to 1998";
            //     $DateofBirthErr = "";
            // }
            // else{
            //     $dob=$_POST["dob"];
            //     $_SESSION['dob']=$dob;
            // }
        }
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
        <fieldset style="width:30%;text-align: center;margin-left: 505;">
            <legend>EDIT PROFILE</legend>

            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            </label>
            <input type="text" name="name" value="  <?php 
              if(isset($_SESSION['name'])){
                echo $_SESSION['name'];
              }
              ?>">            
            
            <hr style="width:60%;text-align:left;margin-left:110">
            
            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="email" value="<?php 
              if(isset($_SESSION['name'])){
                echo $_SESSION['email'];
              }
               ?>"> 
            
            <hr style="width:60%;text-align:left;margin-left:110">

            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

            </label> <input type="radio" name="gender"value="Female" id="Female" <?php if($_SESSION['gender']=='Female') echo "checked";?> value="Female"> Female
            <input type="radio" name="gender"value="Male" id="Male" <?php if($_SESSION['gender']=='Male') echo "checked";?> value="Male">Male
            <input type="radio" name="gender"value="Other" id="Other" <?php if($_SESSION['gender']=='Other') echo "checked";?> value="Other">Other    
            
            <hr style="width:60%;text-align:left;margin-left:110">

            
            <label>&nbsp;&nbsp;&nbsp;Date Of Birth: &nbsp;&nbsp;</label><input type="text" name="dob" value=" <?php 
              if(isset($_SESSION['name'])){
                echo $_SESSION['dob'];
              }
               ?>">
               
            
            <hr style="width:60%;text-align:left;margin-left:110">
            <input type="submit" name="submit" value="Update"> &nbsp;   
            <a href="dashboard.php"> Go Back to Dashboard.</a>
        </fieldset>
    </form>
</body>
</html>


<?php
include "footer.php";                 
?>
