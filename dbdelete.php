<?php

include 'connect.php';
$id = $_REQUEST['id'];
$delete = "DELETE FROM users WHERE id='$id'";
if (mysqli_query($conn, $delete)) {
    echo 'Record deleted successfully';
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
header('Location:index.php');
?>