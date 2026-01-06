<?php 
include("header.php");
//$_HEADING = "Update Book Order Profile";   
$query = "SELECT * FROM bk_book_now";
$get_offer =  mysqli_query($db->conn,$query) or die(mysqli_connect_errno()."Data cannot inserted");
   // $offer = mysqli_fetch_assoc($get_offer);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage Book Order
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item"><i class="fa fa-cog"></i> Book Order Management</li>
      <li class="breadcrumb-item active">View Book Order</li>
    </ol>
  </section>

  <div class="box">
   <?php if($_SESSION['order']!=""){?>
   <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo $_SESSION['order'];$_SESSION['order']="";?>
  </div>
  <?php } ?>
  <?php if($_SESSION['order']!=""){?>
  <div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo $_SESSION['order'];$_SESSION['order']="";?>
  </div>
  <?php } ?>
  <!-- /.box-header -->
  <div class="box-body">
   <div class="table-rs">
    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
      <thead>
        <tr>
          <th>Sr. No.</th>
          <th>Name</th>
          <th>Email ID</th>
          <th>Mobile Number</th>
           <th>Advertise Name</th>
          <th>Query</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1; while($row = mysqli_fetch_assoc($get_offer)){?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['email']?></td>
          <td><?php echo $row['mob']?></td>
           <td><?php echo $row['advertise']?></td>
          <td><?php echo $row['content']?></td>
          <td>
           <ul class="actions">
            <li> <a href="action/quote_order.php?subview=delete&id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a></li>
            <li> 
            </li>
          </ul>
        </td>
      </tr>
      <?php } ?>
    </tbody>
    <tfoot>
      <tr>
       <th>Sr. No.</th>
          <th>Name</th>
          <th>Email ID</th>
          <th>Mobile Number</th>
           <th>Advertise Name</th>
          <th>Query</th>
          <th>Action</th>
      </tr>
    </tfoot>
  </table>
</div>  
</div>
<!-- /.box-body -->
</div>

</div>
</div>
</div>
<?php include('footer.php'); ?>
