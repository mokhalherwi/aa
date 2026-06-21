<?php
$s1 = $_POST['username'];


if (preg_match(" /^[A-Z][a-z]+(\s[A-Z][a-z]+)*$/", $s1))
	
    {  echo "<h3 style='color:blue'>Usename valid</h3>";}
    else
    { echo "<h3 style='color:Red'>Usename not valid</h3>"; }
?>

