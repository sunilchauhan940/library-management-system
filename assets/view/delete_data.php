<?php
    include "../../controllers/conn.php";

    $id = $_REQUEST['id'];

    $status = $mysqli->query("DELETE FROM `librarians` WHERE $id =`id`") or die($mysqli->error);

    if ($status) {
        header("location: ../../display_data.php");
    }
?>