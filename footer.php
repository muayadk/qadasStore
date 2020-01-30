<footer class="footer-distributed">

			<div class="footer-left">

				<h3>ستار<span>تكنولوجي</span></h3>

				<p class="footer-links">
					<a href="#" class="link-1">الرئسية</a>
					
			
				
					<a href="#">من نحن</a>
					
					
					
					<a href="#">تواصل معنا</a>
				</p>

				<p class="footer-company-name">Asia© 2019</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>299 Eng. </span> Asia</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+966............</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@asia@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>عن متجرنا</span>
				نقدم لكم اصناف وباسعار منافسة ومعقولة زورونا . 
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
   
   </div>
   
   <!-- The content of your page would go here. -->



<script>

	$(document).ready(function(){

		var showHeaderAt = 150;

		var win = $(window),
				body = $('body');

		// Show the fixed header only on larger screen devices

		if(win.width() > 400){

			// When we scroll more than 150px down, we set the
			// "fixed" class on the body element.

			win.on('scroll', function(e){

				if(win.scrollTop() > showHeaderAt) {
					body.addClass('fixed');
				}
				else {
					body.removeClass('fixed');
				}
			});

		}

	});

</script>

   
   </body>
   </html>