<?php
$title = "View Profile";                   
include "newHeader.php";                
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <fieldset style="width:30%;text-align: center;margin-left: 500;">
            <legend>PROFILE</legend>
            <div style="text-align:center;">
                <img src="uploads/tamzid.jpg" alt="" width="150" height="150">
                <br>
                <a href="profilePicture.php">Change</a>
              </div>
            <div style="text-align:left;">
              <br>
              <label>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
              <?php 
              if(isset($_SESSION['name'])){
                echo $_SESSION['name'];
              }
               ?>
             </label>
              <hr style="width:100%;text-align:left;margin-left:0">
              <label>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
              <?php 
              if(isset($_SESSION['name'])){
                echo $_SESSION['email'];
              }
               ?>
              </label>
              <hr style="width:100%;text-align:left;margin-left:0">
              <label>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                <?php 
              if(isset($_SESSION['name'])){
                echo $_SESSION['gender'];
              }
               ?>
              </label>
              <hr style="width:100%;text-align:left;margin-left:0">
              <label>Date of Birth: 
                <?php 
              if(isset($_SESSION['name'])){
                echo $_SESSION['dob'];
              }
               ?>
              </label>
              <hr style="width:100%;text-align:left;margin-left:0">
              <br>
              <a href="editProfile.php">Edit Profile.</a>
            </div>
            <br>
            <a href="dashboard.php"> Go Back to Dashboard.</a>
          </fieldset>
        </form>
</body>
</html>


<?php
include "footer.php";                 
?>