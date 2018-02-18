 <?php 

include 'inc/session.php';
include 'inc/db.php';
include 'inc/utilities.php';


?>
 <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WUP  | Update</title>

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
                        <h5>List of students, faculty and guards that have been registered in the system.</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                                    <table class="table table-bordered table-hover dataTables-example">
                                    <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Barcode</th>
                        <th>ID Card</th>
                        <th>CP Number</th>
                        <th>Department</th>
                        <th>Grade Year</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php include 'inc/update_data.php'; ?>
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

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );




          

        });

        
         

    </script>

<?php


include 'inc/update_process.php';


?>
</body>
</html>
