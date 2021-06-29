<?php
$title = "Profile Picture";                   
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
            <legend>PROFILE PICTURE</legend>
            <img src="ProfileImage.jpg" alt="" width="250" height="250">
            <br>Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br><br>
            <hr style="width:95%;text-align:left;margin-left:0">
            <input type="submit" value="Upload Image" name="submit">
            <a href="dashboard.php"> Go Back to Dashboard.</a>
          </fieldset>
        </form>
</body>
</html>

<?php
include "footer.php";                 
?>
