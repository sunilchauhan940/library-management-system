<?php
    include "controllers/conn.php";
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>

                        <div class="card mb-4">
                            <div class="card-header">
                            <!-- <i class="fas fa-table mr-1"></i> -->
                                <b>Add Admin</b>
                            </div>
                            <div class="card-body">
                                <form method="post" id="addform" action="assets/view/dataInsert.php" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-xl-3">Name<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter Name..." value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">Email<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <input name="email" type="text" class="form-control" id="email" placeholder="Enter Email..." value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">Mobile<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <input name="mobile" type="text" class="form-control" id="mobile" placeholder="Enter Mobile..." value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">BirthDate<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <input name="birth_date" type="date" class="form-control" id="birth_date" placeholder="" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">Address<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <textarea class="textarea" id="address" placeholder="Enter Address..." name= "address" style="width: 300%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">Gender<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <select class="form-control" name="gender" id="gender">
                                                    <option value="male">MALE</option>
                                                    <option value="female">FEMALE</option>
                                                    <option value="other">OTHER</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">Image<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <input name="photo" type="file" id="photo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">Password<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <input name="password" type="password" class="form-control" id="password" placeholder="Enter Pasword..." value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3">Confirm Password<i class="text-danger">*</i></label>
                                        <div class="form-group">
                                            <div class="col-xs-7">
                                                <input name="c_password" type="text" class="form-control" id="C_password" placeholder="Confirm Pasword..." value="" required>
                                            </div>
                                        </div>
                                    </div>
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