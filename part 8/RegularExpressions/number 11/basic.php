<?php
$s1 = $_POST['username'];

if (preg_match( "/^([1-9]|10)$/" , $s1))

{  echo "<h3 style='color:blue'> Number valid</h3>";}
else
{ echo "<h3 style='color:Red'> Number not valid</h3>"; } ?>