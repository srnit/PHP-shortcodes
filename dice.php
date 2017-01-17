<?php
if(isset($_POST['die']))
{
	$rand=rand("1","6");
	echo "you rolled <br>".$rand;
}

?>
<form method="post" action="dice.php">
	<input type="submit" name="die" value="roll a die">
</form>