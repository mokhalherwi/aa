<?php
   $myemail = "abc@demo//.com";

   $myemail = filter_var($myemail, FILTER_SANITIZE_EMAIL);
   echo $myemail;
?>