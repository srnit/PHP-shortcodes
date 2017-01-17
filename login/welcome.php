<?php
session_start();
echo "Welcome ".$_SESSION["email"];
echo "<br>";
echo "<a href='logout.php'>logout</a>";
?>