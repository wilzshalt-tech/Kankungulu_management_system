
<?php session_start();?>
<?php
if($_SESSION['administrator']==""){
    header('location:index.php');
}
?>
<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAKUNGULU PRIMARY SCHOOL | Login</title>
    <link rel="shortcut icon" href="images/kms.jpg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
   <nav class="nav">
    <div class="left-tab"> <a href="dashboard.php"><img src="images/kms 2.jpg"></a></div>
    <div class="right-tab">
    <ul>
    <li><a href="#"><?php  echo $_SESSION['name']?></a></li>
    <li><a href="logout.php" >Logout</a></li>
    </ul>
</div>
</nav>