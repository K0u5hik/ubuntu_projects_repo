<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql = "update `crud` set id=$id,name='$name',email='$email',phone='$phone',password='$password' where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "Data updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Crud operation</title>
</head>
<body>
  <div class="container my-5">
    <h1>Update Data...</h1>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" autocomplete = "off">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" autocomplete = "off">
        </div>
        <div class="mb-3">
            <label class="form-label">Mobile</label>
            <input type="text" class="form-control" name="phone" autocomplete = "off">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="password" autocomplete = "off">
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
  </div>
</body>
</html>