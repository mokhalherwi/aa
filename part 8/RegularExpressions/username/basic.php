<?php
$s1 = $_POST['username'];

	if(preg_match( "/^[a-zA-Z ]*$/" , $s1))
	
	{  echo "<h3 style='color:blue'> Username valid </h3>";	}
	else
    {  echo "<h3 style='color:Red'>Username not valid</h3>";}