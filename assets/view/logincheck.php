<?php
    include "../../controllers/conn.php";
    session_start();
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = $mysqli->query("select id from librarians where email='$email' and password='$password'") or die($mysqli->error);
        
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            $_SESSION['admin'] = $email;
            header("location: ../../index.php");
        }
        else{
            header("location: ../../login.php");
        }
    }
?>