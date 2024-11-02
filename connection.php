<?php

$con = new mysqli('localhost', 'root', '', 'crudoperations');

if (!$con) {
    die('Database connection failed: ' . mysqli_connect_error($con));
}
