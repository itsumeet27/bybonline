<?php
    include('includes/header.php');
?>

<head>
	<!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <style type="text/css">
			 .hovereffect {
			width: 100%;
			height: 100%;
			float: left;
			overflow: hidden;
			position: relative;
			text-align: center;
			cursor: default;
			}

			.hovereffect .overlay {
			position: absolute;
			overflow: hidden;
			width: 80%;
			height: 80%;
			left: 10%;
			top: 10%;
			border-bottom: 1px solid #FFF;
			border-top: 1px solid #FFF;
			-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
			transition: opacity 0.35s, transform 0.35s;
			-webkit-transform: scale(0,1);
			-ms-transform: scale(0,1);
			transform: scale(0,1);
			}

			.hovereffect:hover .overlay {
			opacity: 1;
			filter: alpha(opacity=100);
			-webkit-transform: scale(1);
			-ms-transform: scale(1);
			transform: scale(1);
			}

			.hovereffect img {
			display: block;
			position: relative;
			-webkit-transition: all 0.35s;
			transition: all 0.35s;
			}

			.hovereffect:hover img {
			filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
			filter: brightness(0.6);
			-webkit-filter: brightness(0.6);
			}

			.hovereffect h2 {
			text-transform: uppercase;
			text-align: center;
			position: relative;
			font-size: 17px;
			background-color: transparent;
			color: #FFF;
			padding: 1em 0;
			opacity: 0;
			filter: alpha(opacity=0);
			-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
			transition: opacity 0.35s, transform 0.35s;
			-webkit-transform: translate3d(0,-100%,0);
			transform: translate3d(0,-100%,0);
			}

			.hovereffect a, .hovereffect p {
			color: #FFF;
			padding: 1em 0;
			opacity: 0;
			filter: alpha(opacity=0);
			-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
			transition: opacity 0.35s, transform 0.35s;
			-webkit-transform: translate3d(0,100%,0);
			transform: translate3d(0,100%,0);
			}

			.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
			opacity: 1;
			filter: alpha(opacity=100);
			-webkit-transform: translate3d(0,0,0);
			transform: translate3d(0,0,0);
			}

			.table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
				  	padding: 8.5px!important;
				}
				.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
				  	font-size: 0.85em;
				  	color: #f9f9f9;
				  	border-top: none !important;
				  	font-family: Raleway;
				}

				.table tr{

				}

				.buy{
					text-align: center;
					margin: 10%;
				}

				.buy a{
					padding: 15px 27px;
					font-size: 18px;
					font-family: Raleway;
					color: #fff;
					font-weight: bold;
					background-color: #654321;
					border: 1px solid #fff;
				}

				.buy a:hover{
					color: #654321;
					transition-duration: 0.4s;
					background-color: #fff;
					border: 1px solid #654321;
				}

				.col-md-2 input[type='submit'], .col-md-2 input[type='reset']{
					padding: 7px 15px;
					color: #fff;
					font-size: 16px;
					background-color: #555;
					border: 1px solid #fff;
					width: 100%;
				}

				.col-md-2 input[type='submit']:hover, .col-md-2 input[type='reset']:hover{
					color: #555;
					background-color: #fff;
					border: 1px solid #555;
					transition-duration: 0.3s;
				}

				#filters .col-md-2 label{
					font-size: 16px;
					font-family: Raleway;
				}
	        </style> 
	        <script type="text/javascript">
	        	function show_value(x)
				{
				 	document.getElementById("slider_value").innerHTML=x;
				}
	        </script>
</head>

	<hr>
		<h1 align="center" id="user-head">Pastries</h1>
	<hr>
	<div class="row">
		<div class="container">
			<div id="filters">
				<div class="col-md-2">
					<h3>Filters: </h3>
				</div>
				<div class="col-md-2">
					<label>Shape: </label><br>
					<input type="checkbox" name="shape" value="rectangle">&nbsp;Rectangle <br>
					<input type="checkbox" name="shape" value="square">&nbsp;Square <br>
					<input type="checkbox" name="shape" value="circle">&nbsp;Circle <br>
					<input type="checkbox" name="shape" value="heart">&nbsp;Heart <br>
				</div>
				<div class="col-md-2">
					<label>Flavor: </label><br>
					<input type="checkbox" name="flavor" value="blackforest">&nbsp;Black forest <br>
					<input type="checkbox" name="flavor" value="pineapple">&nbsp;Pineapple <br>
					<input type="checkbox" name="flavor" value="redvelvet">&nbsp;Red velvet <br>
					<input type="checkbox" name="flavor" value="fruit">&nbsp;Fruit Pastries <br>
				</div>
				<div class="col-md-2">
					<label>Price range: </label><br>
					<span id="slider_value" style="color:black;text-align: center">0</span>
					<input width="400" type="range" min="0" max="1499" name="sld3" value="499" onchange="show_value(this.value);">1499
				</div>
				<div class="col-md-2">
					<label>Weight: </label><br>
					<input type="checkbox" name="weight" value="0.5">&nbsp;0.5 kg <br>
					<input type="checkbox" name="weight" value="1">&nbsp;1 kg <br>
					<input type="checkbox" name="weight" value="2">&nbsp;2 kg <br>
					<input type="checkbox" name="weight" value="2.5">&nbsp;2.5 kg <br>
				</div>
				<div class="col-md-2">
					<input type="submit" name="submit" value="Submit"><br>
					<input type="reset" name="reset" value="Reset">
				</div>
			</div>
		</div><br>
		<div class="container">
			<div class="col-md-4">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/pastry1.jpg" alt="">
			            <div class="overlay">
			                <h2>Pastries</h2>
							<table class="table">
								<tr>
									<th>Price:</th>
									<td>&#8377; 35</td>
								</tr>
								<tr>
									<th>Veg:</th>
									<td>No</td>
								</tr>
								<tr>
									<th>Ingredient:</th>
									<td>Value</td>
								</tr>
							</table>
							<a href="#">Add to Cart</a>
			            </div>
				    </div>
				</div>
			</div>
			<div class="col-md-4">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/pastry2.jpg" alt="">
			            <div class="overlay">
			                <h2>Pastries</h2>
							<table class="table">
								<tr>
									<th>Price:</th>
									<td>&#8377; 50</td>
								</tr>
								<tr>
									<th>Veg:</th>
									<td>No</td>
								</tr>
								<tr>
									<th>Ingredient:</th>
									<td>Value</td>
								</tr>
							</table>
							<a href="#">Add to Cart</a>
			            </div>
				    </div>
				</div>
			</div>
			<div class="col-md-4">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/pastry3.jpg" alt="">
			            <div class="overlay">
			                <h2>Pastries</h2>						
							<table class="table">
								<tr>
									<th>Price:</th>
									<td>&#8377; 45</td>
								</tr>
								<tr>
									<th>Veg:</th>
									<td>Yes</td>
								</tr>
								<tr>
									<th>Ingredient:</th>
									<td>Value</td>
								</tr>
							</table>
							<a href="#">Add to Cart</a>						
			            </div>			     
				    </div>
				</div>
			</div>
		</div>
		<div><br></div>
		<div class="container">
			<div class="col-md-4">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/pastry2.jpg" alt="">
			            <div class="overlay">
			                <h2>Pastries</h2>
							<table class="table">
								<tr>
									<th>Price:</th>
									<td>&#8377; 60</td>
								</tr>
								<tr>
									<th>Veg:</th>
									<td>No</td>
								</tr>
								<tr>
									<th>Ingredient:</th>
									<td>Value</td>
								</tr>
							</table>
							<a href="#">Add to Cart</a>
			            </div>
				    </div>
				</div>
			</div>
			<div class="col-md-4">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/pastry3.jpg" alt="">
			            <div class="overlay">
			                <h2>Pastries</h2>
							<table class="table">
								<tr>
									<th>Price:</th>
									<td>&#8377; 50</td>
								</tr>
								<tr>
									<th>Veg:</th>
									<td>Yes</td>
								</tr>
								<tr>
									<th>Ingredient:</th>
									<td>Value</td>
								</tr>
							</table>
							<a href="#">Add to Cart</a>
			            </div>
				    </div>
				</div>
			</div>
			<div class="col-md-4">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/pastry1.jpg" alt="">
			            <div class="overlay">
			                <h2>Pastries</h2>						
							<table class="table">
								<tr>
									<th>Price:</th>
									<td>&#8377; 75</td>
								</tr>
								<tr>
									<th>Veg:</th>
									<td>Yes</td>
								</tr>
								<tr>
									<th>Ingredient:</th>
									<td>Value</td>
								</tr>
							</table>
							<a href="#">Add to Cart</a>						
			            </div>			     
				    </div>
				</div>
			</div>
		</div>
		<div><br></div>
	</div>

<?php
    include('includes/footer.php');
?>