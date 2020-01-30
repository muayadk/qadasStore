<html dir="rtl">
<head>
<script>
     function ImageShow(imgeUpload, previewImage) {
            if (imgeUpload.files && imgeUpload.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(previewImage).attr('src', e.target.result);
                }
                reader.readAsDataURL(imgeUpload.files[0]);

            }
        }
    </script>
	
</head>

<body>


<?php 

 include('../site.inc.php');
   $update=false;
 
  $sql="SELECT * FROM product";
 $query=mysqli_query($con,$sql) or die();
 
if(isset($_POST['addproduct']))
{
	$product_name=$_POST['product_name'];
	$cat_id=$_POST['cat_id'];
	
	//$image=$_POST['image'];
	$pro_price=$_POST['pro_price'];
	$pro_buyprice=$_POST['pro_buyprice'];
	$pro_country=$_POST['pro_country'];
	$pro_date=$_POST['pro_date'];
	$pro_enddate=$_POST['pro_enddate'];
    $product_discription=$_POST['product_discription'];
	

		
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
	{
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else 
	{
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["image"]["name"]); // used to store the filename in a variable

   
  
   
	
		$sql="INSERT INTO product (product_name,product_discription,cat_id,image,pro_buyprice,pro_price,pro_country,pro_date,pro_enddate) 
		     VALUES ('$product_name','$product_discription','$cat_id','$image','$pro_buyprice','$pro_price','$pro_country','$pro_date','$pro_enddate')";
			 
	$query=mysqli_query($con,$sql);
	if($query)
	 {
	   echo"<script> alert('add item okay!!') </script>";
	        echo"<script> window.open('index.php') </script>";
	   }
	   else 
	   {
	    echo"<script> alert('add item failler!!') </script>";
	    echo"<script> window.open('index.php') </script>";
	   
	   }
	
	
	
}



	  if(isset($_GET['Delete']))
   {
	   $product_id=$_GET['Delete'];
	 
   
	   
	   $query=mysqli_query($con,"DELETE FROM product WHERE product_id='$product_id'") ;
	   if($query)
	   {
	   echo"<script> alert('delete item okay!!') </script>";
	      echo"<script> window.open('index.php') </script>";
	   }
	   else 
	   {
	    echo"<script> alert('delete item failler!!') </script>";
	      echo"<script> window.open('index.php') </script>";
	   
	   }
	   
	    
   }
   
    
 
     if(isset($_GET['Edit']))
   {
	   $product_id=$_GET['Edit'];
	  
	   $query=mysqli_query($con,"SELECT * FROM product WHERE product_id='$product_id'");
	 
		  if(count($query)==1)
		   {
			   $row=mysqli_fetch_array($query);
		   $product_name=$row['product_name'];
			$pro_price=$row['pro_price'];
			$pro_buyprice=$row['pro_buyprice'];
			$pro_country=$row['pro_country'];
			$pro_date=$row['pro_date'];
			$pro_enddate=$row['pro_enddate'];
			$product_discription=$row['product_discription'];
	        $cat_id=$row['cat_id'];
		   }
	     $update=true;
	       }
   
   if(isset($_POST['update']))
   {
	$product_id=$_POST['product_id'];
	$product_name=$_POST['product_name'];
	$cat_id=$_POST['cat_id'];
	
	//$image=$_POST['image'];
	$pro_price=$_POST['pro_price'];
	$pro_buyprice=$_POST['pro_buyprice'];
	$pro_country=$_POST['pro_country'];
	$pro_date=$_POST['pro_date'];
	$pro_enddate=$_POST['pro_enddate'];
    $product_discription=$_POST['product_discription'];
	

		
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). "تم.";
    } else {
        echo "Sorry,.";
    }

    $image=basename( $_FILES["image"]["name"]); // used to store the filename in a variable
    
	$sqlupdate="UPDATE product SET product_name='$product_name',product_discription ='$product_discription',cat_id='$cat_id' ,
	            image='$image' ,pro_buyprice='$pro_buyprice' ,pro_price='$pro_price' , pro_country='$pro_country' , pro_date ='$pro_date' , pro_enddate='$pro_enddate' WHERE product_id='$product_id'";
				
	$query=mysqli_query($con,$sqlupdate);
	if($query)
		   echo'<center class="alert-info"> تم التحديث بنجاح!! </center>';
	   else 
		   echo'<center class="alert-info"> فشل التحديث !!! </center>';
                				
   } 

 ?>





   
   <div class=" table table-rsponsive">
   <table class="table">
   <thead>
   <tr>
 
   <th> المنتج</th> 
    <th> الصورة</th> 
	 <th> سعر العرض</th> 
	  <th> سعر البيع</th> 
	  
	 
		<th colspan=2"> الحدث</th> 
   
   </tr>
   </thead>

      <?php while($row=mysqli_fetch_assoc($query)) { ?>
    <tr>
	<td> <?php echo$row['product_name'];  ?> </td>
	<td> <?php echo"<img  src='../img/".$row['image']."' width='100px' height='100px' class='img-responsive' />"; ?> </td>
	<td> <?php echo$row['pro_price'];  ?> </td>
	<td> <?php echo$row['pro_buyprice'];  ?> </td>

	
	<td> <a href="?sw=addproduct&&Edit=<?php echo$row['product_id'] ;?>"class="btn btn-primary" data-toggle="modal body" > تعديل  </a> </td>
	<td> <a href="?sw=addproduct&&Delete=<?php echo$row['product_id'] ;?>"  class="btn btn-danger"> حذف </a> </td>
	</tr>
	  <?php } ?>
   </table>
   </div>
  
  
  <?php
 pre_r(mysqli_fetch_assoc($query));
 
 function pre_r($array)
 {
	 echo'<pre>';
	print_r($array);
	 echo'</pre>';
	 
 }
 
 ?>
	 <?php if($update==true) :?>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">تحديث المنتج</button>
	<?php else : ?>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">اضافة منتج جديد</button>
	<?php endif; ?>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="exampleModalLabel">منتج جديد</h4>
		  </div>
		  <div class="modal-body">

 <div>
 
  <form action="" method="post"  enctype="multipart/form-data">
   <div class="form-group">
   	 
	   <img src="../Img/1.jpg" style="margin:10px;" height="200" width="200" id="Imagepreview" />
        <input type="file" name="image" id="image" onchange="ImageShow(this,document.getElementById('Imagepreview'))" value="تحميل صورة المنتج" class="form-control" >
        </div>
  
	   <div class="form-group">
	    <label >اسم المنتج</label>
		<input type="hidden" name="product_id" id="product_id" class="form-control" >
		<input type="text"  name="product_name"  value="<?php if($update==true){echo$product_name;} ?>" class="form-control">				
		</div>
  
  	   <div class="form-group">
		  <label > اسم الصنف </label>
		  <select name="cat_id" id="cat_name" tabindex="1" class="form-control">
				  <?php
						 $result=mysqli_query($con,"SELECT * FROM categories ");
				while($row=mysqli_fetch_array($result))
				{
				 echo" <option value='".$row['cat_id']."' > ".$row['cat_name'];
					echo "  </option>";
				   } ?>
				   
			   </select>
	         </div>
 
	    <div class="form-group">
		 <label > سعر البيع </label>
		 <input type="text"  name="pro_price"  value="<?php if($update==true) {echo $pro_price; }?>" class="form-control">
	     </div>
	 
		<div class="form-group">
	    <label > سعر الشراء </label>
		 <input type="text"   name="pro_buyprice"  value="<?php if($update==true) {echo$pro_buyprice;} ?>"  class="form-control">
	      </div>

		<div class="form-group">
         <label  >الدولة المصنعة</label>
		 <input type="text" name="pro_country" value="<?php if($update==true){echo$pro_country;} ?>"  class="form-control">
		  </div>
		
		<div class="form-group">
		 <label  > تاريخ الانتاج  </label>
		 <input type="date" name="pro_date" value="<?php if($update==true){echo$pro_date; }?>" class="form-control">
		  </div>
	
		<div class="form-group">
		 <label  > تاريخ الانتهاء </label>
		 <input type="date"  name="pro_enddate" value="<?php if($update==true){echo $pro_enddate;} ?>" class="form-control">
	      </div>
     
	  <div class="form-group"> 
		 <label >وصف المنتج</label>
		 <textarea  class = "form-control" rows="10" cols="50" name="product_discription"  value="<?php echo$product_discription; ?>" class="form-control"></textarea>
		    </div>
			
	        <div class="form-group"> 
			<?php if($update==true):
			?> 
			 <button type="submit" name="update" value="انشاء منتج جديد" class="btn btn-primary " >تحديث</button>
			
			  <?php else : ?>
			 
			    <button type="submit" name="addproduct" value="انشاء منتج جديد" class="btn btn-primary " >انشاء منتج جديد</button>
			  <?php endif;?>
	          </div>
		  </form>
		</div>
      </div>
  </div>
</div>
</div>



 
</body>
</html> 