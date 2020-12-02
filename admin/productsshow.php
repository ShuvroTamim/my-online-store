<!DOCTYPE html>
<html>
<?php
  include('adminpartials/head.php');
//   include('adminpartials/session.php');
  include('../partials/connect.php');
  $sql = "SELECT * FROM products";
  $results = $conn->query($sql);
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
            <div class="col-sm-9">
                <?php
                    while ($final = $results->fetch_assoc()) { ?>
                        <a href="proshow.php?pro_id=<?php echo $final['id']?>">
                            <h3><?php echo $final['id']?> : <?php echo $final['name']?></h3>
                        </a>
                        <a href="proupdate.php?up_id=<?php echo $final['id']?>">
                            <button class='btn btn-primary'>Update</button><hr>
                        </a>
                <?php } ?>
            </div>
            <div class="col-sm-3">
                
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
