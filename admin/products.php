<!DOCTYPE html>
<html>
<?php
  include('adminpartials/head.php');
  include('adminpartials/session.php');
  include('../partials/connect.php');
  $cat = "SELECT * FROM categories";
  $results = mysqli_query($conn, $cat);
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
                <form role="form" action="producthandler.php" method="POST" enctype="multipart/form-data">
                    <h2>Products</h2>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Product Name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="picture">File input</label>
                            <input type="file" name="file" id="picture">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="6" placeholder="Description Here.."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" name="category" id="category">
                                <?php
                                    while ($row = mysqli_fetch_assoc($results)) {
                                    echo "<option value=" . $row['id']. ">" .$row['name'] . "</option>";
                                  }
                                ?>
                            </select>
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
