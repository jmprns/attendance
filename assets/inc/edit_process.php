<?php

include 'inc/db.php';


$fname = @$_REQUEST['fname'];
$lname = @$_REQUEST['lname'];
$mname = @$_REQUEST['mname'];
$barcode = @$_REQUEST['barcode'];
$card = @$_REQUEST['card'];
$cpnum = @$_REQUEST['cp_num'];
$id = @$_REQUEST['id'];



//FETCHING USERS INFO


$usersSql = "SELECT * FROM users where id = '$id' ";
$userResult = $conn->query($usersSql);
$usersRow = $userResult->fetch_assoc();
$userId2 = $usersRow['id'];
$userLname2 = $usersRow['lname'];
$userFname2 = $usersRow['fname'];
$userMname2 = $usersRow['mname'];
$userBarcode2 = $usersRow['users_barcode'];
$userCard2 = $usersRow['card'];
$userCp2 = $usersRow['cp_num'];
$userDepart2 = $usersRow['department'];
$userGrade2 = $usersRow['grade'];





if(isset($_POST['btnEdit'])){

$firstName = ucfirst(mysqli_real_escape_string($conn, $_POST['fname']));
$midName = ucfirst(mysqli_real_escape_string($conn, $_POST['mname']));
$lastName = ucfirst(mysqli_real_escape_string($conn, $_POST['lname']));
$idCard = mysqli_real_escape_string($conn, $_POST['idcard']);
$barCode = mysqli_real_escape_string($conn, $_POST['barcode']);
$cpNum = mysqli_real_escape_string($conn, $_POST['cpnum']);
$department = mysqli_real_escape_string($conn, $_POST['faculty']);
$grade = mysqli_real_escape_string($conn, $_POST['year']);

$barcodeSql = "SELECT * FROM users WHERE users_barcode = '$barCode' ";
$barcodeCheck = $conn->query($barcodeSql);
$barcodeResult = mysqli_num_rows($barcodeCheck);

$cpNumSql = "SELECT * FROM users WHERE cp_num = '$cpNum' ";
$cpNumCheck = $conn->query($cpNumSql);
$cpNumResult = mysqli_num_rows($cpNumCheck);






if($barcodeResult == 1){
	if($barCode == $userBarcode2){
		if($cpNumResult == 1){
			if($cpNum == $userCp2){
				//SQL
				$editSQL = "UPDATE users SET lname = '$lastName', fname = '$firstName', mname = '$midName', users_barcode = '$barCode', card = '$idCard', cp_num = '$cpNum', department = '$department', grade = '$grade' WHERE id = '$id' ";
				$editQuery = $conn->query($editSQL);
				header('Location:update.php?edit=success');
			}else{
				header('Location:?error=number');
			}
		}elseif($cpNumResult == 0){
			//SQL
			$editSQL = "UPDATE users SET lname = '$lastName', fname = '$firstName', mname = '$midName', users_barcode = '$barCode', card = '$idCard', cp_num = '$cpNum', department = '$department', grade = '$grade' WHERE id = '$id' ";
			$editQuery = $conn->query($editSQL);
			header('Location:update.php?edit=success');
		}else{
			header('Location:?error=number');
		}
	}else{
		header('Location:?error=barcode');
	}
}elseif($barcodeResult == 0){
	if($cpNumResult == 1){
		if($cpNum == $userCp2){
			//SQL
			$editSQL = "UPDATE users SET lname = '$lastName', fname = '$firstName', mname = '$midName', users_barcode = '$barCode', card = '$idCard', cp_num = '$cpNum', department = '$department', grade = '$grade' WHERE id = '$id' ";
			$editQuery = $conn->query($editSQL);
			header('Location:update.php?edit=success');
		}else{
			header('Location:?error=number');
		}
	}elseif($cpNumResult == 0){
		//SQL
		$editSQL = "UPDATE users SET lname = '$lastName', fname = '$firstName', mname = '$midName', users_barcode = '$barCode', card = '$idCard', cp_num = '$cpNum', department = '$department', grade = '$grade' WHERE id = '$id' ";
		$editQuery = $conn->query($editSQL);
		header('Location:update.php?edit=success4');
	}else{
		header('Location:error=number');
	}
}else{
	header('Location:error=barcode');
}







}


?>