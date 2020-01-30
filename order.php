<?php session_start();

 if(isset($_GET['order']))
 {
include('site.inc.php');
	$cid='';
    if(!$_SESSION['customer_id'])
	{
		
	    echo "<script> alert('!!  الرجاء تسجيل الدخول ')</script>";
	     echo "<script> window.open('login.php','_Self')</script>";
         
	}
	
	else
		
	{      
		$cid=$_SESSION['customer_id'];
	    echo"hello :". $_SESSION['customer_id'];
	     /*echo "<script> alert('!! okay ,')</script>";
		 echo"<pre>";
        print_r($_SESSION['order']);
       echo"</pre>"; */
	 
	   foreach($_SESSION['order'] as $key=>$value)
	   {
		  $id=$value['id'];
		  $quantity=$value['quantity'];
		  $total=$value['total'];
		  
		 
		  $q="insert into orders(product_id,customer_id,quantity,total_price) values('$id','$cid','$quantity','$total')";
		  mysqli_query($con,$q) or die("غلط في ادخال البيانات");
		  
	   }
	   	unset($_SESSION['order']);
		unset($_SESSION['amount']);
	    echo"<script> alert('تم تقديم الطلب بنجاح ')</script>";
	 echo "<script> window.open('index.php','_Self')</script>";
         
	   
	}
	
	}
	
	?>