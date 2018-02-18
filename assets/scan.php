<?php

include 'inc/scan_process.php';



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


		function timedRefresh(timeoutPeriod) {
			setTimeout("location.reload(true);",timeoutPeriod);
			}

		window.onload = timedRefresh(120000);


    </script>
</head>
<body onload="startTime()" >
<div class="container">
	<br><br><br>
	<div class="row">
		<div class="col-md-4 black-bg">
			<p class="row-1-1">
				<?php

				$url = $_SERVER['REQUEST_URI'];

				if(strpos($url, 'error=absent') !== false){
    				echo "Mark absent!";
				}

				if(strpos($url, 'error=alreadytimein') !== false){
    				echo "Already Time In!";
				}

				if(strpos($url, 'error=alreadytimeout') !== false){
    				echo "Already Time Out!";
				}

				if(strpos($url, 'error=late') !== false){
    				echo "Mark late!";
				}

				if(strpos($url, 'error=timeout') !== false){
    				echo "Timeout Error!";
				}

				if(strpos($url, 'error=usernotfound') !== false){
    				echo "User not found!";
				}

				?>
			</p>
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
						<img src="img/default.png" class="img-responsive">
					</div>
				</div></center>
				<div class="col-md-12 row-2-1-2">
					<input type="text" value="0000000000" class="scanRFID">
					<form method="POST">
						<input type="text" class="scanCore" name="scanRFID" autofocus required>
						<button type="submit" class="btnScanCore" name="scanBtn"></button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8 blue-bg">
			<div class="row">
				<br>
				<center>
					<img src="img/wup_logo.png" width="200px" height="200px">
					<br><br><br>
					<p class="welcome-banner">Welcome to Wesleyan University - Philippines Aurora Campus.</p>
					<p class="welcome-banner-small">Please tap your school ID into the scanner to mark your attendance.</p>
				</center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 pink-bg">
			<marquee class="marquee" scrollamount="20">
				<p><?php annData(); ?></p>
			</marquee>
		</div>
	</div>
</div>


   

</body>
</html>