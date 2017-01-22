<?php
$con_error="connection error !";
$my_user="root";
$my_pass="nith";
$mysql_host="localhost";
$mysql_db="adatabase";

if(!@mysql_connect($mysql_host,$my_user ,$my_pass) || !@mysql_select_db($mysql_db))
{
	die($con_error);

}
else
echo "connected";

?>