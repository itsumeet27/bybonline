<?php
    include('includes/header.php');
?>
<!-- banner-bottom -->
	<div class="banner-bottom animated wow lightSpeedIn" data-wow-duration="1500ms" data-wow-delay="800ms">
		<ul id="flexiselDemo1">	
			<li>
				<a href="single.html"><div class="item item-sub">
					<div class="item1">
						<i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i>
						<h3>Cake</h3>
					</div>
					<div class="p-mask">
						<h4>Bake Your Bread</h4>
						<p>Content.</p>
						
					</div>
				</div></a>
			</li>
			<li>
				<a href="single.html"><div class="item item-sub1">
					<div class="item1">
						<i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i>
						<h3>Bread</h3>
					</div>
					<div class="p-mask">
						<h4>Bake Your Bread</h4>
						<p>Content</p>
					</div>
				</div></a>
			</li>
			<li>
				<a href="single.html"><div class="item item-sub2">
					<div class="item1">
						<i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i>
						<h3>Cookies</h3>
					</div>
					<div class="p-mask">
						<h4>Bake Your Bread</h4>
						<p>Content.</p>
					</div>
				</div></a>
			</li>
			<li>
				<a href="single.html"><div class="item item-sub3">
					<div class="item1">
						<i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i>
						<h3>Pastries</h3>
					</div>
					<div class="p-mask">
						<h4>Bake Your Bread</h4>
						<p>Content.</p>
					</div>
				</div></a>
			</li>
		</ul>
			<script type="text/javascript">
				$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				
			 });
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
<!-- //banner-bottom -->
<!-- banner-bottom-grids -->
	<div class="banner-bottom-grids">
		<div class="col-md-7 banner-bottom-grid-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h2><span>Happiness is</span></h2>
			<h1>the smell of freshly baked bread.</h1>
		</div>
		</div>
		<div class="col-md-5 banner-bottom-grid animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
			<img src="images/6.jpg" alt=" " class="img-responsive" />
			<div class="banner-bottom-grid1">
				<div class="banner-bottom-grid1-pos animated wow fadeInUpBig" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>I like to think of <span>bread as really </span> <i>Bland cake</i></h3>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	<div class="banner-bottom-grids">
		<div class="col-md-4 banner-bottom-grid-sub animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
			<img src="images/7.jpg" alt=" " class="img-responsive" />
			<div class="banner-bottom-grid-sub1">
				<div class="banner-bottom-grid-sub-pos">
					<h3><span>god gives us</span> the ingredients for our daily <i>Bread</i>
						but he expects us to do the <span>Baking !</span></h3>
				</div>
			</div>
		</div>
		<div class="col-md-8 banner-bottom-grid-left1 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="1000ms">
			<p>For it is we who must pray for our daily bread, and if he grants it to us, it is only through
				our labour, our skill and preparation</p>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //banner-bottom-grids -->
<?php 
	include('includes/footer.php');
?>