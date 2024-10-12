<?php include 'includes/header.php';?>
<div class="container">
    <div class="Sidebar">
        <?php include 'includes/sidebar.php';?>
    </div>



    <div class="main">
        <h1>Terms</h1>
        <div class="Main-Content">
    <center>
    <form method="post">
        <?php 
        if(isset($_POST['submit'])){
            $term=$_POST['term'];
            $opening=$_POST['opening'];
            $closing=$_POST['closing'];
         $insert=mysqli_query($conn,"insert into tbl_terms values(null,'".$term."','".$opening."','".$closing."')");
         if($insert){
            ?>
            <div class="success">
                <h4><?php echo $term;?>added successfully</h4> 
            </div>
            <?php
         }else{
             ?>
             <div class="alert">
                <h4><?php echo $term;?>failed to add</h4> 
            </div>
            <?php
         }
        }
        ?>
    <input type="text" name="term" required autofocus id="" placeholder="enter term" title="Please Enter term">
<input type="text" name="opening" placeholder="opening date" id="">
<input type="text" name="closing"  placeholder="cloassing date" id="">

    <input type="submit" value="Add term" name="submit"class="btn">
    </form>
    <table>
        <tr> 
            <th class="h1" colspan="5">Current Addresses</th>
        </tr>
        <tr>
            <th>#</th>
            <th>TERM</th>
            <th>OPENING</th>
            <th>CLOSING</th>
            <th>Action</th>
        </tr>
        <?php
        $select=mysqli_query($conn,"select *from tbl_terms order by (tm_id) ASC");
        $count=0;
        while($row=mysqli_fetch_array($select)){
            $count++;
            ?>
            <tr><td><?php echo $count;?></td>
                <td><?php echo $row['term'] ?> </td>
                <td><?php echo $row['starting'] ?> </td>
                <td><?php echo $row['ending'] ?> </td>
                <td><a href="#" class="Edit">Edit</a> | <a href="#"class="delete" onclick="return confirm('are you sure you want to delete <?php echo $row['term'];?>');"> delete</a></td>
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