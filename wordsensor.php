
<?php
$find=array('sexy','sex','fuck');
$replace= array('s**y','s*x','f**k');
if(isset($_GET['user_input']) && !empty($_GET['user_input']))
{
//echo "works";
$user_input=$_GET['user_input'];

echo str_ireplace($find, $replace, $user_input);

}
else
echo "feedback required";

?>
<form method="get" action=" ">
	<textarea name='user_input' row='20' cols="30"></textarea>
	<input type="submit" name="sub" value="submit">
</form>
