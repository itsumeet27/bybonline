<?php
    include('includes/header.php');
?>

<head>
	<!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/custom.css">
    	<style type="text/css">
    	html, body{
    		width: 100%;
			overflow-x: hidden;
		}
		
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
		width: 90%;
		height: 90%;
		left: 5%;
		top: 5%;
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
		width: 100%;
		height: 100%;
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
		color: #555;
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

		/*----Responsive layout----*/

		@media screen and (max-width: 1199px) and (min-width: 1081px){
			.col-sm-4 .table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			  	padding: 4px!important;
			}
			.col-sm-4 .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
			  	font-size: 0.6em!important;
			  	color: #333;
			  	border-top: none !important;
			  	font-family: Raleway;
			}

			.addtocart{
				font-size: 0.8em;

			}

			.hovereffect h2{
				padding: 0.85em;
			}
		}	

		@media screen and (max-width: 1080px) and (min-width: 992px){
			.col-sm-4 .table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			  	padding: 3px!important;
			}
			.col-sm-4 .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
			  	font-size: 0.5em!important;
			  	color: #333;
			  	border-top: none !important;
			  	font-family: Raleway;
			}
x
			.addtocart{
				font-size: 0.75em;

			}

			.hovereffect h2{
				padding: 0.75em;
				font-size: 15px!important;
			}
		}		

		@media screen and (max-width: 991px) and (min-width: 865px){
			.col-sm-4 .table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			  	padding: 5px!important;
			}
			.col-sm-4 .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
			  	font-size: 0.65em;
			  	color: #333;
			  	border-top: none !important;
			  	font-family: Raleway;
			}

			.addtocart{
				font-size: 0.8em;

			}
		}

		@media screen and (max-width: 864px) and (min-width: 816px){
			.col-sm-4 .table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			  	padding: 5px!important;
			}
			.col-sm-4 .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
			  	font-size: 0.5em;
			  	color: #333;
			  	border-top: none !important;
			  	font-family: Raleway;
			}

			.addtocart{
				font-size: 0.7em;

			}
		}

		@media screen and (max-width: 815px) and (min-width: 769px){
			.col-sm-6 .table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			  	padding: 4px!important;
			}
			.col-sm-6 .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
			  	font-size: 0.7em!important;
			  	color: #333;
			  	border-top: none !important;
			  	font-family: Raleway;
			}

			.addtocart{
				font-size: 0.7em;

			}
		}

		@media screen and (max-width: 768px) and (min-width: 641px){
			.col-xs-12 .table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			  	padding: 8px!important;
			}
			.col-sm-12 .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
			  	font-size: 1.2em!important;
			  	color: #333;
			  	border-top: none !important;
			  	font-family: Raleway;
			}

			.addtocart{
				font-size: 1.2em;

			}

			.hovereffect h2{
				padding: 0.85em;
				font-size: 1.2em;
			}
		}

		@media screen and (max-width: 640px) and (min-width: 481px){
			.col-xs-12 .table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			  	padding: 7px!important;
			}
			.col-sm-12 .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
			  	font-size: 1em!important;
			  	color: #333;
			  	border-top: none !important;
			  	font-family: Raleway;
			}

			.addtocart{
				font-size: 1em;

			}
		}

		@media screen and (max-width: 480px) and (min-width: 401px){
			.col-sm-12 .table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			  	padding: 4px!important;
			}
			.col-sm-12 .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
			  	font-size: 0.8em!important;
			  	color: #333;
			  	border-top: none !important;
			  	font-family: Raleway;
			}

			.addtocart{
				font-size: 0.8em;

			}
		}

		@media screen and (max-width: 400px) and (min-width: 320px){
			.col-sm-12 .table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			  	padding: 0px!important;
			}
			.col-sm-12 .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
			  	font-size: 0.5em!important;
			  	color: #333;
			  	border-top: none !important;
			  	font-family: Raleway;
			}

			.addtocart{
				font-size: 0.6em;

			}

			.hovereffect h2{
				padding: 0.6em;
				font-size: 0.8em;
			}
		}

		.table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			  	padding: 5px!important;
			}
			.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
			  	font-size: 0.75em;
			  	color: #333;
			  	border-top: none !important;
			  	font-family: Raleway;
			}

			

			.buy{
				text-align: center;
				margin: 10%;
			}

			.col-lg-2 input[type='submit'], .col-lg-2 input[type='reset']{
				padding: 8px 15px;
				color: #555;
				margin-top: 0.5em;
				font-size: 16px;
				background-color: #fff;
				border: 1px solid #555;
				width: 100%;
			}

			.col-md-2 input[type='submit'], .col-md-2 input[type='reset']{
				padding: 7px 13px;
				color: #555;
				margin-top: 0.4em;
				font-size: 15px;
				background-color: #fff;
				border: 1px solid #555;
				width: 100%;
			}

			.col-sm-4 input[type='submit'], .col-sm-4 input[type='reset']{
				padding: 6px 12px;
				color: #555;
				margin-top: 0.25em;
				font-size: 14px;
				background-color: #fff;
				border: 1px solid #555;
				width: 100%;
			}

			.col-xs-4 input[type='submit'], .col-xs-4 input[type='reset']{
				padding: 5px 10px;
				color: #555;
				margin-top: 0.25em;
				font-size: 13px;
				background-color: #fff;
				border: 1px solid #555;
				width: 100%;
			}

			input[type='submit']:hover, input[type='reset']:hover{
				color: #fff;
				background-color: #555;
				border: 1px solid #fff;
				transition-duration: 0.3s;
			}

			#filters .col-lg-2 label{
				font-size: 16px;
				font-family: Raleway;
			}

			#filters .col-md-2 label{
				font-size: 15px;
				font-family: Raleway;
			}

			#filters .col-sm-4 label{
				font-size: 15px;
				font-family: Raleway;
			}

			#filters .col-xs-4 label{
				font-size: 14px;
				font-family: Raleway;
			}

			.row .container{
				
				padding: 3.5%;
				width: 90%;
			}

			.row{
				background: rgb(255,255,255); /* Old browsers */
				background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%); /* FF3.6-15 */
				background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				
			}

			.col-md-4 .overlay{
				box-shadow: 0px 4px 10px 0px rgba(0,0,0,0.5);
				background-color: rgba(255,255,255,0.75);
				padding: 3.5%;
			}
			#filters{
				display: none;
			}

			#filterbtn{
				padding: 10px 15px;
				text-decoration: none;
				background-color: #f9f9f9;
				border-radius: 3.5px;
				color: #444;
				width: 150px;
			}

			#filterbtn:hover{
				cursor: pointer;
				background-color: #444;
				color: #f7f7f7;
				transition-duration: 0.4s;
			}

			#filters .col-lg-2{
				padding: 0.75%;
			}

			#filters .col-md-4{
				padding: 1%;
			}

			#filters .col-sm-6{
				padding: 1%;
			}

			#filters .col-xs-12{
				padding: 1%;
			}

			.filter-title{
				font-size: 18px;
				font-weight: bold;
			}

        </style> 
        <script type="text/javascript">
        	function show_value(x)
			{
			 	document.getElementById("slider_value").innerHTML=x;
			}
        </script>
        <script type="text/javascript">
        	$(document).ready(function(){
        		$("#filterbtn").click(function(){
        			$("#filters").slideToggle("slow");
        		});
        	});
        </script>

</head>

	<hr>
		<h1 align="center" id="user-head">Cake</h1>
	<hr>
	<div class="row">
		<div class="container">
			<center><div id="filterbtn">Filters</div></center>
			<br>
			<div id="filters">
				<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<h3>Apply filters: </h3>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<p class="filter-title">Shape: </p><br>
					<input type="checkbox" name="shape" value="rectangle">&nbsp;Rectangle <br>
					<input type="checkbox" name="shape" value="square">&nbsp;Square <br>
					<input type="checkbox" name="shape" value="circle">&nbsp;Circle <br>
					<input type="checkbox" name="shape" value="heart">&nbsp;Heart <br>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<p class="filter-title">Flavor: </p><br>
					<input type="checkbox" name="flavor" value="blackforest">&nbsp;Black forest <br>
					<input type="checkbox" name="flavor" value="pineapple">&nbsp;Pineapple <br>
					<input type="checkbox" name="flavor" value="redvelvet">&nbsp;Red velvet <br>
					<input type="checkbox" name="flavor" value="fruit">&nbsp;Fruit cake <br>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<p class="filter-title">Price range: </p><br>
					<span id="slider_value" style="color:#000;text-align: center">0</span>
					<input width="400" type="range" min="0" max="1499" name="sld3" value="499" onchange="show_value(this.value);">1499
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<p class="filter-title">Weight: </p><br>
					<input type="checkbox" name="weight" value="0.5">&nbsp;0.5 kg <br>
					<input type="checkbox" name="weight" value="1">&nbsp;1 kg <br>
					<input type="checkbox" name="weight" value="2">&nbsp;2 kg <br>
					<input type="checkbox" name="weight" value="2.5">&nbsp;2.5 kg <br>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<input type="submit" name="submit" value="Submit"><br>
					<input type="reset" name="reset" value="Reset">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/cake/cake1.png" alt="" style="padding: 5%;">
			            <div class="overlay">
			                <h2>Cake</h2>
							<table class="table">
								<tr>
									<th>Weight:</th>
									<td>0.5 kg</td>
								</tr>
								<tr>
									<th>Price:</th>
									<td>&#8377; 350</td>
								</tr>
								<tr>
									<th>Shape:</th>
									<td>Round</td>
								</tr>
								<tr>
									<th>Sugar free:</th>
									<td>Yes</td>
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
							<a href="#" style="color: #444;font-weight: bold;" class="addtocart">Add to Cart</a>
			            </div>
				    </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/cake/cake2.jpg" alt="" style="padding: 5%;">
			            <div class="overlay">
			                <h2>Cake</h2>
							<table class="table">
								<tr>
									<th>Weight:</th>
									<td>0.5 kg</td>
								</tr>
								<tr>
									<th>Price:</th>
									<td>&#8377; 350</td>
								</tr>
								<tr>
									<th>Shape:</th>
									<td>Round</td>
								</tr>
								<tr>
									<th>Sugar free:</th>
									<td>Yes</td>
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
							<a href="#" style="color: #444;font-weight: bold;" class="addtocart">Add to Cart</a>
			            </div>
				    </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/cake/cake3.jpg" alt="" style="padding: 5%;">
			            <div class="overlay">
			                <h2>Cake</h2>						
							<table class="table">
								<tr>
									<th>Weight:</th>
									<td>0.5 kg</td>
								</tr>
								<tr>
									<th>Price:</th>
									<td>&#8377; 350</td>
								</tr>
								<tr>
									<th>Shape:</th>
									<td>Round</td>
								</tr>
								<tr>
									<th>Sugar free:</th>
									<td>Yes</td>
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
							<a href="#" style="color: #444;font-weight: bold;" class="addtocart">Add to Cart</a>						
			            </div>			     
				    </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/cake/cake2.jpg" alt="" style="padding: 5%;">
			            <div class="overlay">
			                <h2>Cake</h2>
							<table class="table">
								<tr>
									<th>Weight:</th>
									<td>0.5 kg</td>
								</tr>
								<tr>
									<th>Price:</th>
									<td>&#8377; 350</td>
								</tr>
								<tr>
									<th>Shape:</th>
									<td>Round</td>
								</tr>
								<tr>
									<th>Sugar free:</th>
									<td>Yes</td>
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
							<a href="#" style="color: #444;font-weight: bold;" class="addtocart">Add to Cart</a>
			            </div>
				    </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/cake/cake1.png" alt="" style="padding: 5%;">
			            <div class="overlay">
			                <h2>Cake</h2>
							<table class="table">
								<tr>
									<th>Weight:</th>
									<td>0.5 kg</td>
								</tr>
								<tr>
									<th>Price:</th>
									<td>&#8377; 350</td>
								</tr>
								<tr>
									<th>Shape:</th>
									<td>Round</td>
								</tr>
								<tr>
									<th>Sugar free:</th>
									<td>Yes</td>
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
							<a href="#" style="color: #444;font-weight: bold;" class="addtocart">Add to Cart</a>
			            </div>
				    </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/cake/cake3.jpg" alt="" style="padding: 5%;">
			            <div class="overlay">
			                <h2>Cake</h2>						
							<table class="table">
								<tr>
									<th>Weight:</th>
									<td>0.5 kg</td>
								</tr>
								<tr>
									<th>Price:</th>
									<td>&#8377; 350</td>
								</tr>
								<tr>
									<th>Shape:</th>
									<td>Round</td>
								</tr>
								<tr>
									<th>Sugar free:</th>
									<td>Yes</td>
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
							<a href="#" style="color: #444;font-weight: bold;" class="addtocart">Add to Cart</a>						
			            </div>			     
				    </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/cake/cake1.png" alt="" style="padding: 5%;">
			            <div class="overlay">
			                <h2>Cake</h2>
							<table class="table">
								<tr>
									<th>Weight:</th>
									<td>0.5 kg</td>
								</tr>
								<tr>
									<th>Price:</th>
									<td>&#8377; 350</td>
								</tr>
								<tr>
									<th>Shape:</th>
									<td>Round</td>
								</tr>
								<tr>
									<th>Sugar free:</th>
									<td>Yes</td>
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
							<a href="#" style="color: #444;font-weight: bold;" class="addtocart">Add to Cart</a>
			            </div>
				    </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/cake/cake2.jpg" alt="" style="padding: 5%;">
			            <div class="overlay">
			                <h2>Cake</h2>
							<table class="table">
								<tr>
									<th>Weight:</th>
									<td>0.5 kg</td>
								</tr>
								<tr>
									<th>Price:</th>
									<td>&#8377; 350</td>
								</tr>
								<tr>
									<th>Shape:</th>
									<td>Round</td>
								</tr>
								<tr>
									<th>Sugar free:</th>
									<td>Yes</td>
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
							<a href="#" style="color: #444;font-weight: bold;" class="addtocart">Add to Cart</a>
			            </div>
				    </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div width="300">
				    <div class="hovereffect">
				        <img class="img-responsive" src="images/cake/cake3.jpg" alt="" style="padding: 5%;">
			            <div class="overlay">
			                <h2>Cake</h2>						
							<table class="table">
								<tr>
									<th>Weight:</th>
									<td>0.5 kg</td>
								</tr>
								<tr>
									<th>Price:</th>
									<td>&#8377; 350</td>
								</tr>
								<tr>
									<th>Shape:</th>
									<td>Round</td>
								</tr>
								<tr>
									<th>Sugar free:</th>
									<td>Yes</td>
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
							<a href="#" style="color: #444;font-weight: bold;" class="addtocart">Add to Cart</a>						
			            </div>			     
				    </div>
				</div>
			</div>
		</div>
		
	</div>

<?php
    include('includes/footer.php');
?>