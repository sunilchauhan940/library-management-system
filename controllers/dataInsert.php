<?php
    include "conn.php";
    if(isset($_POST['submit'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $birth_date = $_POST["birth_date"];
        $address = $_POST["address"];
        $gender = $_POST["gender"];
        $password = $_POST["password"];

        $mysqli->query("INSERT INTO librarians (name,email,mobile,birth_date,address,gender,password) VALUES ('$name','$email','$mobile','$birth_date','$address','$gender','$password')") or die($mysqli->error);
        echo "<script>alert('Insert sucessfully');</script>";
    }
?>