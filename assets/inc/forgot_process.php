<?php
include 'db.php';


if(isset($_POST['btnFor'])){


function isConnectedInternet($domain) {
  $checkSMSGateway = @fsockopen($domain, 80, $errorno, $errstr, 10 );
  return (!$checkSMSGateway) ? FALSE : TRUE;
}

  $SMSDomain = 'smsgateway.me';

  if(isConnectedInternet($SMSDomain)){
    $connectionStatus = 1;
  }else{
    $connectionStatus = 0;
  }


  if($connectionStatus == 0){

  	header("Location:forgot.php?error=nointernet");

  }else{

  	$email = @mysqli_real_escape_string($conn, $_POST['email']);
	$cpnum = @mysqli_real_escape_string($conn, $_POST['cpnum']);

	//FETCHING ADMIN DATA

	$fetchSql = "SELECT * FROM admin where email = '$email' and num = '$cpnum' ";
	$fetchResult = $conn->query($fetchSql);
	$fetchCount  = mysqli_num_rows($fetchResult);

	if($fetchCount == 0){
		header("Location:forgot.php?error=invalid");
	}else{
		$fetchRow = $fetchResult->fetch_assoc();
		$fetchEmail = $fetchRow['email'];
		$fetchPwd = $fetchRow['pwd'];

		include 'smsGateway.php';

  		$smsGateway = new SmsGateway('wupgate@gmail.com', 'WesleyaN1946');

  		$smsArray = array();
        $smsArraySql = "SELECT sms_id FROM sms_device";
        $smsArrayQuery = mysqli_query($conn, $smsArraySql);

        while($row = mysqli_fetch_assoc($smsArrayQuery)){
          $smsArray[] = $row['sms_id'];
          }

        $deviceID = $smsArray[mt_rand(0, count($smsArray) - 1)];

        $number = $cpnum;
        $message = "WUP AURORA ATTENDANCE MONITORING PASSWORD RECOVERY:\nEmail:".$fetchEmail."\nPassword:".$fetchPwd."\nPlease do not show this to other. This is automated message. Do not reply.";
        $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID);
        if(!$result){
        	header("Location:forgot.php?error=sms");
        }else{
        	header("Location:login.php?recover=success");
        }
	}

	

  }




}



?>