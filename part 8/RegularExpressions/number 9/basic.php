<?php
$s1 = $_POST['username'];

if (preg_match( "/^\d{9}$/" , $s1))

{  echo "<h3 style='color:blue'> Mobile Number valid</h3>";}
else
{ echo "<h3 style='color:Red'> Mobile Number not valid</h3>"; } ?>