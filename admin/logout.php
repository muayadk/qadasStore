<?php
   session_start();
   
   if(session_destroy()) {
   	 echo "<script>window.open('../index.php','_self')</script>";
   }
?>