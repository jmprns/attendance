<?php

include 'db.php';

 

$evenCount = array('0','2','4','6','8','10','12','14','16','18','20','22','24','26','28','','30','32','34','36','38','40','42','44','46','48','50');
$oddCount = array('1','3','5','7','9','11','13','15','17','19','21','23','25','27','29','31','33','35','37','39','41','43','45','47','49');

$smsModeSql = "SELECT sms_mode FROM system WHERE id = '1' ";
$smsModeQuery = mysqli_query($conn, $smsModeSql);
$smsModeRow = mysqli_fetch_assoc($smsModeQuery);
$smsMode = $smsModeRow['sms_mode'];



if(isset($_POST['scanBtn'])){ // ===== FATHER IF STATEMENT =====
	$coreRFID = $_POST['scanRFID'];

	$checkAreaSql = "SELECT `users_barcode`, `department` FROM `users` WHERE `users_barcode` = '$coreRFID' ";
	$checkAreaQuery = mysqli_query($conn, $checkAreaSql);
	$TMP = time();


	$fetchInfoSql = "SELECT * FROM users WHERE users_barcode = '$coreRFID' ";
	$fetchInfoQuery = mysqli_query($conn, $fetchInfoSql);
	$fetchInfoRow = mysqli_fetch_assoc($fetchInfoQuery);
	$fetchFname = $fetchInfoRow['fname'];
	$fetchLname = $fetchInfoRow['lname'];
	$fetchNum = $fetchInfoRow['cp_num'];
	$fetchBar = $fetchInfoRow['users_barcode'];

	if(!$checkAreaRow = mysqli_fetch_assoc($checkAreaQuery)){
		header("Location:scan.php?error=usernotfound");
	}else{  // ===== MOTHER IF STATEMENT =====

		$checkAreaSql2 = "SELECT * FROM users WHERE users_barcode = '$coreRFID' ";
		$checkAreaQuery2 = mysqli_query($conn, $checkAreaSql2);
		$checkAreaRow2 = mysqli_fetch_assoc($checkAreaQuery2);
		$checkDept = $checkAreaRow2['department'];

		$colArea = array('BSA', 'BSBA', 'BSCS', 'CCJE', 'BEED');
		$shsArea = array('ABM', 'HUMMS','GAS', 'STEM');
		$jhsArea = array('JHS');
		$facArea = array('FACULTY', 'GUARD');

		//=================================
		//===========FACULTY===============
		//=================================
		// NOTE: FACULTY IS ALWAYS OPEN....

		if(in_array($checkDept, $facArea)){ // START OF FACULTY CODE
			$dateNow = date("m/d/y");
			$checkDateSql = "SELECT `date_check`, `barcode` FROM attendance_o WHERE date_check = '$dateNow' ";
			$checkDateQuery = mysqli_query($conn, $checkDateSql);
			$checkDateCount = mysqli_num_rows($checkDateQuery);


			if(in_array($checkDateCount, $evenCount)){  // TIME IN

					$attendanceTime = time();
					$attendanceDate = date("m/d/y", $attendanceTime);

					$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$attendanceTime', '$attendanceDate', '0', '0')";
					$attendanceQuery = mysqli_query($conn, $attendanceSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
			}elseif(in_array($checkDateCount, $oddCount)){ // TIME OUT

					$attendanceTime = time();
					$attendanceDate = date("m/d/y", $attendanceTime);

					$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$attendanceTime', '$attendanceDate', '1', '0')";
					$attendanceQuery = mysqli_query($conn, $attendanceSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=1");

			}elseif(in_array($checkDateCount, '')){ //TIME IN

					$attendanceTime = time();
					$attendanceDate = date("m/d/y", $attendanceTime);

					$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$attendanceTime', '$attendanceDate', '0', '0')";
					$attendanceQuery = mysqli_query($conn, $attendanceSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
			}


		} // END OF FACULTY CODE



		//=================================
		//===========COLLEGE===============
		//=================================
		//NOTE: COLLEGE IS ALWAYS OPEN

		elseif(in_array($checkDept, $colArea)){ // START OF COLLEGE CODE

			$checkTimeRangeSql = "SELECT * FROM time WHERE id = '3' ";
			$checkTimeRangeQuery = mysqli_query($conn, $checkTimeRangeSql);
			$checkTimeRangeRow = mysqli_fetch_assoc($checkTimeRangeQuery);
			$checkTimeRangeType = $checkTimeRangeRow['type'];


			// =====OPEN TIME=====

			if($checkTimeRangeType == '0'){ // ===== 1 =====
				$dateNow = date("m/d/y");
				$checkDateSql = "SELECT `date_check`, `barcode` FROM attendance_o WHERE date_check = '$dateNow' ";
				$checkDateQuery = mysqli_query($conn, $checkDateSql);
				$checkDateCount = mysqli_num_rows($checkDateQuery);

				if(in_array($checkDateCount, $evenCount)){

					$attendanceTime = time();
					$attendanceDate = date("m/d/y", $attendanceTime);

					$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$attendanceTime', '$attendanceDate', '0', '0')";
					$attendanceQuery = mysqli_query($conn, $attendanceSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");

				}elseif(in_array($checkDateCount, $oddCount)){

					$attendanceTime = time();
					$attendanceDate = date("m/d/y", $attendanceTime);

					$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$attendanceTime', '$attendanceDate', '1', '0')";
					$attendanceQuery = mysqli_query($conn, $attendanceSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=1");
				}elseif(in_array($checkDateCount, '')){

					$attendanceTime = time();
					$attendanceDate = date("m/d/y", $attendanceTime);

					$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$attendanceTime', '$attendanceDate', '0', '0')";
					$attendanceQuery = mysqli_query($conn, $attendanceSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
				}
			} // ===== 1 =====

			// =====TIME CLOSE=====

			else{ // ===== 2 =====

				//FETCHING COL TIME INFO
				$fetchTimeSql = "SELECT * FROM time WHERE id = '3'";
				$fetchTimeQuery = mysqli_query($conn, $fetchTimeSql);
				$fetchRow = mysqli_fetch_assoc($fetchTimeQuery);
				$fetchMTIF = $fetchRow['mtif'];
				$fetchMTIS = $fetchRow['mtis'];
				$fetchMTOF = $fetchRow['mtof'];
				$fetchMTOS = $fetchRow['mtis'];
				$fetchATIF = $fetchRow['atif'];
				$fetchATIS = $fetchRow['atos'];
				$fetchATOF = $fetchRow['atof'];
				$fetchATOS = $fetchRow['atos'];

				//TIME KEYS
				$timestampKey = time();
				$dateKey = date("m/d/y", $timestampKey);
				$timeKey = date("Gis", $timestampKey);
				$attKey = date("h:i:s A");


				$checkCountAttSql = "SELECT * FROM attendance_t WHERE barcode = '$coreRFID' AND date_check = '$dateKey'";
				$checkCountAttQuery = mysqli_query($conn, $checkCountAttSql);

				if(!$checkCountAttRow = mysqli_fetch_assoc($checkCountAttQuery)){ // ===== 2.1 =====
					// INSERTING ATTENDANCE_T ONE ROW
					if($timeKey >= $fetchMTIF && $timeKey <= $fetchMTIS){
						$insertAttSql1 = "INSERT INTO `attendance_t`(`id`,`barcode`, `date_check`, `mti`, `mto`, `ati`, `ato`)
										VALUES('', '$coreRFID', '$dateKey', '$attKey', '', '', '')";
						$insertAttQuery2 = mysqli_query($conn, $insertAttSql1);
						$insertAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '0', '0')";
						$insertAttQuery2 = mysqli_query($conn, $insertAttSql2);
						if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
						}
						header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
					}elseif($timeKey >= $fetchATIF && $timeKey <= $fetchATIS){
						$insertAttSql1 = "INSERT INTO `attendance_t`(`id`,`barcode`, `date_check`, `mti`, `mto`, `ati`, `ato`)
										VALUES('', '$coreRFID', '$dateKey', 'ABSENT', 'ABSENT', '$attKey', '')";
						$insertAttQuery2 = mysqli_query($conn, $insertAttSql1);
						$insertAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '0', '0')";
						$insertAttQuery2 = mysqli_query($conn, $insertAttSql2);
						if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
						}
						header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
					}else{
						header("Location:scan.php?error=absent");
					}
				} // ===== 2.1 =====

				else{ // ===== 2.2 =====

					$editAttSql = "SELECT * FROM attendance_o WHERE barcode = '$coreRFID' AND date_check = '$dateKey'";
					$editAttQuery = mysqli_query($conn, $editAttSql);
					$editAttRow = mysqli_fetch_assoc($editAttQuery);
					$editMTI = $editAttRow['mti'];
					$editMTO = $editAttRow['mto'];
					$editATI = $editAttRow['ati'];
					$editATO = $editAttRow['ato'];


					if($timeKey >= $fetchMTOF && $timeKey <= $fetchMTOS){
						if($editMTI = ""){
							header("Location:scan2.php?error=late");
						}else{
							$markAttSql1 = "UPDATE `attendance_t` SET `mto` = '$attKey' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateKey' ";
							$markAttQuery1 = mysqli_query($conn, $markAttSql1);
							$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '1', '0')";
							$markAttQuery2 = mysqli_query($conn, $markAttSql2);
							if($smsMode == 1){
								$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `timestamp`, `action`, `status`)
								VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$TMP', '1', '0')";
								$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
							}
							header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=1");
						}

					}elseif($timeKey >= $fetchATOF && $timeKey <= $fetchATOS){
						if($editATI = ""){
							header("Location:scan2.php?error=late");
						}else{
							$markAttSql1 = "UPDATE `attendance_t` SET `ato` = '$attKey' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateKey' ";
							$markAttQuery1 = mysqli_query($conn, $markAttSql1);
							$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '1', '0')";
							$markAttQuery2 = mysqli_query($conn, $markAttSql2);
							if($smsMode == 1){
								$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `timestamp`, `action`, `status`)
								VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$TMP', '1', '0')";
								$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
							}
							header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=1");
						}
					}elseif($timeKey >= $fetchATIF && $timeKey <= $fetchATIS){

						if($editMTO = ""){
							//MARKING ABSENT 

							$delAttSql = "DELETE FROM `attendance_o` WHERE `attendance_o`.`barcode` = '$coreRFID' AND `attendance_o`.`date_check` = '$dateKey'";
							$delAttQuery = mysqli_query($conn, $delAttSql);
							$editAttSql = "UPDATE `attendance_t` SET `mti` = 'ABSENT' AND `mto` = 'ABSENT' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateKey'";
							$editAttQuery = mysqli_query($conn, $editAttSql);
							if($smsMode == 1){
								$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `timestamp`, `action`, `status`)
								VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$TMP', '0', '0')";
								$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
							}
							header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
						}else{
						
								$markAttSql1 = "UPDATE `attendance_t` SET `ati` = '$attKey' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateKey' ";
								$markAttQuery1 = mysqli_query($conn, $markAttSql1);
								$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '0', '0')";
								$markAttQuery2 = mysqli_query($conn, $markAttSql2);
								if($smsMode == 1){
									$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `timestamp`, `action`, `status`)
									VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$TMP', '0', '0')";
									$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
									}
								header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
							
						}
					}
					else{
						header("Location:scan.php?error");
					}



				} // ===== 2.2 =====


			} // ===== 2 =====


		}// END OF COLLEGE CODE



		//=================================
		//==============SHS================
		//=================================
		

		elseif(in_array($checkDept, $shsArea)){

			$checkTimeRangeSql = "SELECT * FROM time WHERE id = '2' ";
			$checkTimeRangeQuery = mysqli_query($conn, $checkTimeRangeSql);
			$checkTimeRangeRow = mysqli_fetch_assoc($checkTimeRangeQuery);
			$checkTimeRangeType = $checkTimeRangeRow['type'];


			// =====OPEN TIME=====

			if($checkTimeRangeType == '0'){ // ===== 1 =====
				$dateNow = date("m/d/y");
				$checkDateSql = "SELECT `date_check`, `barcode` FROM attendance_o WHERE date_check = '$dateNow' ";
				$checkDateQuery = mysqli_query($conn, $checkDateSql);
				$checkDateCount = mysqli_num_rows($checkDateQuery);

				if(in_array($checkDateCount, $evenCount)){

					$attendanceTime = time();
					$attendanceDate = date("m/d/y", $attendanceTime);

					$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$attendanceTime', '$attendanceDate', '0', '0')";
					$attendanceQuery = mysqli_query($conn, $attendanceSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");

				}elseif(in_array($checkDateCount, $oddCount)){

					$attendanceTime = time();
					$attendanceDate = date("m/d/y", $attendanceTime);

					$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$attendanceTime', '$attendanceDate', '1', '0')";
					$attendanceQuery = mysqli_query($conn, $attendanceSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}

					header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=1");

				}elseif(in_array($checkDateCount, '')){

					$attendanceTime = time();
					$attendanceDate = date("m/d/y", $attendanceTime);

					$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$attendanceTime', '$attendanceDate', '0', '0')";
					$attendanceQuery = mysqli_query($conn, $attendanceSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}

					header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
				}
			} // ===== 1 =====

			// =====TIME CLOSE=====

			else{ // ===== 2 =====

				//FETCHING COL TIME INFO
				$fetchTimeSql = "SELECT * FROM time WHERE id = '2'";
				$fetchTimeQuery = mysqli_query($conn, $fetchTimeSql);
				$fetchRow = mysqli_fetch_assoc($fetchTimeQuery);
				$fetchMTIF = $fetchRow['mtif'];
				$fetchMTIS = $fetchRow['mtis'];
				$fetchMTOF = $fetchRow['mtof'];
				$fetchMTOS = $fetchRow['mtis'];
				$fetchATIF = $fetchRow['atif'];
				$fetchATIS = $fetchRow['atos'];
				$fetchATOF = $fetchRow['atof'];
				$fetchATOS = $fetchRow['atos'];

				//TIME KEYS
				$timestampKey = time();
				$dateKey = date("m/d/y", $timestampKey);
				$timeKey = date("Gis", $timestampKey);
				$attKey = date("h:i:s A");


				$checkCountAttSql = "SELECT * FROM attendance_t WHERE barcode = '$coreRFID' AND date_check = '$dateKey'";
				$checkCountAttQuery = mysqli_query($conn, $checkCountAttSql);

				if(!$checkCountAttRow = mysqli_fetch_assoc($checkCountAttQuery)){ // ===== 2.1 =====
					// INSERTING ATTENDANCE_T ONE ROW
					if($timeKey >= $fetchMTIF && $timeKey <= $fetchMTIS){
						$insertAttSql1 = "INSERT INTO `attendance_t`(`id`,`barcode`, `date_check`, `mti`, `mto`, `ati`, `ato`)
										VALUES('', '$coreRFID', '$dateKey', '$attKey', '', '', '')";
						$insertAttQuery2 = mysqli_query($conn, $insertAttSql1);
						$insertAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '0', '0')";
						$insertAttQuery2 = mysqli_query($conn, $insertAttSql2);
						if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}

						header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
					}elseif($timeKey >= $fetchATIF && $timeKey <= $fetchATIS){
						$insertAttSql1 = "INSERT INTO `attendance_t`(`id`,`barcode`, `date_check`, `mti`, `mto`, `ati`, `ato`)
										VALUES('', '$coreRFID', '$dateKey', 'ABSENT', 'ABSENT', '$attKey', '')";
						$insertAttQuery2 = mysqli_query($conn, $insertAttSql1);
						$insertAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '0', '0')";
						$insertAttQuery2 = mysqli_query($conn, $insertAttSql2);
						if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
						header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
					}else{
						header("Location:scan.php?error=absent");
					}
				} // ===== 2.1 =====

				else{ // ===== 2.2 =====

					$editAttSql = "SELECT * FROM attendance_o WHERE barcode = '$coreRFID' AND date_check = '$dateKey'";
					$editAttQuery = mysqli_query($conn, $editAttSql);
					$editAttRow = mysqli_fetch_assoc($editAttQuery);
					$editMTI = $editAttRow['mti'];
					$editMTO = $editAttRow['mto'];
					$editATI = $editAttRow['ati'];
					$editATO = $editAttRow['ato'];


					if($timeKey >= $fetchMTOF && $timeKey <= $fetchMTOS){
						if($editMTI = ""){
							header("Location:scan2.php?error=late");
						}else{
							$markAttSql1 = "UPDATE `attendance_t` SET `mto` = '$attKey' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateKey' ";
							$markAttQuery1 = mysqli_query($conn, $markAttSql1);
							$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '1', '0')";
							
							$markAttQuery2 = mysqli_query($conn, $markAttSql2);
							if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
							header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=1");
						}

					}elseif($timeKey >= $fetchATOF && $timeKey <= $fetchATOS){
						if($editATI = ""){
							header("Location:scan2.php?error=late");
						}else{
							$markAttSql1 = "UPDATE `attendance_t` SET `ato` = '$attKey' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateKey' ";
							$markAttQuery1 = mysqli_query($conn, $markAttSql1);
							$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '1', '0')";
							$markAttQuery2 = mysqli_query($conn, $markAttSql2);
							if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
							header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=1");
						}
					}elseif($timeKey >= $fetchATIF && $timeKey <= $fetchATIS){

						if($editMTO = ""){
							//MARKING ABSENT 

							$delAttSql = "DELETE FROM `attendance_o` WHERE `attendance_o`.`barcode` = '$coreRFID' AND `attendance_o`.`date_check` = '$dateKey'";
							$delAttQuery = mysqli_query($conn, $delAttSql);
							$editAttSql = "UPDATE `attendance_t` SET `mti` = 'ABSENT' AND `mto` = 'ABSENT' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateKey'";
							$editAttQuery = mysqli_query($conn, $editAttSql);
							if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
							header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");

						}else{
						
								$markAttSql1 = "UPDATE `attendance_t` SET `ati` = '$attKey' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateKey' ";
								$markAttQuery1 = mysqli_query($conn, $markAttSql1);
								$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '0', '0')";
								$markAttQuery2 = mysqli_query($conn, $markAttSql2);
								if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
								header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
						}
					}
					else{
						header("Location:scan.php?error");
					}



				} // ===== 2.2 =====


			} // ===== 2 =====




		}//END OF SHS CODE




		//=================================
		//==============JHS================
		//=================================
		

		elseif(in_array($checkDept, $jhsArea)){
			$checkTimeRangeSql = "SELECT * FROM time WHERE id = '1' ";
			$checkTimeRangeQuery = mysqli_query($conn, $checkTimeRangeSql);
			$checkTimeRangeRow = mysqli_fetch_assoc($checkTimeRangeQuery);
			$checkTimeRangeType = $checkTimeRangeRow['type'];


			// =====OPEN TIME=====

			if($checkTimeRangeType == '0'){ // ===== 1 =====
				$dateNow = date("m/d/y");
				$checkDateSql = "SELECT `date_check`, `barcode` FROM attendance_o WHERE date_check = '$dateNow' ";
				$checkDateQuery = mysqli_query($conn, $checkDateSql);
				$checkDateCount = mysqli_num_rows($checkDateQuery);

				if(in_array($checkDateCount, $evenCount)){

					$attendanceTime = time();
					$attendanceDate = date("m/d/y", $attendanceTime);

					$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$attendanceTime', '$attendanceDate', '0', '0')";
					$attendanceQuery = mysqli_query($conn, $attendanceSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");

				}elseif(in_array($checkDateCount, $oddCount)){

					$attendanceTime = time();
					$attendanceDate = date("m/d/y", $attendanceTime);

					$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$attendanceTime', '$attendanceDate', '1', '0')";
					$attendanceQuery = mysqli_query($conn, $attendanceSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=1");

				}elseif(in_array($checkDateCount, '')){

					$attendanceTime = time();
					$attendanceDate = date("m/d/y", $attendanceTime);

					$attendanceSql = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$attendanceTime', '$attendanceDate', '0', '0')";
					$attendanceQuery = mysqli_query($conn, $attendanceSql);
					if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
					header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
				}
			} // ===== 1 =====

			// =====TIME CLOSE=====

			else{ // ===== 2 =====

				//FETCHING COL TIME INFO
				$fetchTimeSql = "SELECT * FROM time WHERE id = '1'";
				$fetchTimeQuery = mysqli_query($conn, $fetchTimeSql);
				$fetchRow = mysqli_fetch_assoc($fetchTimeQuery);
				$fetchMTIF = $fetchRow['mtif'];
				$fetchMTIS = $fetchRow['mtis'];
				$fetchMTOF = $fetchRow['mtof'];
				$fetchMTOS = $fetchRow['mtis'];
				$fetchATIF = $fetchRow['atif'];
				$fetchATIS = $fetchRow['atos'];
				$fetchATOF = $fetchRow['atof'];
				$fetchATOS = $fetchRow['atos'];

				//TIME KEYS
				$timestampKey = time();
				$dateKey = date("m/d/y", $timestampKey);
				$timeKey = date("Gis", $timestampKey);
				$attKey = date("h:i:s A");


				$checkCountAttSql = "SELECT * FROM attendance_t WHERE barcode = '$coreRFID' AND date_check = '$dateKey'";
				$checkCountAttQuery = mysqli_query($conn, $checkCountAttSql);

				if(!$checkCountAttRow = mysqli_fetch_assoc($checkCountAttQuery)){ // ===== 2.1 =====
					// INSERTING ATTENDANCE_T ONE ROW
					if($timeKey >= $fetchMTIF && $timeKey <= $fetchMTIS){
						$insertAttSql1 = "INSERT INTO `attendance_t`(`id`,`barcode`, `date_check`, `mti`, `mto`, `ati`, `ato`)
										VALUES('', '$coreRFID', '$dateKey', '$attKey', '', '', '')";
						$insertAttQuery2 = mysqli_query($conn, $insertAttSql1);
						$insertAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '0', '0')";
						$insertAttQuery2 = mysqli_query($conn, $insertAttSql2);
						if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
						header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
					}elseif($timeKey >= $fetchATIF && $timeKey <= $fetchATIS){
						$insertAttSql1 = "INSERT INTO `attendance_t`(`id`,`barcode`, `date_check`, `mti`, `mto`, `ati`, `ato`)
										VALUES('', '$coreRFID', '$dateKey', 'ABSENT', 'ABSENT', '$attKey', '')";
						$insertAttQuery2 = mysqli_query($conn, $insertAttSql1);
						$insertAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '0', '0')";
						$insertAttQuery2 = mysqli_query($conn, $insertAttSql2);
						if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
						header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
					}else{
						header("Location:scan.php?error=absent");
					}
				} // ===== 2.1 =====

				else{ // ===== 2.2 =====

					$editAttSql = "SELECT * FROM attendance_o WHERE barcode = '$coreRFID' AND date_check = '$dateKey'";
					$editAttQuery = mysqli_query($conn, $editAttSql);
					$editAttRow = mysqli_fetch_assoc($editAttQuery);
					$editMTI = $editAttRow['mti'];
					$editMTO = $editAttRow['mto'];
					$editATI = $editAttRow['ati'];
					$editATO = $editAttRow['ato'];


					if($timeKey >= $fetchMTOF && $timeKey <= $fetchMTOS){
						if($editMTI = ""){
							header("Location:scan2.php?error=late");
						}else{
							$markAttSql1 = "UPDATE `attendance_t` SET `mto` = '$attKey' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateKey' ";
							$markAttQuery1 = mysqli_query($conn, $markAttSql1);
							$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '1', '0')";
							$markAttQuery2 = mysqli_query($conn, $markAttSql2);
							if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
							header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=1");
						}

					}elseif($timeKey >= $fetchATOF && $timeKey <= $fetchATOS){
						if($editATI = ""){
							header("Location:scan2.php?error=late");
						}else{
							$markAttSql1 = "UPDATE `attendance_t` SET `ato` = '$attKey' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateKey' ";
							$markAttQuery1 = mysqli_query($conn, $markAttSql1);
							$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '1', '0')";
							$markAttQuery2 = mysqli_query($conn, $markAttSql2);
							if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '1', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
							header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=1");
						}
					}elseif($timeKey >= $fetchATIF && $timeKey <= $fetchATIS){

						if($editMTO = ""){
							//MARKING ABSENT 

							$delAttSql = "DELETE FROM `attendance_o` WHERE `attendance_o`.`barcode` = '$coreRFID' AND `attendance_o`.`date_check` = '$dateKey'";
							$delAttQuery = mysqli_query($conn, $delAttSql);
							$editAttSql = "UPDATE `attendance_t` SET `mti` = 'ABSENT' AND `mto` = 'ABSENT' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateKey'";
							$editAttQuery = mysqli_query($conn, $editAttSql);
							if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
							header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
						}else{
						
								$markAttSql1 = "UPDATE `attendance_t` SET `ati` = '$attKey' WHERE `attendance_t`.`barcode` = '$coreRFID' AND `attendance_t`.`date_check` = '$dateKey' ";
								$markAttQuery1 = mysqli_query($conn, $markAttSql1);
								$markAttSql2 = "INSERT INTO `attendance_o`(`id`, `barcode`, `timestamp`, `date_check`, `action`, `sms`)
										VALUES('', '$coreRFID', '$timestampKey', '$dateKey', '0', '0')";
								$markAttQuery2 = mysqli_query($conn, $markAttSql2);
								if($smsMode == 1){
						$smsInsertSql = "INSERT INTO `sms_server`(`id`, `fname`, `lname`, `number`, `barcode`, `timestamp`, `action`, `status`)
							VALUES('', '$fetchFname', '$fetchLname', '$fetchNum', '$fetchBar', '$TMP', '0', '0')";
						$smsInsertQuery = mysqli_query($conn, $smsInsertSql);
					}
								header("Location:scan2.php?barcode=$coreRFID&timestamp=$TMP&action=0");
							
						}
					}
					else{
						header("Location:scan.php?error");
					}



				} // ===== 2.2 =====


			} // ===== 2 =====
		}//END OF JHS CODE
	} // ===== CLOSING OF MOTHER IF STATEMENT =====
} // ===== CLOSING OF FATHER IF STATEMENT =====




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