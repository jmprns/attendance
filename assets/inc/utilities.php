<?php

include 'inc/db.php';

$sessionKey = $_SESSION['admin'];


//FETCHING USERS


$usersSql = "SELECT * FROM users where id = '$sessionKey' ";
$userResult = $conn->query($usersSql);
$usersRow = $userResult->fetch_assoc();
$userId = $usersRow['id'];
$userLname = $usersRow['lname'];
$userFname = $usersRow['fname'];
$userMname = $usersRow['mname'];
$userBarcode = $usersRow['users_barcode'];
$userCard = $usersRow['card'];
$userCp = $usersRow['cp_num'];
$userDepart = $usersRow['department'];
$userGrade = $usersRow['grade'];


//FETCHING ADMIN DATA VIA SESSION

$fetchSql = "SELECT * FROM admin where id = '$sessionKey' ";
$fetchResult = $conn->query($fetchSql);
$fetchRow = $fetchResult->fetch_assoc();
$fetchFirst = $fetchRow['fname'];
$fetchMid = $fetchRow['mname'];
$fetchLast = $fetchRow['lname'];
$fetchEmail = $fetchRow['email'];
$fetchPwd = $fetchRow['pwd'];
$fetchNum = $fetchRow['num'];
$fetchPos = $fetchRow['position'];
$fetchImg = $fetchRow['avatar'];
$fetchAcc = $fetchRow['type'];




//FETCHING SYSTEM DATA

$systemSql = "SELECT * FROM system";
$systemResult = $conn->query($systemSql);
$systemRow = $systemResult->fetch_assoc();

$systemDB = $systemRow['db_name'];

$systemInstall = $systemRow['installed_date'];
$systemAdmin = $systemRow['admin'];
$systemLast = $systemRow['last_logged'];
$systemNum = $systemRow['number'];

if($systemRow['sms_mode'] == 0){
	$systemMode = "Offline";
}else{
	$systemMode = "Online";
}


// FETCHING TIME OF JUNIOR

$juniorFetchSql = "SELECT * FROM `time` WHERE id = '1' ";
$juniorFetchResult = $conn->query($juniorFetchSql);
$juniorFetchRow = $juniorFetchResult->fetch_assoc();
$juniorFetchType = $juniorFetchRow['type'];
$juniorFetchMTIF = $juniorFetchRow['mtif'];
$juniorFetchMTIS = $juniorFetchRow['mtis'];
$juniorFetchMTOF = $juniorFetchRow['mtof'];
$juniorFetchMTOS = $juniorFetchRow['mtos'];
$juniorFetchATIF = $juniorFetchRow['atif'];
$juniorFetchATIS = $juniorFetchRow['atis'];
$juniorFetchATOF = $juniorFetchRow['atof'];
$juniorFetchATOS = $juniorFetchRow['atos'];


// FETCHING TIME OF SENIOR

$seniorFetchSql = "SELECT * FROM `time` WHERE id = '2' ";
$seniorFetchResult = $conn->query($seniorFetchSql);
$seniorFetchRow = $seniorFetchResult->fetch_assoc();
$seniorFetchType = $seniorFetchRow['type'];
$seniorFetchMTIF = $seniorFetchRow['mtif'];
$seniorFetchMTIS = $seniorFetchRow['mtis'];
$seniorFetchMTOF = $seniorFetchRow['mtof'];
$seniorFetchMTOS = $seniorFetchRow['mtos'];
$seniorFetchATIF = $seniorFetchRow['atif'];
$seniorFetchATIS = $seniorFetchRow['atis'];
$seniorFetchATOF = $seniorFetchRow['atof'];
$seniorFetchATOS = $seniorFetchRow['atos'];


// FETCHING TIME OF COLLEGE

$collegeFetchSql = "SELECT * FROM time WHERE id = '3' ";
$collegeFetchResult = $conn->query($collegeFetchSql);
$collegeFetchRow = $collegeFetchResult->fetch_assoc();
$collegeFetchType = $collegeFetchRow['type'];
$collegeFetchMTIF = $collegeFetchRow['mtif'];
$collegeFetchMTIS = $collegeFetchRow['mtis'];
$collegeFetchMTOF = $collegeFetchRow['mtof'];
$collegeFetchMTOS = $collegeFetchRow['mtos'];
$collegeFetchATIF = $collegeFetchRow['atif'];
$collegeFetchATIS = $collegeFetchRow['atis'];
$collegeFetchATOF = $collegeFetchRow['atof'];
$collegeFetchATOS = $collegeFetchRow['atos'];


?>