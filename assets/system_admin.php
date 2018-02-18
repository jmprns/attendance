<?php

include 'inc/system_process.php';

include 'inc/utilities.php';

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WUP  | System </title>

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
                        <div class="ibox">
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <br><br>
                                        <h1>System Settings</h1>
                                        <hr>
                                        
                                        <div class="row m-t-lg">
                                            <div class="col-lg-12" style="height:300px;">
                                                <div class="tabs-container">

                                                    <div class="tabs-left">
                                                        <ul class="nav nav-tabs">
                                                            <li class="active"><a data-toggle="tab" href="#tab-1"> Information</a></li>
                                                            <li class=""><a data-toggle="tab" href="#tab-2">Log-in System</a></li>
                                                            <li class=""><a data-toggle="tab" href="#tab-3">SMS Settings</a></li>
                                                            <li class=""><a data-toggle="tab" href="#tab-4">Table Settings</a></li>
                                                           
                                                        </ul>
                                                        <div class="tab-content ">
                                                            <div id="tab-1" class="tab-pane active">
                                                                <div class="panel-body">
                                                                    <strong>System Informations</strong>

                                                                    <ul class="list-group clear-list m-t">
                                                                        <li class="list-group-item fist-item">
                                                                            <span class="pull-right">
                                                                                WUP AURORA ATTENDANCE MONITORING SYSTEM
                                                                            </span>
                                                                            <span class="label label-success">1</span> System Name
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <span class="pull-right">
                                                                                <?php echo $systemRow['installed_date']; ?>
                                                                            </span>
                                                                            <span class="label label-info">2</span> Installed
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <span class="pull-right">
                                                                                1
                                                                            </span>
                                                                            <span class="label label-primary">3</span> Registered Administrator
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <span class="pull-right">
                                                                                wup_gate
                                                                            </span>
                                                                            <span class="label label-default">4</span> Database Name
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <span class="pull-right">
                                                                                <?php


                                                                                $timestamp =  $systemRow['last_logged']; 

                                                                                echo @date("H:i:s m-d-y", $timestamp);

                                                                                ?>
                                                                            </span>
                                                                            <span class="label label-primary">5</span> Last Logged-in

                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <a href="acc_log.php?day=today" class="btn btn-xs btn-success">Open Log</a>
                                                                            <a href="inc/smsServer.php" target="_new" class="btn btn-xs btn-success">Open SMS Server</a>
                                                                            <a href="scan.php" target="_new" class="btn btn-xs btn-success">Open Scanning Page</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div id="tab-2" class="tab-pane">
                                                                <div class="panel-body">
                                                                    <label>Click the button to edit the login time.</label>
                                                                    <ul class="list-group clear-list m-t">
                                                                        <li class="list-group-item">
                                                                            <span class="pull-right">
                                                                                <?php 

                                                                                if($juniorFetchType == 0){
                                                                                    echo "Open";
                                                                                }elseif($juniorFetchType == 1){
                                                                                    echo $juniorFetchMTIF." - ".$juniorFetchMTIS." || ".$juniorFetchMTOF." - ".$juniorFetchMTOS."<br>".$juniorFetchATIF." - ".$juniorFetchATIS." || ".$juniorFetchATOF." - ".$juniorFetchATOS;
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                            <button class="btn btn-success dim" data-toggle="modal" data-target="#juniorTime">Junior High</button>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <span class="pull-right">
                                                                                <?php 

                                                                                if($seniorFetchType == 0){
                                                                                    echo "Open";
                                                                                }elseif($seniorFetchType == 1){
                                                                                    echo $seniorFetchMTIF." - ".$seniorFetchMTIS." || ".$seniorFetchMTOF." - ".$seniorFetchMTOS."<br>".$seniorFetchATIF." - ".$seniorFetchATIS." || ".$seniorFetchATOF." - ".$seniorFetchATOS;
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                            <button class="btn btn-info dim" data-toggle="modal" data-target="#seniorTime">Senior High</button>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <span class="pull-right">
                                                                                <?php 

                                                                                if($collegeFetchType == 0){
                                                                                    echo "Open";
                                                                                }elseif($collegeFetchType == 1){
                                                                                    echo $collegeFetchMTIF." - ".$collegeFetchMTIS." || ".$collegeFetchMTOF." - ".$collegeFetchMTOS."<br>".$collegeFetchATIF." - ".$collegeFetchATIS." || ".$collegeFetchATOF." - ".$collegeFetchATOS;
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                            <button class="btn btn-primary dim" data-toggle="modal" data-target="#collegeTime">College</button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div id="tab-3" class="tab-pane">
                                                                <div class="panel-body">
                                                                    <strong>SMS Settings</strong>

                                                                    <ul class="list-group clear-list m-t">
                                                                        <li class="list-group-item fist-item">
                                                                            <span class="pull-right">
                                                                                <p>wupgate@gmail.com</p>
                                                                            </span>
                                                                            <span class="label label-success">1</span> SMS Email
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <span class="pull-right">
                                                                                <p><?php if($fetchAcc == 0){ echo "WesleyaN1946";}else{echo "********";} ?></p>
                                                                            </span>
                                                                            <span class="label label-info">2</span> SMS Password
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <span class="pull-right">
                                                                                <?php 

                                                                                $sqlCount = "SELECT * FROM sms_device";
                                                                                $queryCount = mysqli_query($conn, $sqlCount);
                                                                                $queryCountReal = mysqli_num_rows($queryCount);

                                                                                echo "<p>".$queryCountReal."</p>";

                                                                                ?>
                                                                                
                                                                            </span>
                                                                            <span class="label label-info">3</span> SMS Gateway Device
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <span class="pull-right">
                                                                                <?php echo $systemMode; ?>
                                                                            <button class="btn btn-xs btn-warning"  data-toggle="modal" data-target="#myModalEditMode"><i class="fa fa-edit"></i>  Edit</button>
                                                                            </span>
                                                                            <span class="label label-info">4</span> SMS Mode
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <button class="btn btn-xs btn-success"  data-toggle="modal" data-target="#myModalDeviceList">Device List</button>
                                                                        </li>
                                                                    </ul>
                                                                    <h4>*Note: Configuring this settings may be affect the system performance. </h4>
                                                                </div>
                                                            </div>
                                                            <div id="tab-4" class="tab-pane">
                                                                <div class="panel-body">
                                                                    <strong>Table Settings</strong>

                                                                    <h3>Truncate the data tables?</h3>
                                                                        <button class="btn btn-danger dim" data-toggle="modal" data-target="#myModalTruncate"><i class="fa fa-times"></i>  Truncate</button>
                                                                    <h4>*Note: Truncating the table means deleting all the files and records in the tables and it can't be undone. </h4>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <br><br><br>
                                                <h3>People behind this project<h3>
                                                <div class="col-lg-5 user-friends">
                                                <p class="small">System Analyst</p>
                                                    <a target="_new" href="https://www.facebook.com/gerald.padua.kel" data-toggle="tooltip" title="Gerald A. Padua"><img alt="image" class="img-circle" src="img/system/ba1.jpg"></a>
                                                    <a target="_new" href="https://www.facebook.com" data-toggle="tooltip" title="Mary Ann N. Nidoy"><img alt="image" class="img-circle" src="img/system/ba2.jpg"></a>
                                                    <a target="_new" href="https://www.facebook.com" data-toggle="tooltip" title="Ivanh S. Aznar"><img alt="image" class="img-circle" src="img/system/ba3.jpg"></a>
                                                    <a target="_new" href="https://www.facebook.com" data-toggle="tooltip" title="Judy Ann B. Rubio"><img alt="image" class="img-circle" src="img/system/ba4.jpg"></a>
                                                    <a target="_new" href="https://www.facebook.com/dhen.viriane.30" data-toggle="tooltip" title="Diane R. Donato"><img alt="image" class="img-circle" src="img/a3.png"></a>
                                                    <a target="_new" href="https://www.facebook.com" data-toggle="tooltip" title="Alexis M. Marco"><img alt="image" class="img-circle" src="img/a3.png"></a>
                                                </div>
                                                <div class="col-lg-5 user-friends">
                                                <p class="small">System Designer</p>
                                                    <a target="_new" href="https://www.facebook.com/jp.pagapulan" data-toggle="tooltip" title="Jimwell Parinas"><img alt="image" class="img-circle" src="img/system/cs1.jpg"></a>
                                                    <a target="_new" href="https://www.facebook.com/cosmicaengel" data-toggle="tooltip" title="Angelica Hermozura"><img alt="image" class="img-circle" src="img/system/cs2.jpg"></a>
                                                    <a target="_new" href="https://www.facebook.com/christianjay.campos" data-toggle="tooltip" title="Christian Jay Campos"><img alt="image" class="img-circle" src="img/system/cs3.jpg"></a>
                                                    <a target="_new" href="https://www.facebook.com" data-toggle="tooltip" title="Johnson Kean Serafines"><img alt="image" class="img-circle" src="img/a3.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="text-center m-t-lg">
                                            <img src="img/wup_logo.png" alt="WupLogo" style="width:180px; height:180px; ">
                                        </div>
                                        <div class="text-center m-t-lg">
                                            <h1>WUP AURORA <span class="text-navy"> <br>Admin Dashboard</span></h1>
                                            <small>Attendance Monitoring System</small>
                                        </div>
                                        <div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="text-center p-m">
                                                <p>
                                                    <strong>WUP AURORA <span class="text-navy">Attendance Monitoring System</span></strong> is made by Bootstrap framework and PHP for server side language.<br>
                                                    This attendance monitoring dashboard can send SMS using android devices as a gateway SMS. It uses barcode to mark a student present.
                                                    <br>
                                                    <strong>For more information, visit Wesleyan University - Philippines page</strong>.
                                                    

                                                <p class="text-center m-t-md">
                                                    <a target="_new" href="http://www.wupaurora.com" class="btn btn-primary">Visit WUP Page</a>
                                                </p>
                                            </div>
                                            <div>

                                                <div class="text-center">
                                                    <small>If you need any help feel free to contact the system programmers.
                                                    </small>
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

        <div class="footer">
            <?php include 'inc/footer.php'; ?>
        </div>

        </div>

        
    </div>


    <!-- MODAL DEVICE LIST -->

    <div class="modal inmodal" id="myModalDeviceList" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content animated fadeIn">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>SMS Gateway Devices</h5>
                                        <div class="ibox-tools">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-lg-6 br">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                smsDevice();
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 b-r">

                                                <?php

                                               


                                                if($queryCountReal >= 5){
                                                    echo '<label>You can only add upto 5 devices</label>';
                                                }else{
                                                    echo '


                                                <form role="form" method="POST">
                                                    <div class="form-group">
                                                        <label>Add device</label> 
                                                        <div class="row">
                                                            <div class="col-md-12"><input type="text" name="deviceId" class="form-control"></div>
                                                            
                                                        </div>
                                                    </div>
                                            
                                                    <div class="hr-line-dashed"></div>
                                                    
                                                    <div>
                                                        <button class="btn btn-primary pull-right m-t-n-xs" name="btnDevice" type="submit">
                                                            <strong>Save</strong>
                                                        </button>
                                                    </div>
                                                </form>

                                                    ';
                                                }

                                                ?>

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


    <!-- MODAL EDIT MODE -->

    <div class="modal inmodal" id="myModalEditMode" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content animated fadeIn">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Edit</h5>
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
                                                        <label>Mode</label> 
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <select class="form-control m-b" name="smsMode">
                                                                    <option value="0">Offline</option>
                                                                    <option value="1">Online</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    
                                                    <div>
                                                        <button class="btn btn-primary pull-right m-t-n-xs" name="btnMode" type="submit">
                                                            <strong>Save</strong>
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

        <!-- MODAL TRUNCATE -->

    <div class="modal inmodal" id="myModalTruncate" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                                    
                                                                    <button onclick="truncate()" type="submit" class="btn btn-danger btn-block m-t-n-xs" name="btnTruncate" >
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


    <!-- MODAL JUNIOR TIME -->

    <div class="modal inmodal" id="juniorTime" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content animated fadeIn">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Edit</h5>
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
                                                        <label>Type</label> 
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <select class="form-control m-b" id="timeLogJunior" name="juniorType">
                                                                    <option value="0">Open</option>
                                                                    <option value="1">Time</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="hr-line-dashed"></div>

                                                    <div id="hidden_divJunior" style="display:none;">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label>Morning Time-in</label> 
                                                                    <select class="form-control m-b" name="juniorMTIF">
                                                                        <option value="60000">6:00 AM</option>
                                                                        <option value="63000">6:30 AM</option>
                                                                        <option value="64500">6:45 AM</option>
                                                                        <option value="70000">7:00 AM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Morning Time-in</label> 
                                                                    <select class="form-control m-b" name="juniorMTIS">
                                                                        <option value="73000">7:30 AM</option>
                                                                        <option value="80000">8:00 AM</option>
                                                                        <option value="83000">8:30 AM</option>
                                                                        <option value="90000">9:00 AM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Morning Time-out</label> 
                                                                    <select class="form-control m-b" name="juniorMTOF">
                                                                        <option value="110000">11:00 AM</option>
                                                                        <option value="113000">11:30 AM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Morning Time-out</label> 
                                                                    <select class="form-control m-b" name="juniorMTOS">
                                                                        <option value="114500">11:45 AM</option>
                                                                        <option value="120000">12:00 NN</option>
                                                                        <option value="121500">12:15 NN</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Afternoon Time-in</label> 
                                                                    <select class="form-control m-b" name="juniorATIF">
                                                                        <option value="123000">12:30 NN</option>
                                                                        <option value="130000">1:00 PM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Afternoon Time-in</label> 
                                                                    <select class="form-control m-b" name="juniorATIS">
                                                                        <option value="130000">1:00 PM</option>
                                                                        <option value="131500">1:15 PM</option>
                                                                        <option value="133000">1:30 PM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Afternoon Time-out</label> 
                                                                    <select class="form-control m-b" name="juniorATOF">
                                                                        <option value="160000">4:00 PM</option>
                                                                        <option value="163000">4:30 PM</option>
                                                                        <option value="170000">5:00 PM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Afternoon Time-out</label> 
                                                                    <select class="form-control m-b" name="juniorATOS">
                                                                        <option value="170000">5:00 PM</option>
                                                                        <option value="173000">5:30 PM</option>
                                                                        <option value="180000">6:00 PM</option>
                                                                        <option value="183000">6:30 PM</option>
                                                                        <option value="190000">7:00 PM</option>
                                                                    </select>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="hr-line-dashed"></div>
                                                    </div>
                                                    
                                                    <div>
                                                        <button class="btn btn-primary pull-right m-t-n-xs" type="submit" name="btnTimeJunior">
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

    <!-- MODAL SENIOR TIME -->

    <div class="modal inmodal" id="seniorTime" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content animated fadeIn">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Edit</h5>
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
                                                        <label>Type</label> 
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <select class="form-control m-b" id="timeLogSenior" name="seniorType">
                                                                    <option value="0">Open</option>
                                                                    <option value="1">Time</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="hr-line-dashed"></div>

                                                    <div id="hidden_divSenior" style="display:none;">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label>Morning Time-in</label> 
                                                                    <select class="form-control m-b" name="seniorMTIF">
                                                                        <option value="60000">6:00 AM</option>
                                                                        <option value="63000">6:30 AM</option>
                                                                        <option value="64500">6:45 AM</option>
                                                                        <option value="70000">7:00 AM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Morning Time-in</label> 
                                                                    <select class="form-control m-b" name="seniorMTIS">
                                                                        <option value="73000">7:30 AM</option>
                                                                        <option value="80000">8:00 AM</option>
                                                                        <option value="83000">8:30 AM</option>
                                                                        <option value="90000">9:00 AM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Morning Time-out</label> 
                                                                    <select class="form-control m-b" name="seniorMTOF">
                                                                        <option value="110000">11:00 AM</option>
                                                                        <option value="113000">11:30 AM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Morning Time-out</label> 
                                                                    <select class="form-control m-b" name="seniorMTOS">
                                                                        <option value="114500">11:45 AM</option>
                                                                        <option value="120000">12:00 NN</option>
                                                                        <option value="121500">12:15 NN</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Afternoon Time-in</label> 
                                                                    <select class="form-control m-b" name="seniorATIF">
                                                                        <option value="123000">12:30 NN</option>
                                                                        <option value="130000">1:00 PM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Afternoon Time-in</label> 
                                                                    <select class="form-control m-b" name="seniorATIS">
                                                                        <option value="130000">1:00 PM</option>
                                                                        <option value="131500">1:15 PM</option>
                                                                        <option value="133000">1:30 PM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Afternoon Time-out</label> 
                                                                    <select class="form-control m-b" name="seniorATOF">
                                                                        <option value="160000">4:00 PM</option>
                                                                        <option value="163000">4:30 PM</option>
                                                                        <option value="170000">5:00 PM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Afternoon Time-out</label> 
                                                                    <select class="form-control m-b" name="seniorATOS">
                                                                        <option value="170000">5:00 PM</option>
                                                                        <option value="173000">5:30 PM</option>
                                                                        <option value="180000">6:00 PM</option>
                                                                        <option value="183000">6:30 PM</option>
                                                                        <option value="190000">7:00 PM</option>
                                                                    </select>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="hr-line-dashed"></div>
                                                    </div>
                                                    
                                                    <div>
                                                        <button class="btn btn-primary pull-right m-t-n-xs" type="submit" name="btnTimeSenior">
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

        <!-- MODAL college TIME -->

    <div class="modal inmodal" id="collegeTime" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content animated fadeIn">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Edit</h5>
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
                                                        <label>Type</label> 
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <select class="form-control m-b" id="timeLogCollege" name="collegeType">
                                                                    <option value="0">Open</option>
                                                                    <option value="1">Time</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="hr-line-dashed"></div>

                                                    <div id="hidden_divCollege" style="display:none;">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label>Morning Time-in</label> 
                                                                    <select class="form-control m-b" name="collegeMTIF">
                                                                        <option value="60000">6:00 AM</option>
                                                                        <option value="63000">6:30 AM</option>
                                                                        <option value="64500">6:45 AM</option>
                                                                        <option value="70000">7:00 AM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Morning Time-in</label> 
                                                                    <select class="form-control m-b" name="collegeMTIS">
                                                                        <option value="73000">7:30 AM</option>
                                                                        <option value="80000">8:00 AM</option>
                                                                        <option value="83000">8:30 AM</option>
                                                                        <option value="90000">9:00 AM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Morning Time-out</label> 
                                                                    <select class="form-control m-b" name="collegeMTOF">
                                                                        <option value="110000">11:00 AM</option>
                                                                        <option value="113000">11:30 AM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Morning Time-out</label> 
                                                                    <select class="form-control m-b" name="collegeMTOS">
                                                                        <option value="114500">11:45 AM</option>
                                                                        <option value="120000">12:00 NN</option>
                                                                        <option value="121500">12:15 NN</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Afternoon Time-in</label> 
                                                                    <select class="form-control m-b" name="collegeATIF">
                                                                        <option value="123000">12:30 NN</option>
                                                                        <option value="130000">1:00 PM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Afternoon Time-in</label> 
                                                                    <select class="form-control m-b" name="collegeATIS">
                                                                        <option value="130000">1:00 PM</option>
                                                                        <option value="131500">1:15 PM</option>
                                                                        <option value="133000">1:30 PM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Afternoon Time-out</label> 
                                                                    <select class="form-control m-b" name="collegeATOF">
                                                                        <option value="160000">4:00 PM</option>
                                                                        <option value="163000">4:30 PM</option>
                                                                        <option value="170000">5:00 PM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Afternoon Time-out</label> 
                                                                    <select class="form-control m-b" name="collegeATOS">
                                                                        <option value="170000">5:00 PM</option>
                                                                        <option value="173000">5:30 PM</option>
                                                                        <option value="180000">6:00 PM</option>
                                                                        <option value="183000">6:30 PM</option>
                                                                        <option value="190000">7:00 PM</option>
                                                                    </select>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="hr-line-dashed"></div>
                                                    </div>
                                                    
                                                    <div>
                                                        <button class="btn btn-primary pull-right m-t-n-xs" type="submit" name="btnTimeCollege">
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

    <script>
        document.getElementById('timeLogJunior').addEventListener('change',function() {
            var style = this.value == 1 ? 'block' : 'none';
            document.getElementById('hidden_divJunior').style.display = style;
        });
    </script>

    <script>
        document.getElementById('timeLogSenior').addEventListener('change',function() {
            var style = this.value == 1 ? 'block' : 'none';
            document.getElementById('hidden_divSenior').style.display = style;
        });
    </script>

    <script>
        document.getElementById('timeLogCollege').addEventListener('change',function() {
            var style = this.value == 1 ? 'block' : 'none';
            document.getElementById('hidden_divCollege').style.display = style;
        });
    </script>
    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>



<?php



include 'inc/sweetalert_handling.php';

?>

</body>
</html>
