<?php
    include "../../controllers/conn.php";

    if(isset($_POST['submit'])){
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

        $mysqli->query("INSERT INTO librarians (name,email,mobile,birth_date,address,gender,image,password) VALUES ('$name','$email','$mobile','$birth_date','$address','$gender','$filename','$password')") or die($mysqli->error);
        echo "<script>alert('Insert sucessfully');</script>";
    }

    header("location: ../../display_data.php");
?>
    