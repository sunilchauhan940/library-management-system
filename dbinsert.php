<?php
include 'connect.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$birth_date = mysqli_real_escape_string($conn, $_POST['birth_date']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
//$pass = md5($password);
$sql = "SELECT id FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    echo '<script type="text/javascript">alert("Email already used before");</script>';
    exit();
} else {
    $sql = "INSERT INTO `users` (`name`, `email`, `mobile`, `birth_date`, `address`, `gender`, `password`) VALUES ('$name', '$email',$mobile,'$birth_date','$address', '$gender','$password');";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registered Successfully');</script>";
        header('Location:index.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        header('Location:adduser.php');
    }
}
mysqli_close($conn);

?>