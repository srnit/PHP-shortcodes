<?php
require "coonectmysql.php";
$user_ip=$_SERVER['REMOTE_ADDR'];
function ip_exist($ip)
{
	global $user_ip;
	$query="select * from `hit_ips` where `ips`='$ip'";
	if(@$query_run=mysql_query($query))
	{
		if(mysql_num_rows($query_run)==0)
			return 1;
	}
	else if (mysql_num_rows($query_run)>=1) {
		# code...
		return 0;
	}
	else
	{
		echo mysql_error();
	}	
}
function update_ips($user_ip)
{
	$query="insert into `hit_ips` values('$user_ip')";
	if(@$query_run=mysql_query($query))
	{
		echo "ok";
	}
}
function update_count()
{
	$query="SELECT `Hit_Count` FROM `hit_counts` WHERE 1";
	if($query_run=mysql_query($query))
	{
		$result=mysql_result($query_run,0,'Hit_Count');
		$result_inc=$result+1;

		echo $result_inc;

		if(@$query_run=mysql_run("update `hit_counts` set `Hit_Count`='$result'"))
		{
			echo "count updated";
		}
	}
}
if(ip_exist($user_ip))
{
	update_ips($user_ip);
	update_count();


}

?>