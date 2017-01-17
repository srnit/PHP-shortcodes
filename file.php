<?php

if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	    //if(!(empty($name))
	    {
	       $handle=fopen("name.txt", "a");
	
	        fwrite($handle, $name."\n");
	          fclose($handle);
	           echo "current name in the file is";
                 $count=1;
	           $readin=file("name.txt");
	            $readin_count=count("name.txt");
	         foreach ($readin as $fname) {
	         	echo trim($fname)."<br>";//bug
	         	if($count<$readin_count)//bug
	         	{
	         		echo ",";//bug
	         	}
	         	$count++;

	         	# code...
	         }
	                   //{
		                //  echo $fname .",";
	                  }
}  

?>
<form method="post" action=" ">

Enter Name:	<input type="text" name="name">
<input type="submit" name="sub" value="Add">

</form>