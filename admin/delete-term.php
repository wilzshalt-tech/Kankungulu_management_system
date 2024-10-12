<?php 
include 'includes/config.php';
$delete=mysqli_query($conn,"delete from tbl_terms where tm_id='".$_GET['t']."'");
if($delete){
    header('terms:add-terms.php');
}
?>