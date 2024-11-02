<?php
include 'connection.php';
$id = $_GET['updateid'];

$sql = "select * from `crud` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id=$id, username='$username', email='$email', mobile='$mobile', password='$password' where id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        //header('location:display.php');
        header('location:display.php');
    } else {
        die('Data update failed: ' . mysqli_error($con));
    }
}



?>







<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud operations</title>
</head>

<body>
    <div class="container">
        <form method="post">
            <div class="form-group text-center mt-5">
                <label>Username</label>
                <input type="text" class="form-control text-center" placeholder="Enter username" name="username"
                    autocomplete="off" value=<?php echo $username; ?>>
            </div>
            <div class="form-group text-center mt-5">
                <label>Email</label>
                <input type="email" class="form-control text-center" placeholder="Enter email" name="email"
                    autocomplete="off" value=<?php echo $email; ?>>
            </div>
            <div class="form-group text-center mt-5">
                <label>Phone number</label>
                <input type="tel" class="form-control text-center" placeholder="Enter phone number" name="mobile"
                    autocomplete="off" value=<?php echo $mobile; ?>>
            </div>
            <div class="form-group text-center mt-5">
                <label>Password</label>
                <input type="password" class="form-control text-center" placeholder="Enter password" name="password"
                    autocomplete="off" value=<?php echo $password; ?>>
            </div>


            <button type="submit" class="btn btn-primary mt-5" name="update">Update</button>
        </form>
    </div>
</body>

</html>