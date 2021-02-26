<?php
    include "../../controllers/conn.php";

    $id = $_REQUEST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $birth_date = $_POST["birth_date"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    $status = $mysqli->query("update librarians set name='$name',email='$email',mobile='$mobile',birth_date='$birth_date',address='$address',gender='$gender',password='$password' WHERE id =$id") or die($mysqli->error);

    if ($status) {
        header("location: ../../display_data.php");
    }
?>