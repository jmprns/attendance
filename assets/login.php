 <?php

include_once 'inc/session2.php';
include 'inc/login_process.php';

 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WUP | Login </title>

    <link rel="icon" type="icon" href="img/favicon.jpg">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/plugins/sweetalert/sweetalert.css">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6 text-center">
                <img src="img/wup_logo.png" alt="WupLogo" style="width:180px; height:180px;">
                <h1 class="font-bold">Welcome to WUP Admin Dashboard</h1>
            </div>
            <div class="col-md-6">
            <br><br>
                <div class="ibox-content">
                    <form class="m-t" role="form" method="POST">
                        
                        <div class="form-group">
                            <input type="email" name="adminEmail" class="form-control" placeholder="Email" value="<?php echo @$_REQUEST['email']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="password" name="adminPwd" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" name="btnAdmin" class="btn btn-primary block full-width m-b">Login</button>          
                    </form>
                     <a href="forgot.php">
                            <small>Forgot password?</small>
                        </a>
                    <p class="m-t">
                        <small>This admin dashboard's framework base on Bootstrap 3 &copy; 2014</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Wesleyan University-Philippines
            </div>
            <div class="col-md-6 text-right">
               <small>© 2017-2018</small>
            </div>
        </div>
    </div>

<script src="js/plugins/sweetalert/sweetalert.min.js"></script>


<?php 

if($attempValue >= 5){
    header('Location:block.php');
}

$url = $_SERVER['REQUEST_URI'];

if(strpos($url, 'error=login') !== false){
    echo "

    <script>
            swal({
            title: \"Error!\",
            text: \"The email/password you type is incorrect!\",
            type: 'error',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'recover=success') !== false){
    echo "

    <script>
            swal({
            title: \"Sent!\",
            text: \"The email and password has been sent to your phone\",
            type: 'success',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}


if(strpos($url, 'install=success') !== false){
    echo "

    <script>
        swal('WELCOME',
            'Welcome to WUP Admin Dashboard. You can now access the system using the following credentials: <br><br> email:admin@admin.com <br> password:admin <br><br> Please change your credentials after you LOG IN in Profile Section',
            'success'
        );
    </script>

    ";

    $date = date("d-m-Y");



    $installSQL = "UPDATE system SET installed_date = '$date' WHERE id = '1' ";
    $installQuery = mysqli_query($conn, $installSQL);


}


?>



</body>

</html>

