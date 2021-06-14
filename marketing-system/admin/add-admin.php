<?php include('C:\xampp\htdocs\marketing-system\admin\partial\menu.php') ?>

<div class="main-content">
    <div class="wrapper">

    <form action: "" method="POST">
    <table class="tbl-30">
    <tr> 
                <td>Full Name : </td>
                <td><input type="text" name="full_name" placeholder="Enter your name"></td>
    </tr>
    <tr> 
                <td>Username : </td>
                <td><input type="text" name="username" placeholder="Enter your username"></td>
    </tr>
    <tr> 
                <td>Password : </td>
                <td><input type="password" name="password" placeholder="Enter your password"></td>
    </tr>
    <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class="btn-green">
                
                </td>
    </tr>
    <table>
    </div>
</div>

<?php include('C:\xampp\htdocs\marketing-system\admin\partial\footer.php') ?>

<?php

    if(isset($_POST['submit'])){
       

         $full_name = $_POST['full_name'];
         $username = $_POST['username'];
         $password = $_POST['password'];

     $sql = "INSERT INTO admin SET
        full_name='$full_name',
        username='$username',
        password='$password'
    ";
    

    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    if($res==TRUE){
        $_SESSION['add'] = "Admin added successfully";
        header("location: ".SETURL.'/admin/manage_admin.php');
     }
     else{
        $_SESSION['add'] = "Failed to add admin";
        header("location: ".SETURL.'/admin//add-admin.php');
     }
    } 
    

?>