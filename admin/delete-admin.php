<?php
    // Get the id to delete the admin
    include('../config/constants.php'); 
    $id = $_GET['id'];
    // Create the SQL query to delete the row based on id

    $sql = "DELETE FROM tbl_admin where id=$id";

    // Execute the query

    $res = mysqli_query($conn,$sql);

    if($res==TRUE){
        $_SESSION['delete'] = "<div class='success'>Admin deleted successfully</div>";
        // Redirect to manage-admin page
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else{
        // echo "Failed to delete Admin";
        $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');

    }


?>