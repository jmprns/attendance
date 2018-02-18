<?php

date_default_timezone_set('Asia/Manila');

if(isset($_POST['scanBtn'])){//ISSET IF STATEMENT

include 'scan.init.php';


//=================================
//===========FACULTY===============
//=================================
// NOTE: FACULTY IS ALWAYS OPEN....

if(in_array($usersInfoDept, $facArea)){

	if(in_array($attendanceCheckCount, $evenCount)){

		$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
							VALUES('', '$coreRFID', '$timestamp', '$attendanceDate', '0', '0')";
		$attendanceQuery = mysqli_query($conn, $attendanceSql);

		if($smsMode == 1){
			$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '0', '0')";
			$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
		}

		header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");

	}else{

		$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
							VALUES('', '$coreRFID', '$timestamp', '$attendanceDate', '1', '0')";
		$attendanceQuery = mysqli_query($conn, $attendanceSql);

		if($smsMode == 1){
			$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '1', '0')";
			$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
		}

		header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=1");
	}
}



//=================================
//===========COLLEGE===============
//=================================
// NOTE: COLLEGE IS USUALLY OPEN....

if(in_array($usersInfoDept, $colArea)){

	if($timeRangeColType == 1){

		if($attendanceCheckTimedCount == 0){

			if($timeRangeKey >= $$timeRangeColMTIF && $timeRangeKey <= $$timeRangeColMTIS){
				$insertAttSql1 = "INSERT INTO `attendance_t`(`id`,`barcode`, `date_check`, `mti`, `mto`, `ati`, `ato`)
										VALUES('', '$coreRFID', '$dateNow', '$attendanceTime', '', '', '')";
				$insertAttQuery2 = mysqli_query($conn, $insertAttSql1);
				$insertAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '0', '0')";
				$insertAttQuery2 = mysqli_query($conn, $insertAttSql2);
				if($smsMode == 1){
					$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
										VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '0', '0')";
					$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
				}
				header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");
			}

			elseif($timeRangeKey >= $$timeRangeColATIF && $timeRangeKey <= $$timeRangeColATIS){
				$insertAttSql1 = "INSERT INTO `attendance_t`(`id`,`barcode`, `date_check`, `mti`, `mto`, `ati`, `ato`)
										VALUES('', '$coreRFID', '$dateNow', 'ABSENT', 'ABSENT', '$attendanceTime', '')";
				$insertAttQuery2 = mysqli_query($conn, $insertAttSql1);
				$insertAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '0', '0')";
				$insertAttQuery2 = mysqli_query($conn, $insertAttSql2);
				if($smsMode == 1){
					$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
										VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '0', '0')";
					$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
				}
				header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");
			}

			else{
				header("Location:scan.php?error=absent");
			}

		}else{

			if($timeRangeKey >= $$timeRangeColMTIF && $timeRangeKey <= $$timeRangeColMTIS){
				if($checkAttendanceTimeMTI !== ""){
					header("Location:scan.php?error=alreadytimein");
				}
			}

			if($timeRangeKey >= $$timeRangeColMTOF && $timeRangeKey <= $$timeRangeColMTOS){
				
				if($checkAttendanceTimeMTI == ""){
					header("Location:scan.php?error=late");
				}

				elseif($checkAttendanceTimeMTO !== ""){
					header("Location:scan.php?error=alreadytimeout");
				}

				else{
					$markAttSql1 = "UPDATE `attendance_t` SET `mto` = '$attendanceTime' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateNow' ";
					$markAttQuery1 = mysqli_query($conn, $markAttSql1);
					$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '1', '0')";
					$markAttQuery2 = mysqli_query($conn, $markAttSql2);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`,`barcode`, `timestamp`, `action`, `status`)
											VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum',`$usersInfoBar`, '$timestamp', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=1");
				}
			}

			elseif ($timeRangeKey >= $$timeRangeColATOF && $timeRangeKey <= $$timeRangeColATOS){
				if($checkAttendanceTimeATI == ""){
						header("Location:scan.php?error=late");
				}



				if($checkAttendanceTimeATO !== ""){
						header("Location:scan.php?error=alreadytimeout");
				}

				else{
					$markAttSql1 = "UPDATE `attendance_t` SET `ato` = '$attendanceTime' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateNow' ";
					$markAttQuery1 = mysqli_query($conn, $markAttSql1);
					$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '1', '0')";
					$markAttQuery2 = mysqli_query($conn, $markAttSql2);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`,`barcode`, `timestamp`, `action`, `status`)
											VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum',`$usersInfoBar`, '$timestamp', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=1");
				}
			}

			elseif($timeRangeKey >= $$timeRangeColATIF && $timeRangeKey <= $$timeRangeColATIS) {
				
				if($checkAttendanceTimeMTO == ""){

					$delAttSql = "DELETE FROM `attendance_o` WHERE `attendance_o`.`barcode` = '$coreRFID' AND `attendance_o`.`date_check` = '$dateNow'";
					$delAttQuery = mysqli_query($conn, $delAttSql);
					$editAttSql = "UPDATE `attendance_t` SET `mti` = 'ABSENT' AND `mto` = 'ABSENT' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateNow'";
					$editAttQuery = mysqli_query($conn, $editAttSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`,`barcode`, `timestamp`, `action`, `status`)
								VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");
				}

				elseif($checkAttendanceTimeATI !== ""){
					header("Location:scan.php?error=alreadytimein");
				}

				else{
					$markAttSql1 = "UPDATE `attendance_t` SET `ati` = '$attendanceTime' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateNow' ";
					$markAttQuery1 = mysqli_query($conn, $markAttSql1);
					$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '0', '0')";
					$markAttQuery2 = mysqli_query($conn, $markAttSql2);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`,`barcode`, `timestamp`, `action`, `status`)
									VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum','$usersInfoBar', '$timestamp', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");
				}

			}

			else{
				header("Location:scan.php?error=timeout");
			}

		}

	}else{
		if(in_array($attendanceCheckCount, $evenCount)){

			$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
								VALUES('', '$coreRFID', '$timestamp', '$attendanceDate', '0', '0')";
			$attendanceQuery = mysqli_query($conn, $attendanceSql);

			if($smsMode == 1){
				$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
								VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '0', '0')";
				$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
			}

			header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");

		}else{

			$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
								VALUES('', '$coreRFID', '$timestamp', '$attendanceDate', '1', '0')";
			$attendanceQuery = mysqli_query($conn, $attendanceSql);

			if($smsMode == 1){
				$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
								VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '1', '0')";
				$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
			}

			header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=1");
		}
	}
}



//=================================
//===========SHS===============
//=================================
// NOTE: SHS IS USUALLY TIMED....

if(in_array($usersInfoDept, $shsArea)){

	if($timeRangeShsType == 1){

		if($attendanceCheckTimedCount == 0){

			if($timeRangeKey >= $timeRangeShsMTIF && $timeRangeKey <= $timeRangeShsMTIS){
				$insertAttSql1 = "INSERT INTO `attendance_t`(`id`,`barcode`, `date_check`, `mti`, `mto`, `ati`, `ato`)
										VALUES('', '$coreRFID', '$dateNow', '$attendanceTime', '', '', '')";
				$insertAttQuery2 = mysqli_query($conn, $insertAttSql1);
				$insertAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '0', '0')";
				$insertAttQuery2 = mysqli_query($conn, $insertAttSql2);
				if($smsMode == 1){
					$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
										VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '0', '0')";
					$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
				}
				header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");
			}

			elseif($timeRangeKey >= $timeRangeShsATIF && $timeRangeKey <= $timeRangeShsATIS){
				$insertAttSql1 = "INSERT INTO `attendance_t`(`id`,`barcode`, `date_check`, `mti`, `mto`, `ati`, `ato`)
										VALUES('', '$coreRFID', '$dateNow', 'ABSENT', 'ABSENT', '$attendanceTime', '')";
				$insertAttQuery2 = mysqli_query($conn, $insertAttSql1);
				$insertAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '0', '0')";
				$insertAttQuery2 = mysqli_query($conn, $insertAttSql2);
				if($smsMode == 1){
					$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
										VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '0', '0')";
					$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
				}
				header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");
			}

			else{
				header("Location:scan.php?error=absent");
			}

		}else{

			if($timeRangeKey >= $timeRangeShsMTIF && $timeRangeKey <= $timeRangeShsMTIS){
				if($checkAttendanceTimeMTI !== ""){
					header("Location:scan.php?error=alreadytimein");
				}
			}

			if($timeRangeKey >= $timeRangeShsMTOF && $timeRangeKey <= $timeRangeShsMTOS){
				
				if($checkAttendanceTimeMTI == ""){
					header("Location:scan.php?error=late");
				}

				elseif($checkAttendanceTimeMTO !== ""){
					header("Location:scan.php?error=alreadytimeout");
				}

				else{
					$markAttSql1 = "UPDATE `attendance_t` SET `mto` = '$attendanceTime' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateNow' ";
					$markAttQuery1 = mysqli_query($conn, $markAttSql1);
					$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '1', '0')";
					$markAttQuery2 = mysqli_query($conn, $markAttSql2);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`,`barcode`, `timestamp`, `action`, `status`)
											VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum',`$usersInfoBar`, '$timestamp', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=1");
				}
			}

			elseif ($timeRangeKey >= $timeRangeShsATOF && $timeRangeKey <= $timeRangeShsATOS){
				if($checkAttendanceTimeATI == ""){
						header("Location:scan.php?error=late");
				}

				

				if($checkAttendanceTimeATO !== ""){
						header("Location:scan.php?error=alreadytimeout");
				}

				else{
					$markAttSql1 = "UPDATE `attendance_t` SET `ato` = '$attendanceTime' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateNow' ";
					$markAttQuery1 = mysqli_query($conn, $markAttSql1);
					$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '1', '0')";
					$markAttQuery2 = mysqli_query($conn, $markAttSql2);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`,`barcode`, `timestamp`, `action`, `status`)
											VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum',`$usersInfoBar`, '$timestamp', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=1");
				}
			}

			elseif($timeRangeKey >= $timeRangeShsATIF && $timeRangeKey <= $timeRangeShsATIS) {
				
				if($checkAttendanceTimeMTO == ""){

					$delAttSql = "DELETE FROM `attendance_o` WHERE `attendance_o`.`barcode` = '$coreRFID' AND `attendance_o`.`date_check` = '$dateNow'";
					$delAttQuery = mysqli_query($conn, $delAttSql);
					$editAttSql = "UPDATE `attendance_t` SET `mti` = 'ABSENT' AND `mto` = 'ABSENT' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateNow'";
					$editAttQuery = mysqli_query($conn, $editAttSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`,`barcode`, `timestamp`, `action`, `status`)
								VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");
				}

				elseif($checkAttendanceTimeATI !== ""){
					header("Location:scan.php?error=alreadytimein");
				}

				else{
					$markAttSql1 = "UPDATE `attendance_t` SET `ati` = '$attendanceTime' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateNow' ";
					$markAttQuery1 = mysqli_query($conn, $markAttSql1);
					$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '0', '0')";
					$markAttQuery2 = mysqli_query($conn, $markAttSql2);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`,`barcode`, `timestamp`, `action`, `status`)
									VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum','$usersInfoBar', '$timestamp', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");
				}

			}

			else{
				header("Location:scan.php?error=timeout");
			}

		}

	}else{
		if(in_array($attendanceCheckCount, $evenCount)){

			$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
								VALUES('', '$coreRFID', '$timestamp', '$attendanceDate', '0', '0')";
			$attendanceQuery = mysqli_query($conn, $attendanceSql);

			if($smsMode == 1){
				$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
								VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '0', '0')";
				$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
			}

			header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");

		}else{

			$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
								VALUES('', '$coreRFID', '$timestamp', '$attendanceDate', '1', '0')";
			$attendanceQuery = mysqli_query($conn, $attendanceSql);

			if($smsMode == 1){
				$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
								VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '1', '0')";
				$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
			}

			header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=1");
		}
	}
}


//=================================
//===========JHS===============
//=================================
// NOTE: JHS IS USUALLY TIMED....

if(in_array($usersInfoDept, $shsArea)){

	if($timeRangeJhsType == 1){

		if($attendanceCheckTimedCount == 0){

			if($timeRangeKey >= $$timeRangeJhsMTIF && $timeRangeKey <= $$timeRangeJhsMTIS){
				$insertAttSql1 = "INSERT INTO `attendance_t`(`id`,`barcode`, `date_check`, `mti`, `mto`, `ati`, `ato`)
										VALUES('', '$coreRFID', '$dateNow', '$attendanceTime', '', '', '')";
				$insertAttQuery2 = mysqli_query($conn, $insertAttSql1);
				$insertAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '0', '0')";
				$insertAttQuery2 = mysqli_query($conn, $insertAttSql2);
				if($smsMode == 1){
					$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
										VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '0', '0')";
					$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
				}
				header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");
			}

			elseif($timeRangeKey >= $$timeRangeJhsATIF && $timeRangeKey <= $$timeRangeJhsATIS){
				$insertAttSql1 = "INSERT INTO `attendance_t`(`id`,`barcode`, `date_check`, `mti`, `mto`, `ati`, `ato`)
										VALUES('', '$coreRFID', '$dateNow', 'ABSENT', 'ABSENT', '$attendanceTime', '')";
				$insertAttQuery2 = mysqli_query($conn, $insertAttSql1);
				$insertAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '0', '0')";
				$insertAttQuery2 = mysqli_query($conn, $insertAttSql2);
				if($smsMode == 1){
					$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
										VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '0', '0')";
					$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
				}
				header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");
			}

			else{
				header("Location:scan.php?error=absent");
			}

		}else{

			if($timeRangeKey >= $$timeRangeJhsMTIF && $timeRangeKey <= $$timeRangeJhsMTIS){
				if($checkAttendanceTimeMTI !== ""){
					header("Location:scan.php?error=alreadytimein");
				}
			}

			if($timeRangeKey >= $$timeRangeJhsMTOF && $timeRangeKey <= $$timeRangeJhsMTOS){
				
				if($checkAttendanceTimeMTI == ""){
					header("Location:scan.php?error=late");
				}

				elseif($checkAttendanceTimeMTO !== ""){
					header("Location:scan.php?error=alreadytimeout");
				}

				else{
					$markAttSql1 = "UPDATE `attendance_t` SET `mto` = '$attendanceTime' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateNow' ";
					$markAttQuery1 = mysqli_query($conn, $markAttSql1);
					$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '1', '0')";
					$markAttQuery2 = mysqli_query($conn, $markAttSql2);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`,`barcode`, `timestamp`, `action`, `status`)
											VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum',`$usersInfoBar`, '$timestamp', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=1");
				}
			}

			elseif ($timeRangeKey >= $$timeRangeJhsATOF && $timeRangeKey <= $$timeRangeJhsATOS){
				if($checkAttendanceTimeATI == ""){
						header("Location:scan.php?error=late");
				}

				

				if($checkAttendanceTimeATO !== ""){
						header("Location:scan.php?error=alreadytimeout");
				}

				else{
					$markAttSql1 = "UPDATE `attendance_t` SET `ato` = '$attendanceTime' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateNow' ";
					$markAttQuery1 = mysqli_query($conn, $markAttSql1);
					$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '1', '0')";
					$markAttQuery2 = mysqli_query($conn, $markAttSql2);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`,`barcode`, `timestamp`, `action`, `status`)
											VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum',`$usersInfoBar`, '$timestamp', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=1");
				}
			}

			elseif($timeRangeKey >= $$timeRangeJhsATIF && $timeRangeKey <= $$timeRangeJhsATIS) {
				
				if($checkAttendanceTimeMTO == ""){

					$delAttSql = "DELETE FROM `attendance_o` WHERE `attendance_o`.`barcode` = '$coreRFID' AND `attendance_o`.`date_check` = '$dateNow'";
					$delAttQuery = mysqli_query($conn, $delAttSql);
					$editAttSql = "UPDATE `attendance_t` SET `mti` = 'ABSENT' AND `mto` = 'ABSENT' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateNow'";
					$editAttQuery = mysqli_query($conn, $editAttSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`,`barcode`, `timestamp`, `action`, `status`)
								VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");
				}

				elseif($checkAttendanceTimeATI !== ""){
					header("Location:scan.php?error=alreadytimein");
				}

				else{
					$markAttSql1 = "UPDATE `attendance_t` SET `ati` = '$attendanceTime' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateNow' ";
					$markAttQuery1 = mysqli_query($conn, $markAttSql1);
					$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestamp', '$dateNow', '0', '0')";
					$markAttQuery2 = mysqli_query($conn, $markAttSql2);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`,`barcode`, `timestamp`, `action`, `status`)
									VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum','$usersInfoBar', '$timestamp', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");
				}

			}

			else{
				header("Location:scan.php?error=timeout");
			}

		}

	}else{
		if(in_array($attendanceCheckCount, $evenCount)){

			$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
								VALUES('', '$coreRFID', '$timestamp', '$attendanceDate', '0', '0')";
			$attendanceQuery = mysqli_query($conn, $attendanceSql);

			if($smsMode == 1){
				$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
								VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '0', '0')";
				$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
			}

			header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=0");

		}else{

			$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
								VALUES('', '$coreRFID', '$timestamp', '$attendanceDate', '1', '0')";
			$attendanceQuery = mysqli_query($conn, $attendanceSql);

			if($smsMode == 1){
				$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
								VALUES('', '$usersInfoFname', '$usersInfoLname', '$usersInfoNum', '$usersInfoBar', '$timestamp', '1', '0')";
				$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
			}

			header("Location:scan2.php?barcode=$coreRFID&timestamp=$timestamp&action=1");
		}
	}
}






}//ISSET IF STATEMENT


function annData() {
	include 'db.php';
	$annSql = "SELECT content FROM announcements";
	$annQuery = $conn->query($annSql);

	$annNum = mysqli_num_rows($annQuery);

	if($annNum == 0){

	}else{
		echo '<span class="blank-text">_____</span>~~~ANNOUNCEMENTS~~~<span class="blank-text">_____</span>';
		while($annRow = mysqli_fetch_assoc($annQuery)){
			echo $annRow['content'].'<span class="blank-text">_____</span><span>~~~</span><span class="blank-text">_____</span>';
		}
	}

}

?>