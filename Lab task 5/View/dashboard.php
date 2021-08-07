<?php
$title = "Dashboard";                   
include "newHeader.php";                
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> </title>
</head>
<body>
    
    <fieldset style="width:80%;text-align: center;margin-left: 150;display: initial;">
        <?php 
         session_start();
        if(isset($_SESSION['name'])){
        echo "<h1> Welcome ".$_SESSION['name']."!</h1>";
        echo "<br><a href='dashboard.php'>Dashboard</a>";
        echo "<br><a href='viewProfile.php'>View Profile</a>";
        echo "<br><a href='editProfile.php'>Edit Profile</a>";
        echo "<br><a href='profilePicture.php'>Change Profile Picture</a>";
        echo "<br><a href='changePassword.php'>Change Password</a>";
        echo "<br><a href='logout.php'>Logout</a>";
    }
    else{
        $message = "error";
        header("location:login.php");
    }
    ?>
        <!-- <h1 style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</h1>
        <hr style="width:20%;text-align:left;margin-left:45"> <br>
        <div style="text-align:left">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "① "; ?>
            <a href="">Dashboard</a>
        </div>
                
        <div style="text-align:left">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "② "; ?><a href="viewProfile.php">View Profile</a>
        </div>
        
        <div style="text-align:left">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "③ "; ?><a href="editProfile.php">Edit Profile</a>
        </div>
        
        <div style="text-align:left">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "④ "; ?><a href="profilePicture.php">Change Profile Picture</a>
        </div>
        <div style="text-align:left">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "⑤ "; ?><a href="changePassword.php">Change Password</a>
        </div>
        <div style="text-align:left">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "⑥ "; ?><a href="logout.php">Logout</a>
        </div>      -->
    </fieldset>
</body>
</html> 
<?php
include "footer.php";                 
?>