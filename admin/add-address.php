<?php include 'includes/header.php';?>
<div class="container">
    <div class="Sidebar">
        <?php include 'includes/sidebar.php';?>
    </div>



    <div class="main">
        <h1>Add Address</h1>
        <div class="Main-Content">
    <center>
    <form  method="post">
    <?php
        if(isset($_POST['submit'])){
        $location=$_POST['location'];
        $description=$_POST['description'];
        $select=mysqli_query($conn,"select *from tbl_location where location='".$location."'");
        if($rlt=mysqli_fetch_array($select)){
            ?>
            <div class="alert">
                <h4><?php echo $location;?> already exist!</h4>
            </div>
            <?php
        }else{
            $insert=mysqli_query($conn,"insert into tbl_location(l_id,location,description) values(null,'".$location."','".$description."')");
            if($insert){
                ?>
            <div class="success">
                <h4><?php echo $location;?> created successfully</h4>
            </div>
            <?php
            }else{ ?>
                    <div class="alert">
                <h4><?php echo $location;?> failed to add</h4>
            </div>
            <?php
                }
            }
                
            }
        ?>
    <input type="text" name="location" required auto focus id="" placeholder="enter Address" title="Please Enter your Address you exist">
    <textarea name="description" rows="10"id="" required placeholder="Describe your location"></textarea>
    <input type="submit" value="Add Location" name="submit"class="btn">
    </form>
    <table>
        <tr> 
            <th class="h1" colspan="4">Current Addresses</th>
        </tr>
        <tr>
            <th>#</th>
            <th>Location</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php
        $select=mysqli_query($conn,"select *from tbl_location order by (l_id) DESC limit 3");
        $count=0;
        while($row=mysqli_fetch_array($select)){
            $count++;
            ?>
            <tr><td><?php echo $count;?></td>
                <td><?php echo $row['location'];?> </td>
                <td><?php echo $row['description'];?> </td>
                <td><a href="update-address.php?u=<?php echo $row['l_id']; ?>" class="Edit">Edit</a> | <a href="delete-address.php?t=<?php echo $row['l_id'];?>"class="delete" onclick="return confirm('are you sure you want to delete <?php echo $row['location'];?>');"> delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    </center>
</div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>