
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    

        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        
        $maxsize = 4 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture </title>
</head>
<body>
    \</form>
 <form action="upload-manager.php" method="post" enctype="multipart/form-data">
        <h2>Profile Picture</h2>
        
<img src="Profile picture.png" alt="Profile Picture" width="80" height="80"><br><br>
       
        <input type="file" name="photo" id="fileSelect"><br><br>
        <input type="submit" name="submit" value="Submit">
       
    </form>

    </tr>
</tr>
    </form>
    </table>
</body>
</html>