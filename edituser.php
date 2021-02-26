
<?php 
   include('connect.php');
   if (!isset($_SESSION['user_id'])) {
       header('Location:login.php');
   }
    include('header.php');
    $id = $_REQUEST['id'];
 ?>
<div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Library Management System</a>
            </li>
            <li class="breadcrumb-item active">Edit User</li>
        </ol>
        <a class="btn btn-default no-bg micheal_btn float-right" data-toggle="modal" data-target=".bs-example-modal-sm">
    <font color="black"><i class="fa fa-sign-out"></i> Log Out</font></a>
        <br>
        <?php
            include('connect.php');
            $query = "SELECT * FROM users WHERE id= $id";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
                if($row['profile_path']){
                    $src = "img/".$row['profile_path'];
                } else{
                    $src = "img/profile.png";
                }
            ?>
        <form method="post" action="dbedit.php?id=<?php echo $id; ?>" enctype='multipart/form-data'>
            <div class="row">
            <div class="col-md-3">
                <div class="image__upload" id="image-upload">
                    <label for="file-input">
                        <img id="profile_pic" src="<?php echo $src ?>" />
                    </label>
                    <input id="file-input" type="file" name="profile_path" accept="image/x-png,image/gif,image/jpeg" style="cursor: pointer;  display: none" />
                </div>
            </div>
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
            </div>
        </form>
        <?php } ?>
    </div>
    <div class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header"><h4>Logout <i class="fa fa-lock"></i></h4></div>
                <div class="modal-body"><i class="fa fa-question-circle"></i> Are you sure you want to log-off?</div>
                <div class="modal-footer"><a href="logout.php" class="btn btn-primary btn-block">Logout</a></div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script src="js/app.js"></script>
</html>
