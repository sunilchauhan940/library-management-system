<?php 
    include('connect.php');
    if (!isset($_SESSION['user_id'])) {
        header('Location:login.php');
    }
    include('header.php'); 
    // include('navbar.php'); 
    $query = "SELECT * FROM users;";
    $data = mysqli_query($conn, $query);
?>
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Library Management System</a>
        </li>
        <li class="breadcrumb-item active">User Details</li>
    </ol>
    <a class="btn btn-default no-bg micheal_btn float-right" data-toggle="modal" data-target=".bs-example-modal-sm">
    <font color="black"><i class="fa fa-sign-out"></i> Log Out</font></a>
    <a class="btn btn-dark" href="adduser.php">Add User</a> 
    <br><br>
    <div class="card mb-3">
        <div class="card-header">
            <div class="table-responsive">
                <div class="container">
                    <!-- <input class="form-control mb-4" id="search-Input" type="text" placeholder="Search User"> -->
                    <table  class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone no</th>
                                <th>Gender</th>
                                <th>Birth Date</th>
                                <th>Address</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php
                            while ($result = mysqli_fetch_array($data)) {
                                ?>
                                <tr>
                                    <td> <?php echo $result ['name']; ?> </td>
                                    <td><?php echo $result ['email']; ?></td>
                                    <td><?php echo $result ['mobile']; ?></td>
                                    <td><?php echo $result ['gender']; ?></td>
                                    <td><?php echo $result ['birth_date']; ?></td>
                                    <td><?php echo $result ['address']; ?></td>
                                    <td>
                                        <a href="edituser.php?id=<?php echo $result['id']; ?>" class="btn btn-primary">Edit</a>
                                    </td> 
                                    <td>
                                        <a href="dbdelete.php?id=<?php echo $result['id']; ?>" onclick="return val()" class="btn btn-primary">Delete</a>
                                    </td>      
                                </tr>
                                <?php } ?>
                                <script type="text/javascript">
                                    function val()
                                    {
                                        conf = confirm('Are you sure to delete this user?');
                                        if (conf)
                                            return true
                                        else
                                            return false
                                    }
                                </script>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
                                    <!-- Small modal -->
<!-- <button class="btn btn-primary">Logout modal</button> -->

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
<script type="text/javascript">
    $(document).ready(function () {
        $('#dataTable').dataTable({
            "iDisplayLength": 5,
	        "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
        });
    });
</script>
