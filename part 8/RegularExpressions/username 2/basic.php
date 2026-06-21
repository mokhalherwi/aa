<?php
$s1 = $_POST['username'];

	if(preg_match( "/^[A-Z][a-z]+$/" , $s1))
	
	{  echo "<h3 style='color:blue'> Username valid </h3>";	}
	else
	{  echo "<h3 style='color:Red'>Username not valid</h3>";}
?>