<?php

include 'inc/session.php';

include 'inc/utilities.php';

if($fetchAcc == 0){
	include 'system_admin.php';
}else{
	include 'system_user.php';
}


?>