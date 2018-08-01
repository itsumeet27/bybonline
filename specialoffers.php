<?php
include('includes/header.php');
?>
<head>  
	<style type="text/css">
		html, body{
        		width: 100%;
  				overflow-x: hidden;
			}

 input[
type="submit"]{
  border:none;
  outline:none;
  border-radius:0px;
  color:#fff;
  background:#E24425;
  font-size:17px;
  font-weight:600;
  text-transform:uppercase;
  padding: 0.6em 0.9em;
}
 input[
type="submit"]:hover{
  background:#5BBD50;
}
	</style>     
<!-- //for-mobile-apps -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<!-- //js -->
<!-- for-gallery-rotation -->
<script src="js/modernizr.custom.97074.js"></script>
<!-- //for-gallery-rotation -->
<!-- FlexSlider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
<!-- //FlexSlider -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});
</script>
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">
</head>
<!-- Main Body -->
<hr>
<h1 align = "center" id="user-head">Special Offers</h1>
<hr>

<!-- cake category -->
<div id="gallery" class="gallery">
	<div class="container">
		<div class="gallery-grids">
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="images/55.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/55.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>					
							</div>
						</a><br>
						<center><input type="submit" value="Grab It"></center>
					</li>
					<li>
						<a href="images/66.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/66.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a><br>
						<center><input type="submit" value="Grab It"></center>
					</li>
					<li>
						<a href="images/77.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/77.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a><br>
						<center><input type="submit" value="Grab It"></center>
					</li>
					<li>
						<a href="images/88.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/88.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a><br>
						<center><input type="submit" value="Grab It"></center>
					</li>
					<li>	
						<a href="images/99.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/99.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a><br>
						<center><input type="submit" value="Grab It"></center>
					</li>
					<li>
						<a href="images/55.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/55.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a><br>
						<center><input type="submit" value="Grab It"></center>
					</li>
					<li>
						<a href="images/66.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/66.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a><br>
						<center><input type="submit" value="Grab It"></center>
					</li>
					<li>
						<a href="images/77.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/77.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a><br>
						<center><input type="submit" value="Grab It"></center>
					</li>
					<li>
						<a href="images/88.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/88.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a><br>
						<center><input type="submit" value="Grab It"></center>
					</li>					
				</ul>
			</section>
			<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
			<script type="text/javascript">
				$(function() {
				
					$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
				});
			</script>
		</div>
	</div>
</div><br>
<?php
include('includes/footer.php');
?>