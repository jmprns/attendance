<?php

include_once 'inc/session2.php';
include 'inc/login_process.php';

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>WUP | Login</title>
    <link rel="icon" type="icon" href="img/favicon.jpg">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/plugins/sweetalert/sweetalert.css">
    <link rel="stylesheet" href="css/login.css">

   



</head>
<body>
    <video poster="img/poster.jpg" id="bgvid" playsinline autoplay muted loop>
    <source src="img/sample.webm" type="video/webm">
    <source src="img/sample.mp4" type="video/mp4">
  </video>
<div class="container-fluid">
<div class="row">
<div class="col-md-8">
  <h3 class="h3-login">WUP AURORA GATE ATTENDANCE MONITORING SYSTEM</h3>
</div>
<div class="col-md-3 parent">
      <center>
     <img src="img/wup_logo.jpg">
     <br><br><br><br>
     <div class="input-group m-b"><span class="input-group-addon input2"><i class="fa fa-envelope"></i></span> <input type="text" placeholder="Email Address" class="form-control login2-input"></div>
     <div class="input-group m-b"><span class="input-group-addon input2"><i class="fa fa-key"></i></span> <input type="text" placeholder="Password" class="form-control login2-input"></div>
     <br>
     <button type="submit" name="btnAdmin" class="btn btn-primary block full-width m-b">Login</button>
     <p><a href="">Forgot password?</a></p>
     <p>This admin dashboard's framework base on Bootstrap 3 © 2018</p>
     </center>
</div>

</div>
</div>
<script src='js/jquery-2.1.1.js'></script>
<script  src="js/login.js"></script>
</body>
</html>
 