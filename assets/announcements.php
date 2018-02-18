 <?php 

include 'inc/session.php';
include 'inc/db.php';
include 'inc/utilities.php';
include 'inc/ann_data.php';

?>
 <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WUP  | Announcements</title>

    <link rel="icon" type="icon" href="img/favicon.jpg">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

     <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <script src="js/jquery-2.1.1.js"></script>

    <link rel="stylesheet" type="text/css" href="css/plugins/sweetalert/sweetalert.css">

    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

    <style>
        textarea{
            resize: none;
        }
    </style>

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
                        <h5>List of announcements that have been plugged in the system.</h5>
                        <!-- <div class="pull-right">
                            <button class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i>  Add</button>
                        </div> -->
                    </div>
                    <div class="ibox-content">

                            <?php 

                            $btnCountSql = "SELECT * FROM announcements";
                            $btnCountQuery = mysqli_query($conn, $btnCountSql);
                            $btnCount = mysqli_num_rows($btnCountQuery);

                            if($btnCount >= 5){
                                echo '<button class="btn btn-primary pull-right disabled" data-toggle="tooltip" data-placement="top" title="You can only publish up to 5 announcement."><i class="fa fa-plus"></i>  Add</button><br/><br/><br/>';
                            }else{
                                echo '<button class="btn btn-primary pull-right"  data-toggle="modal" data-target="#myModalAdd"><i class="fa fa-plus"></i>  Add</button><br/><br/><br/>';
                            }


                            ?>


                                
                        <div class="table-responsive">
                                    <table class="table table-bordered table-hover dataTables-example">
                                    <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th width="65%">Announcement</th>
                        <th>Published by</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php annData(); ?>
                    </tbody>
                        
                    </table>
                        </div>

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

    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/select.js"></script>
    

    <!-- Custom and plugin javascript -->
    <script src="js/script.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script src="js/plugins/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

    <!-- Table JS -->
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="js/plugins/dataTables/datatables.min.js"></script>

     <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>

   

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){

            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

           




          

        });

        
         

    </script>


    <!-- MODAL ADD ANNOUNCEMNT -->

    <div class="modal inmodal" id="myModalAdd" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content animated fadeIn">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Add an announcement</h5>
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
                                                        <label>Announcement</label> 
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <textarea required class="form-control" name="announcementData" minlength="10" maxlength="110" resize="none" placeholder="Minimum of 10 characters and maximum of 110 characters."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    
                                                    <div>
                                                        <button class="btn btn-primary pull-right m-t-n-xs" name="btnAnn" type="submit">
                                                            <strong>Publish</strong>
                                                        </button>
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
        </div>


</body>
</html>
