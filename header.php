<?php session_start();
include('site.inc.php');
 ?>
<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qadas</title>

  
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylebody.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
	
	
	 <script src="js/jquery-1.10.2.min.js"></script>
				
		 <script src="js/jquery-3.3.1.min.js"></script>
				
	   <script src="js/bootstrap.min.js"></script>
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
				
                    <div class="user-menu">
                        <ul>
                            <li><a href="#exampleModal" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-user"></i> حسابي</a>
							
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="exampleModalLabel"> تسجيل الاشتراك</h4>
						  </div>
					  <div class="modal-body">
						   
					
						<form  action="customer.php" method="post">
						 <div class="form-group">
						   <label> الاسم </label>
							 
							<input type="text" name="customer_name" class="form-control" placeholder="name" required style="color:#000;">         
							</div>
						<div class="form-group">
						<label>العنوان :</label>
						
						<input type="text" name="customer_address" class="form-control" placeholder="address" >
					  
					  </div>
					  	<div class="form-group">
						 <label>التلفون :</label>
						  <td class="">	 
						   <input type="text"  name="customer_phone" class="form-control">         
						 </div>
						
					<div class="form-group">
						 <label>البريد الالكتروني :</label>
						 
						   <input type="text" name="customer_email" placeholder="email" class="form-control" required>                   
						  </div>
						
							<div class="form-group">
							<label>كلمة السر :</label>
						
							<input type="password" name="password" class="form-control password"  required style="color:#000;">                   
							</div>
						 
				   <div class="form-group">
						 <label>تاكيد كلمة السر :</label>
							
							<input type="password" name="confirmpass" class="form-control confirmpass" required style="color:#000;">                   
						 </div>
					  	<div class="form-group">	
						
				
							&nbsp; &nbsp;							  
							  <button type="submit" name="customer" class="form-control btn btn-primary " >تسجيل الاشتراك</button>
							 
						 </div>
					</form>
					

						   
						   
				     	  </div>
						  
						</div>
					  </div>
					</div>


			
			

							</li>
							
                        
                            <li><a href="cart.php"><i class="fa fa-user"></i> السلة</a></li>
                           
                          <li>
							<a href="#exampleModal2" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"><i class="fa fa-user"></i> الادمن</a>
							
								<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="exampleModalLabel2"> تسجيل الدخول</h4>
									  </div>
									<div class="modal-body">
									
									 <div class="card-body">
											<h5 class="card-title text-center">تسجيل الدخول</h5>
											<form class="form-signin" method="get" action="checklogin.php">
											  <div class="form-label-group">
											   <label for="inputEmail">اسم المستخدم</label>
												<input name="myusername" type="username"  id="myusername" class="form-control" placeholder="اسم المستخدم" required autofocus>
											   
											  </div>

											  <div class="form-label-group">
												   <label for="inputPassword">كلمة السر</label>
												<input type="password" name="mypassword"  id="myPassword" class="form-control" placeholder="كلمة المرور" required>
										   
											  </div>
												<hr class="my-4">
											  <button class="btn btn-lg btn-primary btn-block text-uppercase"  name="submit_login" value="دخول" type="submit">دخول </button>
										 
										   
											</form>
										  </div>
							
							
							   </div>
							 </div>
							</div>
						</div>
					</li>
                        
						  <li>
							<a href="#exampleModal3" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo"><i class="fa fa-user"></i> تسجيل الدخول</a>
							
								<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="exampleModalLabel3"> دخول الزبون للموقع</h4>
									  </div>
									<div class="modal-body">
									
									 <div class="card-body">
											<h5 class="card-title text-center">تسجيل دخول الزبون</h5>
											<form class="form-signin" method="get" action="checklogin.php">
											  <div class="form-label-group">
											   <label for="inputEmail">البريد الالكتروني</label>
												<input name="myusername" type="username"  id="myusername" class="form-control" placeholder="email@gmail.com" required autofocus>
											   
											  </div>

											  <div class="form-label-group">
												   <label for="inputPassword">كلمة السر</label>
												<input type="password" name="mypassword"  id="myPassword" class="form-control" placeholder="كلمة المرور" required>
										   
											  </div>
												<hr class="my-4">
											  <button class="btn btn-lg btn-primary btn-block text-uppercase"  name="costmer_login" value="دخول" type="submit">دخول </button>
										 
										   
											</form>
										  </div>
							
							
							   </div>
							 </div>
							</div>
						</div>
					</li>
                        	<li class="nav-item" style="float:left;"> <?php  
						      if(isset($_SESSION['customer_id']))
								{
									
									
									echo"<a href='logout.php' class='link-item'>خروج </a>";
								} 
								?>
								</li>
						
						</ul>
                    </div>
                </div>
              
            </div>

			
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h3 style="color:  #000;font: normal 36px 'Open Sans', cursive;margin: 0;"> ستار<span style="color:  lightseagreen;">تكنولوجي</span></h3>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">السلة - <span class="cart-amunt">
						
						$<?php if(!empty($_SESSION['amount']))
						{ 
					        $a=$_SESSION['amount'];
						          echo$a; 
						}
							?>
						</span> <i class="fa fa-shopping-cart"></i>
						<span class="product-count"><?php $c=count($_SESSION['cart']);echo$c;?></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">الرئيسية</a></li>
                        <li><a href="productall.php">كل المنتجات</a></li>
                       
                
                
                        <li>  
             
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                         

                            <li class="dropdown dropdown-big">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#">الاصناف الرئيسية </a>
							
                                <ul class="dropdown-menu">
									<?php 
										include('site.inc.php');

										$sql="select * from categories ";

										$query=mysqli_query($con,$sql);

										while($row=mysqli_fetch_array($query))
										{
											
										?>
                                    <li>  
									<a href="item_category.php?cat=<?php echo$row['cat_id']; ?>">
											<?php echo $row['cat_name']; ?> </a>
											</li>
										<?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
               
				</li>
                   
                        <li><a href="#">تواصل معنا</a></li>
					
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->