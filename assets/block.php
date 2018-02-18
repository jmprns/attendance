 <?php
include_once 'inc/db.php';
include_once 'inc/session2.php';

$timeSql = "SELECT timestamp FROM attemp ORDER BY id DESC LIMIT 1";
$timeQuery = $conn->query($timeSql);
$timeFetch = $timeQuery->fetch_assoc();
$timeValue = $timeFetch['timestamp'];

$timeOn = time();


if($timeOn >= $timeValue){
    $attempResetSql = "TRUNCATE TABLE `attemp`";
    $attempResetQuery = mysqli_query($conn, $attempResetSql);
    header('Location:login.php');
}

$timeMinus = $timeValue - $timeOn;
$timeDiv = $timeMinus / 60;
$timeNewValue =  round($timeDiv);


?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WUP | BLOCK </title>

    <link rel="icon" type="icon" href="img/favicon.jpg">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/plugins/sweetalert/sweetalert.css">

    <style type="text/css">
        .block-fa{
            font-size: 250px;
            margin-top: -30px;
            color: orange;
        }
        .block-header{
            font-weight: bolder;
            font-size: 30px
        }
        .block-text{
            font-size: 20px;
        }
    </style>

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="text-center">
                <i class="fa fa-exclamation-circle block-fa"></i>
                <p class="block-header">You have been block!</p>
                <p class="block-text">You have been block for too much attemps. Please try again after <?php if($timeNewValue > 1){ echo $timeNewValue." minutes"; }else{ echo $timeNewValue." minute"; } ?>.</p>
                <a href="login.php" class="btn btn-success btn-lg">Try again</a>
                
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





</body>

</html>

