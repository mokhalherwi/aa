<?php
$s1 = $_POST['username'];

if (preg_match( "/^[a-z]+_\d{3,7}$/" , $s1))

	{ echo "<i><h3 style='color:blue'>the Name >>> $s1 is correct</h3></i>";}
	else
	{ echo "<h3 style='color:Red'>the Name >>> $s1 not valid</h3>";}
?>