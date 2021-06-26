<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>

    <h1 style="color: Green;font-size: 35px;">ProjecTree</h1>
    
    <h2 style="text-align: right;">
        Logged in as <?php session_start(); echo$_SESSION['name']." |"; ?>
        <a href="publicHome.php">Logout</a>
    </h2>
    <hr style="width:100%;text-align:center;margin-left:0">