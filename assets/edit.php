 <?php 

include 'inc/session.php';
include 'inc/utilities.php';
include 'inc/edit_process.php';


?>
<!DOCTYPE html> 
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WUP  | Edit </title>

    <link rel="icon" type="icon" href="img/favicon.jpg">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

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
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Fill out the form <small>Fill the form with the correct corresponding values.</small></h5>
                        
                        </div>
                        <div class="ibox-content">
                            <form method="POST" enctype="multipart/form-data" class="form-horizontal">

                                <div class="form-group"><label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-4"><input type="text" value="<?php echo $fname; ?>" name="fname" placeholder="First Name" class="form-control" required></div>
                                            <div class="col-md-4"><input type="text" value="<?php echo $lname; ?>" name="lname" placeholder="Last Name" class="form-control" required></div>
                                            <div class="col-md-4"><input type="text" value="<?php echo $mname; ?>" name="mname" placeholder="Middle Name" class="form-control"></div>
                                        </div>
                                    </div> 
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Credentials</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-4"><input type="text" value="<?php echo $card; ?>" name="idcard" class="form-control" placeholder="ID Number" required></div>
                                            <div class="col-md-4"><input type="text" value="<?php echo $barcode; ?>" name="barcode" class="form-control" placeholder="Barcode Number" required></div>
                                            <div class="col-md-4"><input type="number" value="<?php echo $cpnum; ?>" name="cpnum" class="form-control" placeholder="Phone Number" required></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                
                                <div class="form-group"><label class="col-sm-2 control-label">Department</label>

                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="faculty" id="department">
                                        <option>JHS</option>
                                        <option>ABM</option>
                                        <option>GAS</option>
                                        <option>HUMMS</option>
                                        <option>STEM</option>
                                        <option>BSBA</option>
                                        <option>BSCS</option>
                                        <option>BEED</option>
                                        <option>BSA</option>
                                        <option>CCJE</option>
                                        <option>FACULTY</option>
                                        <option>GUARD</option>
                                        </select>
                                    </div>
                                </div>

                                  <div class="form-group"><label class="col-sm-2 control-label">Grade/Year</label>

                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="year" id="depyear">
                                        <option>G7</option>
                                        <option>G8</option>
                                        <option>G9</option>
                                        <option>G10</option>
                                        
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-warning" type="reset">Reset</button>
                                        <button class="btn btn-primary" type="submit" name="btnEdit">Save</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        


            </div>

        <div class="footer">
            <?php include 'inc/footer.php'; ?>
        </div>

        </div>

        
    </div>


    <!-- MODAL TRUNCATE -->

    <div class="modal inmodal" id="myModalDelete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content animated fadeIn">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Action</h5>
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
                                                        <label>Are you sure to truncate the data? This cant be undone.</label> 
                                                          <div class="hr-line-dashed"></div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button class="btn btn-danger btn-block m-t-n-xs" name="btnTruncate" type="submit">
                                                                    <strong>TRUNCATE</strong>
                                                                </button>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            
                                                  
                                                    
                                                    <div>
                                                        
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
    <script src="js/select.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/script.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    
    <script src="js/plugins/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

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


</body>
</html>
