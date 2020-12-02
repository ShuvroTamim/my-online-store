<?php
    session_start();
    include("adminpartials/head.php");
    include("../partials/connect.php");

    if (isset($_POST['login'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM admins WHERE `username` = '$email' and `password` = '$password'";
      $data = $conn->query($sql);
      $results = $data->fetch_assoc();

      $_SESSION['email'] = $results['username'];
      $_SESSION['password'] = $results['password'];

      if ($email = $results['username'] and $password = $results['password']) {
        header('location: adminindex.php');
      }else {
        header('location: adminlogin.php');
      }
    }
?>

<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Admin Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="adminlogin.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" name="login">Log in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
    <div class="col-sm-4"></div>
</div>