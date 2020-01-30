<?php include('header.php'); ?>
<br> 
<br>

<br>



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
						
						<br>
						<br>
						<br>
<?php include('footer.php');  ?>

