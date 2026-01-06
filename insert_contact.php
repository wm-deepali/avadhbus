<?php include('administrator/connection.php'); ?>
 <?php
        if(isset($_POST['submit'])){
          $name=$_POST['name'];
          $email=$_POST['email'];
          $mobile=$_POST['mobile'];
          $message=$_POST['message'];
          $sql = "INSERT INTO bk_contact(name, email, message, mobile)
          VALUES ('$name','$email','$message','$mobile')";
           if (empty($_SESSION['captcha']) || trim(strtolower($_REQUEST['captcha'])) != $_SESSION['captcha']) 
  {
       // $note= 'Please enter valid text';
       $_SESSION['content']="Please enter valid Captcha.";
    echo "<script>window.location.href='contact-us.php'</script>";
    $_SESSION['content'] = "<center><p style='color: red;'>Error </p></center>";
    } 
    else{
           mysqli_query($db->conn,$sql);
          $_SESSION['content'] = "<center><p style='color: red;'>Thank You For Submit Contact Detail</p></center>";
        } 
        }
        header('Location:contact-us.php');
        ?>
