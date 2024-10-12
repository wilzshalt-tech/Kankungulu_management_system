<?php include 'includes/header.php';?>
<div class="container">
    <div class="Sidebar">
        <?php include 'includes/sidebar.php';?>
    </div>



    <div class="main">
        <h1>Add Class-Teacher</h1>
        <div class="Main-Content">
    <center>
    <form action="" method="post">
        <?php
        if(isset($_POST['class-teacher'])){
            $name=$_POST['name'];
            $contact=$_POST['contact'];
            $email=$_POST['email'];
            $gender=$_POST['gender'];
            $address=$_POST['address'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
            if($password===$cpassword){
             $insert=mysqli_query($conn,"insert into tbl_classteacher(ct_id,ctname,ctcontact,ctemail,g_id,l_id,ctpassword)
              values(null,'".$name."','".$contact."','".$email."','".$gender."','".$address."','".md5($password)."')");
             if($insert){
                ?>
                <div class="success">
                    <h4>Class teacher created successfully</h4>
                </div>
                <?php
             }
            }else{
                ?>
                <div class="alert">
                <h4>oopss! your password does not match...</h4>
                </div>
                <?php

            }
        }
        ?>
    <input type="text" name="name" required auto focus id="" placeholder=" Enter Class-Teacher's Full Nane" title="Please Enter your full name">
    <input type="tel" name="contact" required placeholder="Ex:0777343431" id="">
    <input type="email" name="email" required placeholder="example@gmail.com" id="">
    <div class="gender">
        <input type="radio" name="gender" value="1" required id="">Male.
        <input type="radio" name="gender" value="2" required id="">Female.
        
    </div>
    <select name="address" id="">
        <option value=""> select Address<address></address></option>
        <?php 
        $select=mysqli_query($conn,"select * from tbl_location");
        while($row=mysqli_fetch_assoc($select)){
        ?>
        <option value="<?php echo $row['l_id']; ?>"><?php echo $row['location'];?></option>
        <?php       
         }
        ?>

    </select>
    <input type="password" name="password" required placeholder="password" id="">
    <input type="password" name="cpassword" required placeholder="confirm password" id="">
    <input type="submit"name="class-teacher" value="Add Class Teacher" class="btn">
    </form>
    </center>
</div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>