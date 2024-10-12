<?php 
include 'includes/config.php';
$delete=mysqli_query($conn,"delete from tbl_location where l_id='".$_GET['t']."'");
if($delete){
    header('location:add-address.php');
}
?>