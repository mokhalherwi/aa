<?php
$s1 = $_POST['username'];

if (preg_match( "/^77\d{1}-\d{3}-\d{3}$/" , $s1))

{  echo "<h3 style='color:blue'> Mobile Number valid</h3>";}
else
{ echo "<h3 style='color:Red'> Mobile Number not valid</h3>"; } ?>