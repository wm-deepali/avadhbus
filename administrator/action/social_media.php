<?php
include("../connection.php"); 
include_once 'thumbnail.class.php';
$obj = new Thumbnail();
$date=date("YmdHis");
$facebook = mysqli_real_escape_string($db->conn,$_POST['facebook']);
$vimeo = mysqli_real_escape_string($db->conn,$_POST['vimeo']);
$youtube = mysqli_real_escape_string($db->conn,$_POST['youtube']);
$twitter = mysqli_real_escape_string($db->conn,$_POST['twitter']);
$ggle = mysqli_real_escape_string($db->conn,$_POST['ggle']);
$data = array("facebook"=>$facebook,
	          "vimeo"=>$vimeo,
	          "youtube"=>$youtube,
	          "twitter"=>$twitter,
	          "ggle"=>$ggle,
	          "status"=>"active",
              "added_date"=>date("Y-m-d H:i:s", time())
	         );
$field ="id";	 
$id = $_REQUEST['id'];
if($db->update($data,'bk_social_media',$field,$id) == true)  
{

	$_SESSION['social'] ="Social Media Update Success Fully.";
	echo "<script>window.location.href='../social_media.php?subview=update&id=".$id."'</script>"; 	 
}
else
{
	$_SESSION['social'] ="Social Media couldn't be updated.Please try again.";
	echo "<script>window.location.href='../social_media.php?subview=update&id=".$id."'</script>"; 	 
}			
