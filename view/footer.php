		<!-- footer -->
		<footer>
			<div class="footer-top_agile_w3l">
				<div class="container">
						<div onclick="location.href='#" data-aos-offset="250" data-aos="fade-right" data-aos-duration="800" class="container" style="height:50%;float:left;width:50%;padding:0px;cursor:pointer;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.4647615256645!2d78.38328501537089!3d17.437455605947633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91588d57ddcd%3A0x75bd8a8c0c6516f5!2sArcesium+India+Private+Ltd!5e0!3m2!1sen!2sin!4v1565614414873!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="col-md-6 footer-grid_wthree_info" style="margin: auto">
							<h3>Contact us</h3>
							<p><b>Manufacturer and supplier of Granites, Tiles, Marbles, Slave & All kind of Abrasive</b></p>
							<p></p>
							<div class="container-fluid clearfix">
								<div class="container w3-text-white" style="height:25%;float:left;width:30%;cursor:pointer;">
									<h3>Sonu</h3>
									<h5><a href="#"><i class="fa fa-mobile"></i></a> 8742083636</h5>
									<h5><a href="#"><i class="fa fa-pencil-square"></i></a> sonumokama1997@gmail.com</h5>
								</div>
								<div class="container w3-text-white" style="height:25%;float:right;width:25%;padding:0px;cursor:pointer;">
									<h3>Hemraj</h3>
									<h5><a href="#"><i class="fa fa-mobile"></i></a>  6200268116</h5>
									<h5><a href="#"><i class="fa fa-pencil-square"></i> hemrajraj261@gmail.com</h5>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					<div class="wthree_copy_right">
						<p>&copy; Purvi Marble</p>
						<ul class="footer_list_icons w3-center" style="margin: auto">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
			</div>
		</div></footer>
		<!-- //footer -->
		<a href="#home" class="scroll" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!-- js -->
		<script type="text/javascript" src="<?php echo JS_PATH.'jquery-2.1.4.min.js'; ?>"></script>
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?php echo JS_PATH.'move-top.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo JS_PATH.'jquery.easing.min.js'; ?>"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- //end-smooth-scrolling -->
		<!-- smooth-scrolling-of-move-up -->
		<script type="text/javascript">
			$(document).ready(function() {
				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		<!-- //smooth-scrolling-of-move-up -->
		<script type="text/javascript" src="<?php echo JS_PATH.'darkbox.js'; ?>"></script>
		<script src="<?php echo JS_PATH.'wimmViewer.js'; ?>"></script>
		<script>
			$(function () {
				$('#slider1').WimmViewer({
					miniatureWidth: 100,
					miniatureHeight: 100
				});
			})
		</script>
    </body>
</html>