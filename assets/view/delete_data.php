<?php
    
        $id = $_GET['delete'];

        $status = $mysqli->query("DELETE FROM `librarians` WHERE $id =`id`") or die($mysqli->error);

        if ($status) {
            header("location: /structure/?page={$_GET['page']}");
        }
?>