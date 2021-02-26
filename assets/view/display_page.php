<?php
    include "controllers/conn.php";    
    $result = $mysqli->query("select * from librarians") or die($mysqli->error);
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>

                        <div class="card mb-4">
                            <div class="card-header">
                            <i class="fas fa-chalkboard-teacher"></i>
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
                                                <th>Photo</th>
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
                                                <th>Photo</th>
                                                <th>Password</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                        <?php
                                            while ($row = $result->fetch_object()):
                                                $imageurl = 'assets/view/images/'.$row->image;
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
                                                <td><img src="<?php echo $imageurl;?>" alt="image" width="120" height="150"></td>
                                                <td><?php echo $row->password;?></td>
                                                <td><a href="update_data.php?id=<?php echo $row->id ?>" class="btn btn-info">Edit</a></td>
                                                <td><a href="assets/view/delete_data.php?id=<?php echo $row->id ?>" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            <?php
                                                endwhile;
                                            ?>
                                            </tbody>
                                    </table>
                                </div>
                                <a href="#popupDialog" data-rel="popup" data-position-to="window" data-transition="pop" class="btn btn-danger ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-delete ui-btn-icon-left ui-btn-b">Delete</a>
                                <div data-role="popup" id="popupDialog" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px;">
                                    <div data-role="header" data-theme="a">
                                        <h1>Delete Admin Data?</h1>
                                    </div>
                                    <div role="main" class="ui-content">
                                        <h3 class="ui-title">Are you sure you want to delete this Admin data?</h3>
                                        <p>This action cannot be undone.</p>
                                        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-rel="back">Cancel</a>
                                        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-rel="back" data-transition="flow">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php
                    include "footer.php";   
                ?>
            </div>