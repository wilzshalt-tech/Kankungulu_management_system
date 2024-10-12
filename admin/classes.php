<?php include 'includes/header.php';?>
<div class="container">
    <div class="Sidebar">
        <?php include 'includes/sidebar.php';?>
    </div>



    <div class="main">
        <h1>Classes</h1>
        <div class="Main-Content">
    <center>
    <form action="" method="post">
    <input type="text" name="class" required autofocus id="" placeholder="enter class" title="Please Enter class">
<select name="class Teacher" id="" required>
<option value=" ">select class Teacher</option>
</select><br> <br>
<input type="number" name="Fees" placeholder="enter fees structure" id="">
    <input type="submit" value="Add class" title="please dont leave this"class="btn">
    </form>
    </center>
</div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>