<?php
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'library');
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        $adminid = $_SESSION['user_id'];
    }
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>