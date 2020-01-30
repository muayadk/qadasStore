
<?php 
include('site.inc.php');   

if(isset($_POST['customer']))
{
	$customer_name=$_POST['customer_name'];
	$customer_address=$_POST['customer_address'];
	$customer_phone=$_POST['customer_phone'];
	$customer_email=$_POST['customer_email'];
    $confirmpass=$_POST['confirmpass'];
	$password=$_POST['password'];
	
	$check=true;
	
	if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$customer_email)) { 
	    $check=false;
		 echo'<center style="background-color:red; width: 930px; height: 50px;"> اكتب الايميل بشكل صحيح</center>';
		   echo"<script> alert('الايميل مكتوب بطريقة خاطية')</script>";
		} 
		
	
	elseif( $confirmpass!=$password)
	{
		    $check=false;
			
			 echo'<center style="background-color:red; width: 930px; height: 50px;"> كلمة السر غير متطابقتين</center>';
			   echo"<script> alert('كلمة السر غير مطابقة ')</script>";
	}
	
	else
	{
		
   $sql="INSERT INTO customer(customer_name,customer_address,customer_phone,customer_email,password,confirmpass) 
    VALUES ('$customer_name','$customer_address','$customer_phone','$customer_email','$password','$confirmpass')";
   $query=mysqli_query($con,$sql);
   
   if ($query)
   {
	   echo'<center style="background-color:green; width: 930px; height: 50px;"> okay add</center>';
	  echo"<script> alert('okay add')</script>";
	   header('location:index.php');
      
  }

   else{
          echo'<center style="background-color:red; width: 930px; height: 50px;"> failler</center>';
	          echo"<script> alert('فشل اعد المحاولة')</script>";  
            header('location:index.php');			  
		
      }
	  
	}
	
	
}	
?>






		