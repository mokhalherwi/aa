<?php
$s1 = $_POST['username'];

if (preg_match("/^[A-Z][a-z]+\s$/", $s1))
	
	{
	echo "<i><h3 style='color:blue'>the Name <u>$s1</u>Contains 
		  first a UpperCase letter and after that LowerCase letters 
		  and WhiteSpaces</h3></i>";		
	}
	else
	{
	echo "<h3 style='color:Red'>the Name <u>$s1 does not</u> Contains 
		  first a UpperCase letter and after that LowerCase letters  
		  and WhiteSpaces</h3>";
	}
?>
