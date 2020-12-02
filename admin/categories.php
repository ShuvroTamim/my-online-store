<!DOCTYPE html>
<html>
<?php
  include('adminpartials/head.php');
  include('adminpartials/session.php');
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
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <form role="form" action="cathandler.php" method="POST">
                    <h2>Categories</h2>
                    <div class="box-body">
                        <div class="form-group">
                          <label for="category">Categories</label>
                          <input type="text" class="form-control" name="name" id="category" placeholder="Enter Category">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
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
