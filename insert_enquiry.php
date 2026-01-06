<?php include('administrator/connection.php'); ?>
 <?php
        if(isset($_POST['submit'])){
          $name=$_POST['name'];
          $email=$_POST['email'];
          $mobile=$_POST['mobile'];
          $query=$_POST['query'];
          $sql = "INSERT INTO bk_h_enquiry(name, mobile, email, query)
          VALUES ('$name','$mobile','$email','$query')";
          mysqli_query($db->conn,$sql);
          $_SESSION['henquiry'] = "<center><p style='color: white;'>Thank You For Submit  Enquiry </p></center>";
        }
        header('Location:index.php');
        ?>
