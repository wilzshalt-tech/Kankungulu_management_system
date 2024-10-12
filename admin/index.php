<?php include 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> KMS | Login </title>
    <link rel="shortcut icon" href="images/kms.jpg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/login.css">
    
</head>
<body>
    <div class="container">
    <center>
<fieldset class="fieldset">
    <legend class="legend">
        <img  src="images/Image 20.jpg" class="limg" alt="" width="90" height="90">
    </legend>
    <?php 
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $select=mysqli_query($conn,"select *from tbl_administrator where aemail='".$email."' and apassword='".md5($password)."'");
        if($row=mysqli_fetch_array($select)){
            session_start();
            $_SESSION['administrator']=$row['a_id'];
            $_SESSION['name']=$row['aname'];
            header('location:dashboard.php');
        }else{
            ?>
<div class="alert">
    <h4>Ooops! Your User name or password is Incorrect.</h4>

        </div>
        <?php
        
        }
    }
    ?>
    <form method="post">
        <input type="email" name="email" id="" placeholder="enter email" autofocus required>
        <input type="password" name="password" id="" placeholder="enter password" required>
        <input type="submit" name="submit" class="btn"value="login">
        <br><br>
        <a href="#"> forgot password</a> 
    </form>
    
</fieldset>
</center>

</div>
    <ad>
        <y>
            <dy>
                <m1>
                
                </m1>
            </dy>
        </y>
    </ad>
    
</body>
</html>