<?php 
include_once 'inc/session.php';
include 'inc/dashboard_process.php';


$dateNow = date("m-d-y");

?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WUP  | Dashboard </title>

    <link rel="icon" type="icon" href="img/favicon.jpg">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- c3 Charts -->
    <link href="css/plugins/c3/c3.min.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <script>
        function startTime(){
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);

            document.getElementById('timeTXT').innerHTML = h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i){
            if(i < 10) {i = "0" + i};
            return i;
        }
    </script>



</head>

<body onload="startTime()">
    <div id="wrapper">


    <?php include "inc/sidebar.php"; ?>


        <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">

            <?php include 'inc/navbar.php'; ?>

        </div>

            <div class="wrapper wrapper-content animated fadeIn">
            <div class="row">
                

            <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Enrolled Students </span>
                            <h2 class="font-bold"><?php echo $enrollCount; ?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-check-square fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Presents </span>
                            <h2 class="font-bold"><?php echo $presentCount; ?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-calendar fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Date </span>
                            <h2 class="font-bold"><?php echo date("m/d/y"); ?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-clock-o fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Time </span>
                            <h2 class="font-bold" id="timeTXT"></h2>
                        </div>
                    </div>
                </div>
            </div>

            </div>


            

            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?php currentDate(); ?></h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped dataTables-example" >
                    <thead>
                    <tr>
                        <th width="15%">Timestamp</th>
                        <th >Last Name</th>
                        <th >First Name</th>
                        <th >Middle Name</th>
                        <th >Department</th>
                        <th >Year</th>
                        <th width="11%">Barcode</th>
                        
                        <th >Action</th>
                        <th >SMS</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php dashboard(); ?>
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



    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>

    <!-- d3 and c3 charts -->
    <script src="js/plugins/d3/d3.min.js"></script>
    <script src="js/plugins/c3/c3.min.js"></script>

    <!-- Table JS -->
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: '<?php echo $dateNow." Attendance"; ?>'},
                    {extend: 'pdf', title: '<?php echo $dateNow." Attendance"; ?>'},

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



<?php

$url = $_SERVER['REQUEST_URI'];

if(strpos($url, 'welcome=success')){
    echo "
    <script>

        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    preventDuplicate: true,
                    timeOut: 4000
                };
                toastr.success('Welcome to WUP E-GATE Dashboard', 'Welcome ".$fetchFirst." ".$fetchLast."');

            }, 1300);


             });


    </script>
   ";
}


?>

   
</body>
</html>
