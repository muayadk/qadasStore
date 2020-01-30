
<?php include('header.php');


	if(isset($_GET['pd']))
	{
			$product_id=$_GET['pd'];
			require_once('site.inc.php');

			$sql="SELECT * FROM product where product_id='$product_id'";
			
			$query=mysqli_query($con,$sql);

		
	}

         
	
	
?>


  <div class="row">

 	<?php
 	foreach($query as  $p)
	{  
		?>

                            <div class="col-sm-6">
                                <div class="product-images" style="padding-right:50px; margin-right:50px; margin-top :50px;">
                                    <div class="product-main-img">
                                       
		             		 <?php   echo"
					  <img  src='img/".$p['image']."' class='img-responsive' />";
					  ?>
				
                                    </div>
                                    
                                   
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo$p['product_name']; ?> </h2>
                                    <div class="product-inner-price">
                                        <ins>$<?php echo$p['pro_buyprice'];?></ins> <del>$<?php echo$p['pro_price'];?></del>
                                    </div>    
                                    
									
									<!--send to item to cart session-->
                                    <form action="addcart.php"  method="get"class="cart">
                                        <div class="quantity">
										    <input type="hidden" name="product_id" value="<?php echo$product_id; ?>" />
											
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" max="10" step="1">
                                        </div>
                                        <button class="add_to_cart_button" name="save" type="submit">اضافة للسلة</button>
                                    </form>   
                                    <!--end form-->
									
									
                                    <div class="product-inner-category">
                                        <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>وصف المنتج </h2>  
                                                <p> <?php echo $p['product_discription']; ?> </p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

  			<?php } ?>
                        </div>
                        
                        	