<?php

include 'db.php';

$coreRFID = $_POST['scanRFID'] OR $_REQUEST['barcode'];


$evenCount = array('0','2','4','6','8','10','12','14','16','18','20','22','24','26','28','','30','32','34','36','38','40','42','44','46','48','50');
$oddCount = array('1','3','5','7','9','11','13','15','17','19','21','23','25','27','29','31','33','35','37','39','41','43','45','47','49');



/**
* VARIABLES
*/

$timestamp = time();
$dateNow = date("m/d/y");
$attendanceDate = date("m/d/y", $timestamp);
$timeRangeKey = date("Gis", $timestamp);
$attendanceTime = date("h:i:s A");




/**
* INFO OF THE USER
*/


$infoUserSql = "SELECT * FROM users WHERE users_barcode = '$coreRFID' ";
$infoUserQuery = mysqli_query($conn, $infoUserSql);
$infoUserIsRegister = mysqli_num_rows($infoUserQuery);

if($infoUserIsRegister === 0){
	header("Location:scan.php?error=usernotfound");
}else{

	$usersInfoRow = mysqli_fetch_assoc($infoUserQuery);
	$usersInfoId = $usersInfoRow['id'];
	$usersInfoFname = $usersInfoRow['fname'];
	$usersInfoLname = $usersInfoRow['lname'];
	$usersInfoMname = $usersInfoRow['mname'];
	$usersInfoBar = $usersInfoRow['users_barcode'];
	$usersInfoCard = $usersInfoRow['card'];
	$usersInfoNum = $usersInfoRow['cp_num'];
	$usersInfoDept = $usersInfoRow['department'];
	$usersInfoGrd = $usersInfoRow['grade'];
	$usersInfoImg = $usersInfoRow['img'];


}



/**
* INFO OF THE SYSTEM
*/

$infoSystemSql = "SELECT * FROM system WHERE id = 1";
$infoSystemQuery = mysqli_query($conn, $infoSystemSql);
$infoSystemRow = mysqli_fetch_assoc($infoSystemQuery);

$systemInfoDb = $infoSystemRow['db_name'];
$systemInfoIns = $infoSystemRow['installed_date'];
$systemInfoAdm = $infoSystemRow['admin'];
$systemInfoLog = $infoSystemRow['last_logged'];
$systemInfoNum = $infoSystemRow['number'];
$smsMode = $infoSystemRow['sms_mode'];


/**
* DEPARTMENT CHECKING ARRAY
*/

$colArea = array('BSA', 'BSBA', 'BSCS', 'CCJE', 'BEED');
$shsArea = array('ABM', 'HUMMS','GAS', 'STEM');
$jhsArea = array('JHS');
$facArea = array('FACULTY', 'GUARD');



/**
* ATTENDANCE CHECKING COUNT ROWS
*/

$attendanceCheckSql = "SELECT * FROM attendance_o WHERE date_check = '$dateNow' AND barcode = '$coreRFID' ";
$attendanceCheckQuery = mysqli_query($conn, $attendanceCheckSql);
$attendanceCheckCount = mysqli_num_rows($attendanceCheckQuery);


/**
* CHECKING COUNT ROWS OF ATTENDANCE TIMED
*/

$attendanceCheckTimedSql = "SELECT * FROM `attendance_t` WHERE barcode = '$coreRFID' AND `date_check` = '$dateNow' ";
$attendanceCheckTimedQuery = mysqli_query($conn, $attendanceCheckTimedSql);
$attendanceCheckTimedCount = mysqli_num_rows($attendanceCheckTimedQuery);

/**
* ATTENDANCE CHECKING IF NOT ATTENDANCE TIME IN BUT ATTENDANCE TIME OUT
*/

$checkAttendanceTimeSql = "SELECT * FROM attendance_t WHERE barcode = '$coreRFID' AND date_check = '$dateNow' ";
$checkAttendanceTimeQuery = mysqli_query($conn, $checkAttendanceTimeSql);
$checkAttendanceTimeRow = mysqli_fetch_assoc($checkAttendanceTimeQuery);
$checkAttendanceTimeMTI = $checkAttendanceTimeRow['mti'];
$checkAttendanceTimeMTO = $checkAttendanceTimeRow['mto'];
$checkAttendanceTimeATI = $checkAttendanceTimeRow['ati'];
$checkAttendanceTimeATO = $checkAttendanceTimeRow['ato'];




/**
* ATTENDANCE CHECKING OPEN OR TIMED ATTENDANCE
*/

//COLLEGE
$TimeRangeColSql = "SELECT * FROM `time` WHERE id = 3 ";
$TimeRangeColQuery = mysqli_query($conn, $TimeRangeColSql);
$TimeRangeColRow = mysqli_fetch_assoc($TimeRangeColQuery);
$timeRangeColType = $TimeRangeColRow['type'];
$timeRangeColMTIF = $TimeRangeColRow['mtif'];
$timeRangeColMTIS = $TimeRangeColRow['mtis'];
$timeRangeColMTOF = $TimeRangeColRow['mtof'];
$timeRangeColMTOS = $TimeRangeColRow['mtos'];
$timeRangeColATIF = $TimeRangeColRow['atif'];
$timeRangeColATIS = $TimeRangeColRow['atis'];
$timeRangeColATOF = $TimeRangeColRow['atof'];
$timeRangeColATOS = $TimeRangeColRow['atos'];

//SHS
$TimeRangeShsSql = "SELECT * FROM `time` WHERE id = 2 ";
$TimeRangeShsQuery = mysqli_query($conn, $TimeRangeShsSql);
$TimeRangeShsRow = mysqli_fetch_assoc($TimeRangeShsQuery);
$timeRangeShsType = $TimeRangeShsRow['type'];
$timeRangeShsMTIF = $TimeRangeShsRow['mtif'];
$timeRangeShsMTIS = $TimeRangeShsRow['mtis'];
$timeRangeShsMTOF = $TimeRangeShsRow['mtof'];
$timeRangeShsMTOS = $TimeRangeShsRow['mtos'];
$timeRangeShsATIF = $TimeRangeShsRow['atif'];
$timeRangeShsATIS = $TimeRangeShsRow['atis'];
$timeRangeShsATOF = $TimeRangeShsRow['atof'];
$timeRangeShsATOS = $TimeRangeShsRow['atos'];


//JHS
$TimeRangeJhsSql = "SELECT * FROM `time` WHERE id = 1 ";
$TimeRangeJhsQuery = mysqli_query($conn, $TimeRangeJhsSql);
$TimeRangeJhsRow = mysqli_fetch_assoc($TimeRangeJhsQuery);
$timeRangeJhsType = $TimeRangeJhsRow['type'];
$timeRangeJhsMTIF = $TimeRangeJhsRow['mtif'];
$timeRangeJhsMTIS = $TimeRangeJhsRow['mtis'];
$timeRangeJhsMTOF = $TimeRangeJhsRow['mtof'];
$timeRangeJhsMTOS = $TimeRangeJhsRow['mtos'];
$timeRangeJhsATIF = $TimeRangeJhsRow['atif'];
$timeRangeJhsATIS = $TimeRangeJhsRow['atis'];
$timeRangeJhsATOF = $TimeRangeJhsRow['atof'];
$timeRangeJhsATOS = $TimeRangeJhsRow['atos'];

?>
