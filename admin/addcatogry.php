<html dir="rtl">
<head>
</head>


<body style="font-family: 'Cairo', sans-serif; font-size:16px;">

	<?php

include('../site.inc.php'); 
if(isset($_POST['catogry']))
{ 	
	$cat_name=$_POST["cat_name"];
	echo$cat_name;
	$sql="INSERT INTO categories (cat_name) VALUES ('$cat_name')";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo'<center style="background-color:green;"> okay</center>';
	}
	else
	{
			echo'<center style="background-color:red;"> none</center>';
	}
}
?>
	
	<form action="" method="post">
	
		<div class="form-group">

	  <div class="col-md-10 col-xs-10">
	   <input type="text" id="cat_id" name="cat_name" class="form-control"> 
	   <br>
	    <button type="submit" name="catogry" class=" btn btn-primary btn-control " > انشاء جديد</button>
	   </div>
	  
		 <label class="control-label col-md-2 col-xs-2">أسم الصنف</label>
	  </div>

   </form>
	

</body>
</html>


	