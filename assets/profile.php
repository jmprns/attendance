<?php

include 'inc/session.php';

include 'inc/utilities.php';

include 'inc/profile_process.php';




?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WUP  | Profile </title>

    <link rel="icon" type="icon" href="img/favicon.jpg">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/plugins/sweetalert/sweetalert.css">

</head>

<body>
    <div id="wrapper">


    <?php include "inc/sidebar.php"; ?>


        <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">

            <?php include 'inc/navbar.php'; ?>

        </div>

            <div class="wrapper wrapper-content animated fadeIn">
        
            <div class="row">
            <div class="col-lg-3"></div>

                <div class="col-lg-5">
                        <div class="widget-head-color-box navy-bg p-lg text-center">
                            <a data-toggle="modal" data-target="#myModalEditAvatar"><img src="img/<?php echo $fetchImg; ?>" class="img-circle circle-border m-b-md grayscale" alt="profile" style="width:200px; height:200px; "></a>
                            <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                <?php echo $fetchFirst." ".$fetchLast; ?>
                            </h2>
                                <small><?php echo $fetchEmail; ?></small>
                            </div>
                            
                            
                        </div>
                        <div class="widget-text-box">
                            <h4 class="media-heading"><?php echo $fetchFirst." ".$fetchLast; ?></h4>
                            <p><?php echo $fetchNum; ?> - <?php if($fetchAcc == 0){echo "Administrator";}else{echo "System User";} ?></p>
                            
                            <div class="text-right">
                                <?php if($fetchAcc == 0){echo '<a class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModalAdd""><i class="fa fa-plus"></i> Add a system user </a>';} ?>
                                <a class="btn btn-xs btn-warning" data-toggle="modal" data-target="#myModalEdit"><i class="fa fa-edit"></i> Edit </a>
                                <a href="logout.php?session_id=<?php echo $session_id; ?>" class="btn btn-xs btn-primary"><i class="fa fa-sign-out"></i> Log out</a>
                            </div>
                        </div>
                </div>
            </div>
            <br><br><br>




            

            
            



            </div>

        <div class="footer">
            <?php include 'inc/footer.php'; ?>
        </div>

        </div>

        
    </div>


    <!-- MODAL ADD ADMIN -->

    <div class="modal inmodal" id="myModalAdd" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content animated fadeIn">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Add form <small>Please input the correct value in the corresponding field.</small></h5>
                                        <div class="ibox-tools">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-lg-12 b-r">
                                            <?php include 'inc/profile_process.php'; ?>
                                                <form role="form" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Name</label> 
                                                        <div class="row">
                                                            <div class="col-md-4"><input type="text" name="addF" placeholder="First Name" class="form-control" required></div>
                                                            <div class="col-md-4"><input type="text" name="addM" placeholder="Middle Name" class="form-control"></div>
                                                            <div class="col-md-4"><input type="text" name="addL" placeholder="Last Name" class="form-control" required></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        
                                                        <div class="row">
                                                            <div class="col-md-4"><label>Email</label> <input type="email" name="addE" placeholder="Email" class="form-control" required></div>
                                                            <div class="col-md-4"><label>Password</label> <input type="text" name="addP" placeholder="Password" class="form-control" required></div>
                                                            <div class="col-md-4"><label>Position</label> <input type="text" name="addPs" placeholder="Position (e.g Dean)" class="form-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4"><label>Phone Number</label> <input type="text" name="addNum" placeholder="Phone Number" class="form-control" required></div>
                                                            <div class="col-md-6">
                                                                <label>Avatar  </label><small>  (Upload one picture)</small>
                                                                <input type="file" name="file" class="form-control filestyle" data-buttonBefore="true" multiple="multiple" required>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    
                                                    <div>
                                                        <button name="addBtn" class="btn btn-primary pull-right m-t-n-xs" type="submit">
                                                            <strong>Save</strong>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>                  
                </div>
            </div>
        </div>



    <!-- MODAL EDIT ADMIN -->

    <div class="modal inmodal" id="myModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content animated fadeIn">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Edit form <small>Please input the correct value in the corresponding field.</small></h5>
                                        <div class="ibox-tools">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-lg-12 b-r">
                                                <form role="form" method="POST">
                                                    <div class="form-group">
                                                        <label>Name</label> 
                                                        <div class="row">
                                                            <div class="col-md-4"><input type="text" placeholder="First Name" name="editFname" class="form-control" value="<?php echo $fetchFirst; ?>"></div>
                                                            <div class="col-md-4"><input type="text" placeholder="Middle Name" name="editMname" class="form-control" value="<?php echo $fetchMid; ?>"></div>
                                                            <div class="col-md-4"><input type="text" placeholder="Last Name" name="editLname" class="form-control" value="<?php echo $fetchLast; ?>"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        
                                                        <div class="row">
                                                            <div class="col-md-4"><label>Email</label> <input type="email" placeholder="Email Address"  name="editEmail" class="form-control" value="<?php echo $fetchEmail; ?>"></div>
                                                            <div class="col-md-4"><label>Password</label> <input type="text" placeholder="Password" maxlength="28" name="editPwd" class="form-control" value="<?php echo $fetchPwd; ?>"></div>
                                                            <div class="col-md-4"><label>Position</label> <input type="text" placeholder="Position"  name="editPos" class="form-control" value="<?php echo $fetchPos; ?>"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Phone Number  </label>
                                                                <input type="text" class="form-control" placeholder="Phone Number" name="editNum" value="<?php echo $fetchNum; ?>">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    
                                                    <div>
                                                        <button class="btn btn-primary pull-right m-t-n-xs" type="submit" name="editBtn">
                                                            <strong>Save</strong>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>                  
                </div>
            </div>
        </div>


        <!-- MODAL EDIT AVATAR -->



        <div class="modal inmodal" id="myModalEditAvatar" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xs">
            <div class="modal-content animated fadeIn">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Edit form <small>Please input the correct value in the corresponding field.</small></h5>
                                        <div class="ibox-tools">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-lg-12 b-r">
                                                <form role="form" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Avatar  </label><small>  (Upload one picture)</small>
                                                                <input type="file" name="file" class="form-control filestyle" data-buttonBefore="true" multiple="multiple">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="hr-line-dashed"></div>
                                                    
                                                    <div>
                                                        <button class="btn btn-primary pull-right m-t-n-xs" type="submit" name="btnImg">
                                                            <strong>Save</strong>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>                  
                </div>
            </div>
        </div>





    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
    <script src="js/select.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/script.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- SWEET ALERT -->
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>

<?php

include 'inc/sweetalert_handling.php';

?>


</body>
</html>
