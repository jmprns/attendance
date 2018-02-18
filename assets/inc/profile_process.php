<?php

include 'db.php';


if(isset($_POST['addBtn']) ){

$fname = ucfirst(mysqli_real_escape_string($conn, $_POST['addF']));
$lname = ucfirst(mysqli_real_escape_string($conn, $_POST['addL']));
$mname = ucfirst(mysqli_real_escape_string($conn, $_POST['addM']));
$email = mysqli_real_escape_string($conn, $_POST['addE']);
$pwd = mysqli_real_escape_string($conn, $_POST['addP']);
$num = mysqli_real_escape_string($conn, $_POST['addNum']);
$pos = mysqli_real_escape_string($conn, $_POST['addPs']);
$file = $_FILES['file'];


$emailsql = "SELECT * FROM admin WHERE email = '$email' ";
$emailresult = $conn->query($emailsql);
$emailcheck = mysqli_num_rows($emailresult);

$checkNumSql = "SELECT * FROM admin WHERE num = '$num' ";
$checkNumQuery = $conn->query($checkNumSql);
$checkNumResult =  mysqli_num_rows($checkNumQuery);

 
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

$fileExt = explode('.', $fileName);
$fileActualExt =strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png', 'bmp');

	if(empty($file)){
		if($emailcheck === 0){
			if($checkNumResult === 0){
				$addSql = "INSERT INTO admin (`id`, `fname`, `lname`, `mname`, `email`, `pwd`, `num`, `position`, `avatar`, `type`)
							VALUES ('', '$fname', '$lname', '$mname', '$email', '$pwd', '$num', '$pos', 'default.png', '1');";
				$addRun = mysqli_query($conn, $addSql);
				header('Location:?add=success');
			}else{
				header("Location:?error=number");
			}
		}else{
			header("Location:?error=email");
		}
	}elseif(!empty($file)){
		if($emailcheck === 0){
			if($checkNumResult === 0){
				if(in_array($fileActualExt, $allowed)){
					if($fileError === 0){
						if($fileSize < 10000000){
							$fileNameNew = uniqid('', true).".".$fileActualExt;
							$fileDestination = 'img/admin/'.$fileNameNew;
							move_uploaded_file($fileTmpName, $fileDestination);
							$addSql = "INSERT INTO admin (`id`, `fname`, `lname`, `mname`, `email`, `pwd`, `num`, `position`, `avatar`, `type`)
									   VALUES ('', '$fname', '$lname', '$mname', '$email', '$pwd', '$num', '$pos', 'admin/$fileNameNew', '1');";
							$addRun = mysqli_query($conn, $addSql);
							header('Location:?add=success');
						}else{
							header('Location:?error=filesize');
						}
					}else{
						header('Location:?error=fileupload');
					}
				}else{
					header('Location:?error=filetype');
				}
			}else{
				header("Location:?error=num");
			}
		}else{
			header("Location:?error=email");
		}
	}



}

if(isset($_POST['editBtn']) ){

$id = $_SESSION['admin'];

$fname = ucfirst(mysqli_real_escape_string($conn, $_POST['editFname']));
$lname = ucfirst(mysqli_real_escape_string($conn, $_POST['editLname']));
$mname = ucfirst(mysqli_real_escape_string($conn, $_POST['editMname']));
$email = mysqli_real_escape_string($conn, $_POST['editEmail']);
$pwd = mysqli_real_escape_string($conn, $_POST['editPwd']);
$num = mysqli_real_escape_string($conn, $_POST['editNum']);
$pos = mysqli_real_escape_string($conn, $_POST['editPos']);

$emailsql = "SELECT * FROM admin WHERE email = '$email' ";
$emailresult = $conn->query($emailsql);
$emailcheck = mysqli_num_rows($emailresult);

$checkNumSql = "SELECT * FROM admin WHERE num = '$num' ";
$checkNumQuery = $conn->query($checkNumSql);
$checkNumResult =  mysqli_num_rows($checkNumQuery);






if($emailcheck == 1){
	if($email == $fetchEmail){
		if($checkNumResult == 1){
			if($num == $fetchNum){
				$editSql = "UPDATE admin SET fname = '$fname', lname = '$lname', mname = '$mname', email = '$email', pwd = '$pwd', num = '$num', position = '$pos' WHERE id = '$id'";
				$editQuery = $conn->query($editSql);
				header('Location:?edit=success');
			}else{
				header('Location:?error=number');
			}
		}else{
			if($checkNumResult == 0){
				$editSql = "UPDATE admin SET fname = '$fname', lname = '$lname', mname = '$mname', email = '$email', pwd = '$pwd', num = '$num', position = '$pos' WHERE id = '$id'";
				$editQuery = $conn->query($editSql);
				header('Location:?edit=success');
			}else{
				header('Location:?error=number');
			}
		}
	}else{
		header('Location:?error=email');
	}
}else{
	if($emailcheck == 0){
		if($checkNumResult == 0){

		}else{
			if($checkNumResult == 1){
				if($num == $fetchNum){
					$editSql = "UPDATE admin SET fname = '$fname', lname = '$lname', mname = '$mname', email = '$email', pwd = '$pwd', num = '$num', position = '$pos' WHERE id = '$id'";
					$editQuery = $conn->query($editSql);
					header('Location:?edit=success');
				}else{
					header('Location:?error=number');
				}
			}else{
				header('Location:?error=number');
			}
		}
	}else{
		header('Location:?error=email');
	}
}

}


if(isset($_POST['btnImg'])){

	$id = $_SESSION['admin'];

	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	$file = $_FILES['file'][''];

	$fileExt = explode('.', $fileName);
	$fileActualExt =strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'bmp');


	if(in_array($fileActualExt, $allowed)){
					if($fileError === 0){
						if($fileSize < 100000000){
							
							$fileNameNew = md5($fileName).".".$fileActualExt;

							$fileDestination = 'img/admin/'.$fileNameNew;
							move_uploaded_file($fileTmpName, $fileDestination);
							$addSql = "UPDATE admin SET avatar = 'admin/$fileNameNew' WHERE id = '$id' ";
							$addRun = mysqli_query($conn, $addSql);
							header('Location:?edit=success');
						}else{
							header('Location:?error=filesize');
						}
					}else{
						header('Location:?error=fileupload');
					}
				}else{
					header('Location:?error=filetype');
				}


	
}
?>