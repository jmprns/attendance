<?php


  include 'db.php';
  include 'smsGateway.php';

  $smsCounterSql = "SELECT * FROM sms_server WHERE status = '0'";
  $smsCounterQuery = mysqli_query($conn, $smsCounterSql);
  $smsCount = mysqli_num_rows($smsCounterQuery);

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


  if($connectionStatus == 1){

      if($smsCount == 0){
    header("refresh:60;url=smsServer.php");
  }else{

        $sms1Row = mysqli_fetch_assoc($smsCounterQuery);


        $fetchId = $sms1Row['id'];
        $fetchFname = $sms1Row['fname'];
        $fetchLname = $sms1Row['lname'];
        $fetchBar = $sms1Row['barcode'];
        $timestamp1 = $sms1Row['timestamp'];
        $timestamp2 = date("h:i:s A", $timestamp1);

        if($sms1Row['action'] == 0){
          $loginAct = 'TIME IN';
        }else{
          $loginAct = 'TIME OUT';
        }



        $smsGateway = new SmsGateway('wupgate@gmail.com', 'WesleyaN1946');
    
        $smsArray = array();
        $smsArraySql = "SELECT sms_id FROM sms_device";
        $smsArrayQuery = mysqli_query($conn, $smsArraySql);

        while($row = mysqli_fetch_assoc($smsArrayQuery)){
          $smsArray[] = $row['sms_id'];
          }

        $deviceID = $smsArray[mt_rand(0, count($smsArray) - 1)];

        $number = $sms1Row['number'];
        $message = "WUP AURORA ATTENDANCE MONITORING:\n \nPlease advise that ".$fetchFname." ".$fetchLname." was successfully ".$loginAct." in the university at ".$timestamp2.".\n \nThis is a generated text message. Do not reply.";

        $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID);


        if(!$result){

        }else{
          $editSql = "UPDATE attendance_o SET sms = '1' WHERE timestamp = '$timestamp1' AND barcode = '$fetchBar' ";
          $editQuery = mysqli_query($conn, $editSql);
          $delSql = "DELETE FROM sms_server WHERE id = '$fetchId' ";
          $delQuery = mysqli_query($conn, $delSql);
          header("refresh:5;url=smsServer.php");
        }





  }


  }




?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
    <style>
    body {
        background: white }
    section {
        background: black;
        color: white;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%) }
  </style>
</head>
<body>
    <section>
      <?php 
        if($connectionStatus == 1){
          if($smsCount == 0){
          echo '
            <h1>You have 0 pending Message</h1>
            <br>
            <p>The page will refresh to fetch the SMS in <span id="countdowntimer">5 </span> seconds.</p>
          ';
      }else{
           echo '
            <h1>You have '.$smsCount.' pending Message</h1>
            <br>
            <p align="center">Sending...</p>
            <p>The page will refresh to fetch the SMS in <span id="countdowntimer">5 </span> seconds.</p>
          ';
      }
    }else{
          echo "<h1>Snap! You are offline</h1>";
          echo "<h3>Please connect in the internet</h3>";
    }
          ?>
  </section>
  <script type="text/javascript">
    var timeleft = 5;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>
</body>
</html>
<?php

header("refresh:5;url=smsServer.php");

?>


