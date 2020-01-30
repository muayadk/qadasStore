<?php   session_start();
if(isset($_GET['submit_login'])) 
  {
    include('site.inc.php');
 
 // username and password sent from form 
  $myusername=$_GET['myusername']; 
  $mypassword=$_GET['mypassword']; 
  echo $myusername;
 // To protect MySQL injection (more detail about MySQL injection)
  $myusername = stripslashes($myusername);
  $mypassword = stripslashes($mypassword);
  //$myusername = mysqli_real_escape_string($myusername);
  //$mypassword = mysqli_real_escape_string($mypassword);
  
  $sql="SELECT * FROM user WHERE user_name='$myusername' and user_pass ='$mypassword'"; 
  $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($result);
      $myusername =$row['user_name'];

 
  // Mysql_num_row is counting table row
   $count=mysqli_num_rows($result);
   // If result matched $myusername and $mypassword, table row must be 1 row
   if($count==1)
     { 

	 // Register $myusername, $mypassword and redirect to file "login_success.php"
     
   
    $_SESSION['checkuser']= $myusername;
	 
	echo "You're successfully login!')".$_SESSION['checkuser'];
         echo "<script>alert('okay session')</script>";
	//header('Location:admin/index.php');
           echo "<script>window.open('admin/index.php','_self')</script>";

	 } 
	 else { 
              echo "Wrong Username or Password"; 
	      echo "<script>alert('You're fail ogin!')</script>";
	 
           	// header('Location:login.php');
	      echo "<script>window.open('index.php','_self')</script>";
	
	 }

	 
	} 
	
	
	
	
if(isset($_GET['costmer_login'])) 
  {
    include('site.inc.php');
 
 // username and password sent from form 
  $myusername=$_GET['myusername']; 
  $mypassword=$_GET['mypassword']; 
  echo $myusername;
 // To protect MySQL injection (more detail about MySQL injection)
  $myusername = stripslashes($myusername);
  $mypassword = stripslashes($mypassword);
  //$myusername = mysqli_real_escape_string($myusername);
  //$mypassword = mysqli_real_escape_string($mypassword);
  
  $sql="SELECT * FROM customer WHERE customer_email='$myusername' and password ='$mypassword'"; 
  $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($result);
      $myusername =$row['customer_id'];
       
 
  // Mysql_num_row is counting table row
   $count=mysqli_num_rows($result);
   // If result matched $myusername and $mypassword, table row must be 1 row
   if($count==1)
     { 
  
	 // Register $myusername, $mypassword and redirect to file "login_success.php"
     
   
      
        $_SESSION['customer_id']= $myusername;
	 
	echo "You're successfully login!')".$_SESSION['customer_id'];
         echo "<script>alert('okay session')</script>";
	//header('Location:admin/index.php');
           echo "<script>window.open('productall.php','_self')</script>";

	 } 
	 else { 
              echo "Wrong Username or Password"; 
	      echo "<script>alert('You're fail ogin!')</script>";
	 
           	// header('Location:login.php');
	      echo "<script>window.open('index.php','_self')</script>";
	
	 }

	 
	} 
	
	
	
	
	
	
	
     ob_end_flush();
	 ?>