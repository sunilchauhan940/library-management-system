<?php
include 'connect.php';
$id = $_REQUEST['id'];
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $birth_date = mysqli_real_escape_string($conn, $_POST['birth_date']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $update = "UPDATE `users` SET `name` = '$name', `email` = '$email', `mobile` = '$mobile', `birth_date` = '$birth_date', `address` = '$address', `gender` = '$gender' WHERE `users`.`id` = $id";

    if (mysqli_query($conn, $update)) {
        header("Location:index.php");
    } else {
        echo "ERROR: Could not able to execute $update. " . mysqli_error($conn);
    }
}
?>
<?php include('header.php'); ?>
<div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Library Management System</a>
            </li>
            <li class="breadcrumb-item active">Edit User</li>
        </ol>
        <br>
        <form method="post" action="edituser.php?id=<?php echo $id; ?>">
        <?php
            $query = "SELECT * FROM users WHERE id= $id";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="col-md-8">
                <h2><i class="fa fa-user"></i>  Edit User</h2>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" minlength="2" required="" class="form-control" placeholder="Name" value=<?php echo $row['name'] ?>>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email" class="form-control" required name="email" placeholder="Email" value=<?php echo $row['email'] ?>>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone no</label>
                            <input type="tel"  id="mobile" class="form-control" required name="mobile" placeholder="Phone no" value=<?php echo $row['mobile'] ?>>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gender :</label>
                            <select name="gender" class="form-control" required>
                                <option value="">Select Gender</option>
                                <?php  
                                    if ($row['gender'] == "Male"){
                                       echo '<option value="Male"  selected="selected">Male</option>
                                        <option value="Female">Female</option>';
                                    }  else{
                                        echo '<option value="Male">Male</option>
                                        <option value="Female" selected="selected">Female</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Birth Date</label>
                            <input type="date" id="bdate" name="birth_date" class="form-control" placeholder="Birth Date" required value=<?php echo $row['birth_date'] ?> >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" id="address" name="address" rows="2" required><?php echo $row['address'] ?></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit" >Edit User</button>
                <a class="btn btn-primary" href="index.php">Cancel</a> 
            </div>
        </form>
        <?php } ?>
    </div>
</div>
</body>
</html>
