<?php include('connect.php');
    include('header.php'); 
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
    <a class="btn btn-dark" href="adduser.php">Add User</a> 
    <br><br>
    <div class="card mb-3">
        <div class="card-header">
            <div class="table-responsive">
                <div class="container">
                    <input class="form-control mb-4" id="search-Input" type="text" placeholder="Search User">
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
                    <center>
                        <?php
                        $query = "SELECT count(*) as count FROM users";
                        $result = mysqli_query($conn, $query);
                        $num_users = mysqli_fetch_assoc($result)['count'];
                        if ($num_users == 0) {
                            echo "No Users Found";
                        }
                        ?>
                    </center>
                </div>
            </div>
        </div>
    </div>
  
</div>
<script>
    $(document).ready(function () {
        $("#search-Input").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>