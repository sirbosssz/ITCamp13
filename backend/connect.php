<?php
$host = "localhost";
$user = "thaiappu_itcamp";
$pass = "3I5vOJJhGB";
$db_name = "thaiapppu_itcamp";


    mysql_connect($host,$user,$pass) or die ("DIE SAS");
    mysql_select_db($db_name) or die ("maijerDATABASEwoy");
    mysql_query("set names utf8");
?>