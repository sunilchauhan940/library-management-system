<?php include('header.php'); ?>
<div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Library Management System</a>
            </li>
            <li class="breadcrumb-item active">Edit User</li>
        </ol>
        <br>
        <form method="post" action="adduser.php">
            <div class="col-md-8">
                <h2><i class="fa fa-user"></i>  Edit User</h2>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" id="name" minlength="2" required="" class="form-control" placeholder="Full Name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email_id" class="form-control" required="" name="email_id" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone no</label>
                            <input type="tel"  id="phone_no" class="form-control" required="" name="phone_no" placeholder="Phone no">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gender :</label>
                            <select name="gender" class="form-control" required="">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6"-->
                        <div class="form-group">
                            <label>Birth Date</label>
                            <input type="date" id="bdate" name="birth_date" class="form-control" placeholder="Birth Date">
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit" >Edit User</button>
                <a class="btn btn-primary" href="index.php">Cancel</a> 
            </div>
        </form>
    </div>
</div>
</body>
</html>
