<?php
    include "controllers/conn.php";
    $id = $_REQUEST['id'];
    $result = $mysqli->query("select * from librarians where id='$id'") or die($mysqli->error);
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>

                        <div class="card mb-4">
                            <div class="card-header">
                            <!-- <i class="fas fa-table mr-1"></i> -->
                                <b>Update Admin</b>
                            </div>
                            <?php
                                while ($row = $result->fetch_object()):
                            ?>
                            <div class="card-body">
                                <form method="post" action="assets/view/update.php?id=<?php echo $row->id ?>">
                                    <div class="form-group row">
                                        <label class="col-xl-3">Name<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter Name..." value="<?php echo  $row->name ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">Email<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <input name="email" type="text" class="form-control" id="" placeholder="Enter Email..." value="<?php echo  $row->email ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">Mobile<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <input name="mobile" type="text" class="form-control" id="" placeholder="Enter Mobile..." value="<?php echo $row->mobile ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">BirthDate<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <input name="birth_date" type="date" class="form-control" id="" placeholder="" value="<?php echo  $row->birth_date ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">Address<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <textarea class="textarea" placeholder="Enter Address..." name= "address" style="width: 300%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo  $row->address ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">Gender<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <select class="form-control" name="gender">
                                                    <option value="male">MALE</option>
                                                    <option value="female">FEMALE</option>
                                                    <option value="other">OTHER</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">Password<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <input name="password" type="text" class="form-control" id="" placeholder="Enter Pasword..." value="<?php echo  $row->password ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile ?>
                                    <div class="text-center">
                                        <div class="col-xl-8">
                                            <input type="submit" id="add" class="btn btn-lg btn-success" value="Save" name="submit">
                                            <input type="reset" class="btn btn-lg btn-danger" name="Reset"/>                                
                                        </div>   
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <?php
                    include "footer.php";   
                ?>
            </div>