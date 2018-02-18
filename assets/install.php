<?php 


?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WUP | INSTALL</title>

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

                    <h2 class="font-bold">Install Wizard</h2>

                    <p>
                       This wizard help you to use this system. It install necessary files to work this system. Click the install button below to start the installation process.
                    </p>

                    <div class="row">

                        <div class="col-lg-12">
                            <form class="m-t" role="form" action="install_process.php" method="POST">
                                <button type="submit" data-loading-text="Processing...." name="btnInstall" class="btn btn-primary block full-width m-b">Install</button>
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
<script type="text/javascript">
    $("button").click(function() {
    var $btn = $(this);
    $btn.button('loading');
    // Then whatever you actually want to do i.e. submit form
    // After that has finished, reset the button state using
    setTimeout(function () {
        $btn.button('reset');
    }, 10000);
});
</script>

</html>


<?php


// $url = $_SERVER['REQUEST_URI'];

// if(strpos($url, 'forgot=error') !== false){
//     echo "

//     <script>
//             swal({
//             title: \"Error!\",
//             text: \"The email and number don't match in our database!\",
//             type: 'error',
//             timer: 3000,
//             showConfirmButton: false});
//             setTimeout(function(){
               
//               }, 1000);

//     </script>

//     ";
// }


// if(strpos($url, 'error=message') !== false){
//     echo "

//     <script>
//             swal({
//             title: \"Error!\",
//             text: \"Something went wrong in sending SMS\",
//             type: 'warning',
//             timer: 3000,
//             showConfirmButton: false});
//             setTimeout(function(){
               
//               }, 1000);

//     </script>

//     ";
// }


// if(strpos($url, 'error=db') !== false){
//     echo "

//     <script>
//             swal({
//             title: \"Error!\",
//             text: \"Please install the database first!\",
//             type: 'error',
//             timer: 3000,
//             showConfirmButton: false});
//             setTimeout(function(){
               
//               }, 1000);

//     </script>

//     ";
// }

?>
