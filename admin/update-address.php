<?php include 'includes/header.php';?>
<div class="container">
    <div class="Sidebar">
        <?php include 'includes/sidebar.php';?>
    </div>



    <div class="main">
        <h1>Update Address</h1>
        <div class="Main-Content">
    <center>
    <form  method="post">
    <?php
        if(isset($_POST['update'])){
            $location=$_POST['location'];
            $description=$_POST['description'];
            $update=mysqli_query($conn,"update tbl_location set location='".$location."', description='".$description."' where l_id='".$_GET['u']."'");
            if($update){
                header('location:add-address.php');
            }else{
                ?>
                <div class="alert">
                    <h4>Failed to update <?php echo $row['location']; ?></h4>
                </div>
                <?php
            }
        }
        ?>
        <?php 
        $select=mysqli_query($conn,"select *from tbl_location where l_id='".$_GET['u']."'");
        $row=mysqli_fetch_array($select);
        ?>
    <input type="text" name="location" required auto focus id=""value="<?php echo $row['location'];?>"> <br><br>
    <textarea name="description" rows="10"id="" required value="<?php echo $row['description']?>"placeholder="<?php echo $row['description'];?>"></textarea>
    <input type="submit" value="Update Location" name="update"class="btn">
    </form>
    
    </center>
</div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>