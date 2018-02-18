<?php
    include 'inc/session.php';
    include 'inc/acc_data.php';
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WUP  | Account LOGS</title>

    <link rel="icon" type="icon" href="img/favicon.jpg">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">



    

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
                        <h5>Account logs as of <?php asof(); ?></h5>
                        <div class="ibox-tools col-md-4">
                           <div class="form-group ">
                                <select class="form-control m-b" name="faculty" id="department" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                    <?php defaultDay(); ?>
                                </select>
                                </div>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th width="15%">Timestamp</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Position</th>
                        <th>Account</th>
                        <th>Logged</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php accData(); ?>
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
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    

    <!-- Custom and plugin javascript -->
    <script src="js/script.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Table JS -->
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Data picker -->
   <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

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
                ],
                order: [[0, "desc"]]

            });

            



        });

    </script>


</body>
</html>
