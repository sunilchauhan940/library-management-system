<?php
    include "controllers/conn.php";
    if(isset($_POST['submit'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $birth_date = $_POST["birth_date"];
        $address = $_POST["address"];
        $gender = $_POST["gender"];
        $password = $_POST["password"];

        $mysqli->query("INSERT INTO librarians (name,email,mobile,birth_date,address,gender,password) VALUES ('$name','$email','$mobile','$birth_date','$address','$gender','$password')") or die($mysqli->error);
        echo "<script>alert('Insert sucessfully');</script>";
    }
    
    $result = $mysqli->query("select * from librarians") or die($mysqli->error);
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>

                        <div class="card mb-4">
                            <div class="card-header">
                            <!-- <i class="fas fa-table mr-1"></i> -->
                                <b>Display Admin</b>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>BirthDate</th>
                                                <th>Address</th>
                                                <th>Gender</th>
                                                <th>Password</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>BirthDate</th>
                                                <th>Address</th>
                                                <th>Gender</th>
                                                <th>Password</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                        <?php
                                            while ($row = $result->fetch_object()):
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row->id;?></td>
                                                <td><?php echo $row->name;?></td>
                                                <td><?php echo $row->email;?></td>
                                                <td><?php echo $row->mobile;?></td>
                                                <td><?php echo $row->birth_date;?></td>
                                                <td><?php echo $row->address;?></td>
                                                <td><?php echo $row->gender;?></td>
                                                <td><?php echo $row->password;?></td>
                                                <td><a href="?page=<?php echo $_GET['page']; ?>&edit=<?php echo $row->id?>" class="btn btn-info">Edit</a></td>
                                                <td><a href="<a href=view/delete_data.php?id=<?php $row->id ?>" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            <?php
                                                endwhile;
                                            ?>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php
                    include "footer.php";   
                ?>
            </div>