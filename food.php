<?php
require "coonectmysql.php";
$query="SELECT `id`, `name`, `calories`, `heleathy_unhealthy` FROM `food` WHERE  `heleathy_unhealthy`='h' AND `id`='2'";
if($query_run=mysql_query($query))
{
	if(mysql_num_rows($query_run)==NULL)
	{
         echo "empty result";
	}
	else
	{
	while($query_row = mysql_fetch_assoc($query_run))
	{
		$food=$query_row['name'];
		$calories=$query_row['calories'];
		echo $food."have".$calories."calories.<br>";
		
	}
}
}
else
echo mysql_error();

?>