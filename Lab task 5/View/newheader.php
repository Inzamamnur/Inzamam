<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>

    <img src="Bus.png" alt="Profile Picture" width="80" height="40"><br>
    
    <h2 style="text-align: right;">
        Logged in as <?php session_start(); echo$_SESSION['name']." |"; ?>
        <a href="login.php">Logout</a>
    </h2>
    <hr style="width:100%;text-align:center;margin-left:0">





