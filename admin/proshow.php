<!DOCTYPE html>
<html>
<?php
  include('adminpartials/head.php');
//   include('adminpartials/session.php');
  include('../partials/connect.php');
  $id = $_GET['pro_id'];
  $sql = "SELECT * FROM products WHERE id = $id";
  $results = $conn->query($sql);
  $final = $results->fetch_assoc();
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php
  include('adminpartials/header.php');
  include('adminpartials/aside.php');
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-8">
                <h3>Name: <?php echo $final['name']?></h3><hr>
                <h3>Price: <?php echo $final['price']?></h3><hr>
                <h4><b>Description:</b> <?php echo $final['description']?></h4><hr>
                <img src="<?php echo $final['picture']?>" alt="No File" style="width:150px; height:150px;">
            </div>
            <div class="col-sm-4">
                
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include('adminpartials/footer.php');
  ?>
</body>
</html>
