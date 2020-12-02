<!DOCTYPE html>
<html>
<?php
  include('adminpartials/head.php');
//   include('adminpartials/session.php');
  include('../partials/connect.php');
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
                <form role="form" action="proupdatehandler.php" method="POST" enctype="multipart/form-data">
                <?php
                    $newid = $_GET['up_id'];
                    $sql = "SELECT * FROM products WHERE id=$newid";
                    $results = $conn->query($sql);
                    $final = $results->fetch_assoc();
                ?>
                    <h2>Products</h2>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Product Name" value="<?php echo $final['name'];?>">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="<?php echo $final['price'];?>">
                        </div>
                        <div class="form-group">
                            <label for="picture">File input</label>
                            <input type="file" name="file" id="picture" value="<?php echo $final['picture'];?>">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="6" placeholder="Description Here.."><?php echo $final['description'];?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" name="category" id="category"  value="<?php echo $final['category'];?>">
                                <?php
                                    $cat = "SELECT * FROM categories";
                                    $results = mysqli_query($conn, $cat);
                                    while ($row = mysqli_fetch_assoc($results)) {
                                    echo "<option value=" . $row['id']. ">" .$row['name'] . "</option>";
                                  }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <input type="hidden" name="form_id" value="<?php echo $final['id']?>">
                        <button type="submit" class="btn btn-primary" name="update">Submit</button>
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
