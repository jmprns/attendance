<?php
include 'inc/db.php';

include 'inc/scan_process.php';


if(!isset($_REQUEST['barcode']) && !isset($_REQUEST['timestamp']) && !isset($_REQUEST['action'])){
	header("Location:scan.php");
}else{


	$barcodeScan2 = $_REQUEST['barcode'];
	$timestampScan2 = $_REQUEST['timestamp'];



	if($_REQUEST['action'] == 0){
		$actionScan2 = "TIME IN";
	}else{
		$actionScan2 = "TIME OUT";
	}

	$infoScan2Sql = "SELECT * FROM users WHERE users_barcode = '$barcodeScan2' ";
	$infoScan2Query = mysqli_query($conn, $infoScan2Sql);
	$infoRow = mysqli_fetch_assoc($infoScan2Query);


	$timeScan2 = date("h:i A", $_REQUEST['timestamp']);







}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Scan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/scan.css" rel="stylesheet">
    <link rel="icon" type="icon" href="img/favicon.jpg">
    <script type="text/javascript">
    	function startTime() {
		    var today = new Date();
		    var h = today.getHours();
		    var m = today.getMinutes();
		    var s = today.getSeconds();
		    m = checkTime(m);
		    s = checkTime(s);
		    document.getElementById('minSec').innerHTML =
		    ":" + m + ":" + s;
		    var t = setTimeout(startTime, 500);
		}
		function checkTime(i) {
		    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
		    return i;
		}
    </script>
</head>
<body onload="startTime()" >
<div class="container">
	<br><br><br>
	<div class="row">
		<div class="col-md-4 black-bg">
			<p class="row-1-1"><?php echo $actionScan2; ?></p>
		</div>
		<div class="col-md-8 black-bg">
			<p class="row-1-2"><?php echo date("l, F d, Y h"); ?><span id="minSec"></span> <?php echo date("A"); ?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 green-bg">
			<div class="row">
				<div class="col-md-12 row-2-1-1">
				<br><br>
				<center>
					<div class="row-2-1-1-picture-container">
						<img src="img/profile/<?php echo $infoRow['img']; ?>" class="img-responsive">
					</div>
				</div></center>
				<div class="col-md-12 row-2-1-2">
					<input type="text" value="<?php echo $barcodeScan2; ?>" class="scanRFID">
					<form method="POST">
						<input type="text" class="scanCore" name="scanRFID" autofocus required>
						<button type="submit" class="btnScanCore" name="scanBtn"></button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8 blue-bg">
			<div class="row">
				<div class="col-md-12 row-2-2">
					<p class="row-2-2-header">Student No.</p>
					<center><input type="text" class="row-2-2-input" value="<?php echo $infoRow['card']; ?>"></center>
				</div>
				<div class="col-md-12 row-2-2">
					<p class="row-2-2-header">Name</p>
					<center><input type="text" class="row-2-2-input" value="<?php echo $infoRow['lname'].', '.$infoRow['fname']; ?>"></center>
				</div>
				<div class="col-md-12 row-2-2">
					<p class="row-2-2-header">Course</p>
					<center><input type="text" class="row-2-2-input" value="<?php echo $infoRow['department']; ?>"></center>
				</div>
				<div class="col-md-12 row-2-2">
					<p class="row-2-2-header">Year/Block</p>
					<center><input type="text" class="row-2-2-input" value="<?php echo $infoRow['grade']; ?>"></center>
				</div>
				<div class="col-md-12 row-2-2">
					<p class="row-2-2-header">Time</p>
					<center><input type="text" class="row-2-2-input" value="<?php echo $timeScan2; ?>"></center>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 pink-bg">
			<marquee class="marquee" scrollamount="20">
				<p>WELCOME TO WUP AURORA GATE ATTENDANCE MONITORING SYSTEM<?php annData(); ?></p>
			</marquee>
		</div>
	</div>
</div>
</body>
</html>
<?php

	header("refresh:10;url=scan.php");


?>