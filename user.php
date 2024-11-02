<?php
$userExist = 0;

include 'connection.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud`(username, email, mobile, password) values ('$username', '$email', '$mobile', '$password')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:display.php');
    } else {
        die('Data entry failed: ' . mysqli_error($con));
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
                <input type="text" class="form-control text-center" placeholder="Enter username" name="username">
            </div>
            <div class="form-group text-center mt-5">
                <label>Email</label>
                <input type="email" class="form-control text-center" placeholder="Enter email" name="email">
            </div>
            <div class="form-group text-center mt-5">
                <label>Phone number</label>
                <input type="tel" class="form-control text-center" placeholder="Enter phone number" name="mobile">
            </div>
            <div class="form-group text-center mt-5">
                <label>Password</label>
                <input type="password" class="form-control text-center" placeholder="Enter password" name="password">
            </div>
            <button type="submit" class="btn btn-primary mt-5" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>