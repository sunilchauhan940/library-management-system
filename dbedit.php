<?php
include 'connect.php';
$id = $_REQUEST['id'];

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$birth_date = mysqli_real_escape_string($conn, $_POST['birth_date']);
$address = mysqli_real_escape_string($conn, $_POST['address']);

$update = "UPDATE `users` SET `name` = '$name', `email` = '$email', `mobile` = '$mobile', `birth_date` = '$birth_date', `address` = '$address', `gender` = '$gender' WHERE `users`.`id` = $id";

if (mysqli_query($conn, $update)) {
    header("Location:index.php");
} else {
    echo "ERROR: Could not able to execute $update. " . mysqli_error($conn);
}

?>