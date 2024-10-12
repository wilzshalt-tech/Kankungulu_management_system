<?php include 'includes/header.php';?>
<div class="container">
    <div class="Sidebar">
        <?php include 'includes/sidebar.php';?>
    </div>



    <div class="main">
        <h1>Add Secretary</h1>
        <div class="Main-Content">
    <center>
    <form action="" method="post">
    <input type="text" name="name" required auto focus id="" placeholder=" Enter Secretsry's Full Nane" title="Please Enter your Address you exist">
    <input type="tel" name="contact" required placeholder="Ex:0777343431" id="">
    <input type="email" name="email" required placeholder="example@gmail.com" id="">
    <div class="gender">
        <input type="radio" name="gender" value="1" required id="">Male.
        <input type="radio" name="gender" value="2" required id="">Female.
        
    </div>
    <select name="" id="" required>
        <option value=""> select Address</option>
    </select>
    <input type="password" name="password" required placeholder="password">
    <input type="password" name="cpassword" required placeholder="confirm password">
    <input type="submit" value="Add Secretary" class="btn">
    </form>
    </center>
</div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>