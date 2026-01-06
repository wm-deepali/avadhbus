<?php include('administrator/connection.php'); ?>
 <?php
        if(isset($_POST['submit'])){
          $name=$_POST['name'];
          $email=$_POST['email'];
          $destinationfrom=$_POST['destinationfrom'];
          $destinationto=$_POST['destinationto'];
          $mobile=$_POST['mobile'];
          $subject=$_POST['subject'];
          $message=$_POST['message'];
          $sql = "INSERT INTO bk_home_enquiry(name, email, destination, destinationto, mobile, subject, message)
          VALUES ('$name','$email','$destinationfrom','$destinationto','$mobile','$subject','$message')";
          //echo $sql; exit();
           mysqli_query($db->conn,$sql);
          $_SESSION['aboutequiry'] = "<center><p style='color: red;'>Thank You For Submit Enuiry  Detail</p></center>"; 
        }
        header('Location:about-us.php');
        ?>
