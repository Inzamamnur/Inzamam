<?php 
require_once '../Model/db_connect.php';
session_start();
if(isset($_POST["submit"])){
    if(empty($_POST["username"]) || empty($_POST["password"])){
        echo "Username or password is required";
    }
    else{
        $query = "SELECT * FROM user_info WHERE username = :username AND password = :password";
        $stm = $conn->prepare($query);
        $stm->execute(
            array(
                'username' => $_POST["username"],
                'password' => $_POST["password"]
            )
        );
        $count = $stm->rowCount();
        if($count>0){
            $_SESSION["username"] = $_POST["username"];
            header("Location:adminDashboard.php");
        }
        else{
            echo "Invalid username or password";
        }
    }
    
}
?>

