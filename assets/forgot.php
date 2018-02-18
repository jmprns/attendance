<?php 

include_once 'inc/session2.php';
include_once 'inc/forgot_process.php';

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WUP  | Forgot password</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/plugins/sweetalert/sweetalert.css">

</head>

<body class="gray-bg">

    <div class="passwordBox animated fadeInDown">
        <div class="row">

            <div class="col-md-12">
                <div class="ibox-content">

                    <h2 class="font-bold">Forgot password</h2>

                    <p>
                        Enter your email and phone number and your password will be send to you. If the email and phone number match in our database, the password will be send via SMS.
                    </p>

                    <div class="row">

                        <div class="col-lg-12">
                            <form class="m-t" role="form" method="POST">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" value="<?php echo @$_REQUEST['email']; ?>" placeholder="Email Address" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="cpnum" class="form-control" value="<?php echo @$_REQUEST['cpnum']; ?>" placeholder="Phone Number" required="">
                                </div>

                                <button type="submit" name="btnFor" class="btn btn-primary block full-width m-b">Send the password</button>
                                <a href="login.php" class="btn btn-success block full-width m-b">Back to log in</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
               WUP Aurora Gate Monitoring System
            </div>
            <div class="col-md-6 text-right">
               <small>© 2017-2018</small>
            </div>
        </div>
    </div>

</body>

<script src="js/plugins/sweetalert/sweetalert.min.js"></script>

</html>


<?php


$url = $_SERVER['REQUEST_URI'];

if(strpos($url, 'forgot=error') !== false){
    echo "

    <script>
            swal({
            title: \"Error!\",
            text: \"The email and number don't match in our database!\",
            type: 'error',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}


if(strpos($url, 'error=message') !== false){
    echo "

    <script>
            swal({
            title: \"Error!\",
            text: \"Something went wrong in sending SMS\",
            type: 'warning',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'error=db') !== false){
    echo "

    <script>
            swal({
            title: \"Error\",
            text: \"Please install first the database!\",
            type: 'warning',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

?>
