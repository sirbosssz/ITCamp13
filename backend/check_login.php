<?php
header('Content-Type: text/html; charset=utf-8');
include("connect.php");
session_start();
$usersame = $_POST[username];
$password = $_POST[password]
if($username == ""){
    echo "โปรดกรอก Username";
} else if ($password == ""){
    echo "โปรดกรอก Password";
} else {
    $check_log = mysql_query("select * from user_itcamp where user_id ='$username' and user_pass ='$password' ");
    $num = mysql_num_rows($check_log)
    if $num <= 0 {
        echo "Username หรือ Password อาจจะผิดกรุณา Login ใหม่อีกครั้ง <br /><a href='index.php'>Back</a>";
    }
}
?>