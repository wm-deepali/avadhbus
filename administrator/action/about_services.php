<?php
include("../connection.php"); 
include_once 'thumbnail.class.php';
$obj = new Thumbnail();
$date=date("YmdHis");
    $title = mysqli_real_escape_string($db->conn,$_POST['title']);
    $content = mysqli_real_escape_string($db->conn,$_POST['text']);
   
	$data = array("title"=>$title,
			         "content"=>$content,
			        
					);
	$field ="id";	 
	$id = $_REQUEST['id'];
		  if($db->update($data,'bk_about_us',$field,$id) == true)  
			{
			$_SESSION['brand'] ="About Services Update Success Fully.";
			 echo "<script>window.location.href='../about_services.php?subview=update&id=".$id."'</script>"; 	 
			}
		  else
		    {
			$_SESSION['brand'] ="About Services couldn't be updated.Please try again.";
			 echo "<script>window.location.href='../about_services.php?subview=update&id=".$id."'</script>"; 	 
			}	
			?>		
     