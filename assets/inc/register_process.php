<?php

include 'inc/db.php';

if(isset($_POST['btnEnroll']) ){

$fname = @ucfirst(mysqli_real_escape_string($conn, $_POST['fname']));
$lname = @ucfirst(mysqli_real_escape_string($conn, $_POST['lname']));
$mname = @ucfirst(mysqli_real_escape_string($conn, $_POST['mname']));
$idcard = @mysqli_real_escape_string($conn, $_POST['idcard']);
$barcode = @mysqli_real_escape_string($conn, $_POST['barcode']);
$cpnum = @mysqli_real_escape_string($conn, $_POST['cpnum']);
$faculty = @mysqli_real_escape_string($conn, $_POST['faculty']);
$year = @mysqli_real_escape_string($conn, $_POST['year']);



$file = $_FILES['file'];

$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

$fileExt = explode('.', $fileName);
$fileActualExt =strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png', 'bmp');

$checkBarSql = "SELECT * FROM users WHERE users_barcode = '$barcode' ";
$checkBarQuery = $conn->query($checkBarSql);
$checkBarResult =  mysqli_num_rows($checkBarQuery);

$checkNumSql = "SELECT * FROM users WHERE cp_num = '$cpnum' ";
$checkNumQuery = $conn->query($checkNumSql);
$checkNumResult =  mysqli_num_rows($checkNumQuery);


if(in_array($fileActualExt, $allowed)){
	if($fileError === 0){
		if($fileSize < 500000000){
			if($checkBarResult === 0){
				if($checkNumResult === 0){




					$fileNameNew = uniqid('', true).".".$fileActualExt;
			$fileDestination = 'img/profile/'.$fileNameNew;

			move_uploaded_file($fileTmpName, $fileDestination);

			$enrollSql = "INSERT INTO `users` (`id`, `lname`, `fname`, `mname`, `users_barcode`, `card`, `cp_num`, `department`, `grade`, `img`) 
				VALUES ('', '$lname', '$fname', '$mname', '$barcode', '$idcard', '$cpnum', '$faculty', '$year', '$fileNameNew');";

			$enrollRun = $conn->query($enrollSql);

			header('Location:register.php?register=success');



					
				}else{
					header('Location:register.php?error=num');
				}
			}else{
				header('Location:register.php?error=barcode');
			}
		}else{
			header('Location:register.php?error=filesize');
		}
	}else{	
		header('Location:register.php?error=fileupload');
	}
}else{
	header('Location:register.php?error=filetype');
}




}

?>