<?php
include 'includes/config.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $password=$_POST['pasword'];
    $insert=mysqli_query($conn,"insert into tbl_administrator(a_id,aname,acontact,aemail,apassword)
     values(null,'".$name."','".$contact."','".$email."','".md5($password)."')");
}
 ?>
 <form method="post">
    <input type="text" name="name" id=""placeholder="name"><br>
    <input type="number" name="contact" id=""placeholder="contact"><br>
    <input type="email" name="email" id=""placeholder="email"><br>
    <input type="password" name="pasword" id="" placeholder="password"><br>
    <input type="submit" name="submit"value="create an account">
    
 </form>