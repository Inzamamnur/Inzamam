<?php
$title = "about us";                   
include "Main_header.php";                
?>

<!DOCTYPE html>
<html>
<head>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body 

{
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}



.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}



@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
  <p>Student of American International University of Bangladesh</p>
  
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="ProfileImage.jpg" alt="image" style="width:100%">
      <div class="container">
        <h2>xxxxx</h2>
        <p class="title">xxxxxxxxxxx</p>
        <p>Student of American International University of Bangladesh</p>
         <p>student@aiub.edu</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="ProfileImage.jpg" alt="image" style="width:100%">
      <div class="container">
        <h2>xxxxx</h2>
        <p class="title">xxxxxxxxxxx</p>
        <p>Student of American International University of Bangladesh</p>
         <p>student@aiub.edu</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
 <div class="column">
    <div class="card">
      <img src="ProfileImage.jpg"alt="image" style="width:100%">
      <div class="container">
        <h2>xxxxx</h2>
        <p class="title">xxxxxxxxxxx</p>
        <p>Student of American International University of Bangladesh</p>
         <p>student@aiub.edu</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>




  <div class="column">
    <div class="card">
      <img src="ProfileImage.jpg" alt="image" style="width:100%">
      <div class="container">
        <h2>xxxxx</h2>
        <p class="title">xxxxxxxxxxx</p>
        <p>Student of American International University of Bangladesh</p>
        <p>student@aiub.edu</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
 </body>
 <?php
include "footer.php";                 
?>
