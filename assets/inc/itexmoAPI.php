<?php

//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number,$message,$apicode){
$url = 'https://www.itexmo.com/php_api/api.php';
$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
$param = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($itexmo),
    ),
);
$context  = stream_context_create($param);
return file_get_contents($url, false, $context);}
//##########################################################################


$warn = $notice = 0;  
function f() { 
  global $warn, $notice; 
  $argv = func_get_args(); 
  switch($argv[0]) { 
    case E_WARNING: echo "<script>window.close();</script>"; break; 
    case E_NOTICE: echo "<script>window.close();</script>"; break; 
  }
}
set_error_handler('f', E_ALL);

?>