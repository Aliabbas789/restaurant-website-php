<?php include('partials/menu.php'); ?>
<?php include('partials/constants.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>
        <br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter your Name">
                    </td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                    </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Your Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include('partials/footer.php'); ?>

<?php
// Process the value from form and save it in database
// Check whether the button is clciked or not

    if(isset($_POST['submit'])){
        // Button clicked
        // get the data from the form

        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //Password encrypted with MD5

        $sql = "INSERT INTO tbl_admin SET
            full_name = $full_name,
            username = $username,
            passwod = $password";

        // Execute query and save data in database

        // $res = msqli_query($conn,$sql) or die(mysqli_error());
    }
    else{
        // Button not clicked
    }

?>