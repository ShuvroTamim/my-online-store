<?php
    include('../partials/connect.php');
    if (isset($_POST['update'])) {
        $newid = $_POST['form_id'];
        $newname = $_POST['name'];
        $newprice = $_POST['price'];
        $newdescription = $_POST['description'];
        $newcategory = $_POST['category'];

        $target = "uploads/";
        $file_path = $target.basename($_FILES['file']['name']);
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_store = "uploads/" . $file_name;

        move_uploaded_file($file_tmp, $file_store);

        $sql = "UPDATE products SET `name`='$newname', `price`='$newprice', 
        `description`='$newdescription', `category_id`=$newcategory, `picture`='$file_path' WHERE id=$newid";

        if (mysqli_query($conn, $sql)) {
            header('location: productsshow.php');
        }else {
            header('location: adminindex.php');
        }
    }
?>