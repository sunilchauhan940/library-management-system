<?php
    include "../../controllers/conn.php";

    $id = $_REQUEST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $birth_date = $_POST["birth_date"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    
    $filename = $_FILES["photo"]["name"]; 
    $tempname = $_FILES["photo"]["tmp_name"];     
    $folder = "images/".$filename;  
                
    if (move_uploaded_file($tempname, $folder))  { 
        echo "<script>alert('Image uploaded successfully');</script>"; 
    }else{ 
        echo "<script>alert('Image uploaded fail');</script>";
    } 

    $password = $_POST["password"];

    $status = $mysqli->query("update librarians set name='$name',email='$email',mobile='$mobile',birth_date='$birth_date',address='$address',gender='$gender',image='$filename',password='$password' WHERE id =$id") or die($mysqli->error);

    if ($status) {
        header("location: ../../display_data.php");
    }
?>