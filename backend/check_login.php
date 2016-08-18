<?php
header('Content-Type: text/html; charset=utf-8');
include("include/connect.php");
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];
if ($user == ""){
    echo "please filled in the blank user";
} else if ($pass == ""){
    echo "please filled in the blank pass";
} else {
    $check_log = mysql_query("SELECT * FROM user_itcamp WHERE user_id ='$user' and user_pass ='$pass' ");
    $num = mysql_num_rows($check_log);
    if ($num <= 0){
        exit ("<script> alert('invaild username or invaild password');
	  window.location = 'login.html';
	  </script>");
    }
    else 
        exit("<script> window.location = 'success.html'; </script>");
}

?>