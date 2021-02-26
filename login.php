<?php
include("connect.php");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (isset($_POST['Submit'])) {
    $myusername = mysqli_real_escape_string($conn, $_POST['email']);
    echo $myusername;
	$mypassword =(mysqli_real_escape_string($conn, $_POST['password']));
    echo $mypassword;
    $query = "SELECT * FROM users WHERE email = '$myusername' and password = '$mypassword'";
    $run = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($run);
    $count = mysqli_num_rows($run);
    if ($count == 1) {
        $_SESSION['user_id'] = $row['id'];
        echo "login Success";
        header('location:index.php');
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
include('header.php'); 
?>
<body>
    <div id="login">
        <br><br><center><h1 style="color:#17A2bb">Welcome</h1></center><br><br>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login.php" method="post">

                            <div class="form-group">
                                <label for="email"d>Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="Submit" class="btn btn-info btn-md">
                            </div>
        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

