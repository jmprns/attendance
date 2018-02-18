<?php 

include 'inc/session.php';
include 'inc/register_process.php';
include 'inc/utilities.php';


?>
<!DOCTYPE html> 
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WUP  | Enroll </title>

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
                                            <div class="col-md-4"><input type="text" name="fname" placeholder="First Name" class="form-control" required></div>
                                            <div class="col-md-4"><input type="text" name="lname" placeholder="Last Name" class="form-control" required></div>
                                            <div class="col-md-4"><input type="text" name="mname" placeholder="Middle Name" class="form-control"></div>
                                        </div>
                                    </div> 
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Credentials</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-4"><input type="text" name="idcard" class="form-control" placeholder="ID Number" required></div>
                                            <div class="col-md-4"><input type="text" name="barcode" class="form-control" placeholder="Barcode Number" required></div>
                                            <div class="col-md-4"><input type="number" name="cpnum" class="form-control" placeholder="Phone Number" required></div>
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
                                <div class="form-group"><label class="col-sm-2 control-label">Picture</label>
                                    <div class="col-sm-6"><input input type="file" name="file" class="form-control filestyle" data-buttonBefore="true" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-warning" type="reset">Reset</button>
                                        <button class="btn btn-primary" type="submit" name="btnEnroll">Submit</button>
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
