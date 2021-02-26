<?php
      include "controllers/conn.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="">
        <title>Admin</title>
        <link href="assets/css/styles.css" rel="stylesheet" />
        <script language="javascript">
        </script>
        <style>
            .error{
                color:red;
            }
        </style>
    </head>

    <body>
        <?php
            include "assets/view/header.php";
            include "assets/view/sidebar.php";
            include "assets/view/main.php";
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <script language="javascript" src="controllers/app.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    </body>
</html>