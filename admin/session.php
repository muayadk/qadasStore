<?php
  include('../site.inc.php');

     session_start();

  
    $url_service="http://".$_SERVER['HTTP_HOST']."/ustora/";
    $user_check  ='';
 if(isset($_SESSION['checkuser']))
	{
   $user_check =$_SESSION['checkuser'];
   
   $ses_sql = mysqli_query($con,"SELECT * FROM user WHERE user_name='$user_check'");
   
   $row = mysqli_fetch_array($ses_sql);
       $user_check = $row['user_name'];
    
  
    }
	else
	{
           echo "<script> alert('failer login admin')</script>";
	   header('Location:'.$url_service.'index.php');
          die();
   }
?>