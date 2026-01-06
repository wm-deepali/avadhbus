<?php
include("../connection.php");   
 if($_REQUEST['subview']=="delete")
{
 $table = "bk_book_now";
 $id = $_REQUEST['id'];
     //print_r($_POST['id']);
 $sql2 = "SELECT * FROM bk_book_now WHERE id='".$id."'";
 $get_images = mysqli_query($db->conn,$sql2) or die(mysqli_connect_errno()."Data cannot inserted");
 $images = mysqli_fetch_assoc($get_images);
 unlink("../gallery/".$images['image_name']);
 unlink("../gallery/thumb/".$images['image_name']);

 if($db->delete_records($table,$id) == true)
 {
  $_SESSION['order'] = "Record Deleted Successfully.";
}
else
{
  $_SESSION['order'] = "Record couldn't be Deletd. Please try again.";  
}  

echo "<script>window.location.href='../quote_order.php?subview=list'</script>";         
}  