<?php include('session.php');
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../css/responsive.css">	
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-rtl.min.css">
<link rel="stylesheet" href="../css/fontawesome.min.css">





<!--<link rel="stylesheet" type="text/css" href="/style.css" media="screen" />-->

<style>

.main-sidebar{
	padding-top:50px;
 
	    position: fixed;
	top:0;
	right:0;
	height:100%;
	width:230px;
	z-index:1;
	background-color: #c85a5a;
	


}


.main-sidebar .sidebar ul.navig {
    /*background-color: #ddd;*/
    list-style: none;
    margin: 0;
    padding: 0;
}

.main-sidebar .sidebar ul.navig li {
    padding: 10px;
    border: 1px solid #ccc;
}

.main-sidebar .sidebar ul.navig li :hover{

   background-color:#ccc;
}
.content-wrapper{
        min-height:400px;
	margin-top:50px;
	/*background-color:#eee;*/
}

.content-wrapper .content-header{
	border-bottom :1px solid #ccc;
	margin-bottom :10px;
	padding-bottom:5px;
}


.content-wrapper .content-header h1{
margin:0;
}


.content-wrapper .content {
	border :1px solid #ccc;
	/*min-height:842px;*/
}




.content-wrapper {
		margin-right:235px;
		padding:10px;
	 z-index:1;
	
}

.has-mini-sidebar .main-sidebar {
	width:50px;

}

.has-mini-sidebar .content-wrapper,
.has-mini-sidebar {
	
	margin-right:50px;
}

@media screen and (max-width :767px)
{
	.main-sidebar {
		display :contents;
	}
	
	.has-mini-sidebar .main-sidebar {
		display :contents;
		   margin-top:50px;
		
	}
	
	.content-wrapper
	{
		padding:0;
		margin-right:0;
	}
	
	


}



</style>
   </head>
   <body>

  <header>

	 
<center><h1>مدير الموقع</h1> </center>
	
</header>
 <aside class="main-sidebar"> 
 
 <section class="sidebar"> 
  <ul class="navig"> 
	
  
<li>
<button class="btn btn-default btn-lg btn-block"> <a href="index.php" > الرئيسية</a></button>
</li>
	

	  <li >
	<button class="btn btn-default btn-lg btn-block"> <a href="?sw=addproduct"> 
	 ادارة المنتجات
  </a></button>
	   </li>
	
  
	
	  <li >
	   <button class="btn btn-default btn-lg btn-block" ><a href="?sw=addcatogry">
  ادارة الاصناف
  </a>
	 </button>  </li>
	




<li  > <button class="btn btn-default btn-lg btn-block"> <a href="logout.php"> خروج </a> </button> </li>
                                                                                                                                         

   </ul>
</section>
   </aside>
  

<div class="content-wrapper">

<div class="content"> 
 
  
    
   <?php
   if(isset($_GET['sw'])){
   include($_GET['sw'].".php");
   }
   
   ?>
  </div>
</div>








  


<script src="../js/jquery-3.4.1.min.js"> </script>
<script src="../js/jquery-1.10.2.min.js"> </script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/puretomuayad.js"></script>


   </body>
   </html>