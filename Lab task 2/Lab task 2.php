<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $dateofbirthErr = $genderErr = $degreeErr = $bloodgroupErr = "";
$name = $email = $dateofbirth = $gender = $degree = $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {

      $nameErr = "<b>Validation Rules</b>  A. Cannot be empty   B.Contains atleast two words C.Must start with a letter D.Can contain a-z,A-Z,period,dash only" ;

    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "<b>Validation Rules</b> A. Cannot be empty   B.Must be valid C.email address: anything@example.com";
    }
  }

  if (empty($_POST["dateofbirth"])) {
    $dateofbirth = "";
  } else {
    $dateofbirth = test_input($_POST["dateofbirth"]);
    // check if URL address syntax is valid
    if (!preg_match("/^[1-31,1-12,1953-1998]*$/",$dateofbirth)){

      $dateofmonthErr = "<b>Validation Rules</b>  A. Cannot be empty B. Must be a valid numbers (dd:1-31,mm:1-12,yyyy:1953-1998";
    }    
  }



  if (empty($_POST["gender"])) {
    $genderErr = "<b>Validation Rules</b>  A. Atleast one of them must be selected";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
if (empty($_POST["degree"])) {
    $degreeErr = "<b>Validation Rules</b>  A. Atleast two of them must be selected";
  } else {
    $degree = test_input($_POST["degree"]);
  }
if (empty($_POST["bloodgroup"])) {
    $bloodgroupErr = "<b>Validation Rules</b>  A. Must be selected";
  } else {
    $bloodgroup = test_input($_POST["bloodgroup"]);
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<fieldset> 
  <legend><b>NAME</b> </legend><br> <br> <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span> <hr>
  <input type="submit">
</fieldset>
  <br><br>
  <?php
 echo "<b>2 </b> Design the following HTML form and perform the following validations";
?> 
<br><br>
 <fieldset >
  <legend><b>EMAIL </b></legend><br><br> <input type="text" name="email" >
  <span class="error">* <?php echo $emailErr;?></span> <hr>
  <input type="submit">
</fieldset>
  <br><br>
  <?php
echo "3 Design the following HTML form and perform the following validations";
?> <br><br>
<fieldset>
 <legend><b> DATE OF BIRTH</b> </legend> <br> <br><input type="date"  id= "dateofbirth"name="dateofbirth">
  <span class="error"><?php echo $dateofbirthErr;?></span> <hr>
  <input type="submit">
</fieldset>
  <br><br>
  <?php
echo "<b>4 </b>Design the following HTML form and perform the following validations";
?> <br><br> 
  <fieldset>
  <legend><b>GENDER</b></legend><br><br>
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span> 
  <hr>

  <input type="submit" name="submit" value="Submit"> 
  </fieldset> 
 <?php
echo "<b>5 </b> Design the following HTML form and perform the following validations";
?> <br><br>
<fieldset>
 <legend><b> DEGREE </b> </legend> <br> <br>
  <input type="checkbox" id="statement" name="statement" value="SSC">
  <label for="statement"> SSC</label> 
  <input type="checkbox" id="statement" name="statement" value="HSC">
  <label for="statement">  HSC</label>
  <input type="checkbox" id="statement" name="statement" value="BSC">
  <label for="statement"> BSC</label>
  <input type="checkbox" id="statement" name="statement" value="MSC">
  <label for="statement"> MSC</label>
  <span class="error"><?php echo $degreeErr;?></span> <hr>
  <input type="submit">
</fieldset>
  <br><br>
   <?php
echo "<b>6 </b>Design the following HTML form and perform the following validations";
?> <br><br>
 <fieldset>
  <legend><b> BLOOD GROUP </b></legend><br><br> 


  <select id="bloodgroup" name="bloodgroup">
    <option valu="">&nbsp </option>
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
 <span class="error">* <?php echo $bloodgroupErr;?></span> <hr>
  <input type="submit">
</fieldset>
</select>
</fieldset>
</fieldset>


</form>

<?php

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dateofbirth;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $bloodgroup;
?>

</body>
</html>