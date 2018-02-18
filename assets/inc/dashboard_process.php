<?php

include 'db.php';

$enrollSql = "SELECT * FROM users WHERE department != 'FACULTY' AND department != 'GUARD' ";
$enrollQuery = mysqli_query($conn, $enrollSql);
$enrollCount = mysqli_num_rows($enrollQuery);

$date = date("m/d/y");

$presentSql = "SELECT DISTINCT barcode FROM attendance_o WHERE action = '1' AND date_check = '$date' ";
$presentQuery = mysqli_query($conn, $presentSql);
$presentCount = mysqli_num_rows($presentQuery);


function dashboard(){
	include 'db.php';
	$date = date("m/d/y");
	$attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
						FROM `attendance_o`,`users`
						WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `attendance_o`.`date_check` = '$date'
						ORDER BY `attendance_o`.`timestamp` ASC";
	$attendanceQuery = mysqli_query($conn, $attendanceSql);

	while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
		$attendanceLast = $attendanceRow['lname'];
		$attendanceFirst = $attendanceRow['fname'];
		$attendanceMid = $attendanceRow['mname'];
		$attendanceDept = $attendanceRow['department'];
		$attendanceYear = $attendanceRow['grade'];
		$attendanceCard = $attendanceRow['card'];
		$attendanceBar = $attendanceRow['barcode'];

		$attendanceTS1 = $attendanceRow['timestamp'];
		$attendanceTS2 = date("m/d/y", $attendanceTS1);
		$attendanceTS3 = date("h:i:s A", $attendanceTS1);
		$attendanceTime = $attendanceTS3."  ".$attendanceTS2;


		if($attendanceRow['action'] == 0){
			$attendanceAct = 'TIME IN';
		}else{
			$attendanceAct = 'TIME OUT';
		}

		if($attendanceRow['sms'] == 0){
			$attendanceSms = '<span class="label label-danger">NOT SENT</span>';
		}else{
			$attendanceSms = '<span class="label label-success">SENT</span>';
		}

		echo '

		<tr>
			<td>'.$attendanceTime.'</td>
			<td>'.$attendanceLast.'</td>
			<td>'.$attendanceFirst.'</td>
			<td>'.$attendanceMid.'</td>
			<td>'.$attendanceDept.'</td>
			<td>'.$attendanceYear.'</td>
			<td>'.$attendanceBar.'</td>
			
			<td>'.$attendanceAct.'</td>
			<td class="text-center">'.$attendanceSms.'</td>
			
			
		</tr>


		';

	}

}

function currentDate(){
	$dateNow = date("F j, Y");
	echo $dateNow." Attendance";
}





?>