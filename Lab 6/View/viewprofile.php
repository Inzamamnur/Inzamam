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
              <label>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
              <?php 
              if(isset($_SESSION['user name'])){
                echo $_SESSION['uname'];
              }
               ?>
             </label>
              <hr style="width:100%;text-align:left;margin-left:0">
              <label>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
              <?php 
              if(isset($_SESSION['user name'])){
                echo $_SESSION['email'];
              }
               ?>
              </label>
              <hr style="width:100%;text-align:left;margin-left:0">
              <br>
              <a href="editProfile.php">Edit Profile.</a>
            </div>
            <br>
            <a href="adminDashboard.php"> Go Back to Dashboard.</a>
          </fieldset>
        </form>
</body>
</html>


<?php
include "footer.php";                 
?>