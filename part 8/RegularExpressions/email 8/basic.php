<?php
$s1 = $_POST['username'];

if (preg_match( "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,5}$/" , $s1))

   { echo "<h3 style='color:blue'> $s1 is a valid email address</h3>";}
   else
   { echo "<h3 style='color:Red'>$s1 is NOT a valid email address</h3>"; }?>
?>