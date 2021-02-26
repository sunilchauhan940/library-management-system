<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh" content="">
    <title>Admin</title>
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script language="javascript">
    </script>
</head>

<body>
    <?php
        include "assets/view/header.php";
        include "assets/view/sidebar.php";
        include "assets/view/display_page.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script language="javascript" src="controllers/app.js"></script>
</body>

</html>
