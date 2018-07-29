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

			.row{
				width: 100%;
				padding: 10%;
				margin-right: 0px;
				margin-left: 0px;
			}


			.container{
				box-shadow: 0px 4px 10px 0px rgba(0,0,0,0.5);
				width: 100%;
				padding: 5%;
				border-radius: 15px;
			}

			.row{
				background: rgb(255,255,255); /* Old browsers */
				background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%); /* FF3.6-15 */
				background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				
			}

			.card-img{
				padding: 1%;
				background-color: #fff;

			}

			.card-img img{
				width: 100%;
				padding: 5%;
				vertical-align: middle;
			}

			.card-head h3{
				padding: 0.5em;
			}

			.quantity, .price, .card-desc{
				padding-left: 1em;
				padding-bottom: 1em; 
			}

			.card-desc p{
				text-align: justify;
				padding-top: 2%;
				font-size: 15px;
			}

			input[type='number']{
				width: 25%;
			}

        </style> 
</head>

	<hr>
		<h1 align="center" id="user-head">Cart</h1>
	<hr>
	<div class="row">
		<div class="container">		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-12 col-md-6">
					<div class="card-img">
						<img class="img-responsive" src="images/cake/cake2.jpg">
					</div>
				</div>	  			
	  			<div class="col-8 col-md-6">
	  				<hr>
	  					<div class="card-head">
	  						<h3 align="center">Product Name</h3>
	  					</div>
	  					<div class="card-desc">
	  						<label>Description</label>
	  						<p>
	  							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	  						</p>
	  					</div>
	  					<div class="quantity">
	  						<label>Quantity: &nbsp;</label>
	  						<input type="number" name="quantity">
	  					</div>
	  					<div class="price">
	  						<label>Total Price: &#8377;</label>350
	  					</div>
	  				<hr>
			  	</div>
			</div>
		</div>
		<br><br>
		<div class="container">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-12 col-md-6">
					<div class="card-img">
						<img class="img-responsive" src="images/cake/cake6.jpg">
					</div>
				</div>	  			
	  			<div class="col-8 col-md-6">
	  				<hr>
	  					<div class="card-head">
	  						<h3 align="center">Product Name</h3>
	  					</div>
	  					<div class="card-desc">
	  						<label>Description</label>
	  						<p>
	  							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	  						</p>
	  					</div>
	  					<div class="quantity">
	  						<label>Quantity: &nbsp;</label>
	  						<input type="number" name="quantity">
	  					</div>
	  					<div class="price">
	  						<label>Total Price: &#8377;</label>350
	  					</div>
	  				<hr>
			  	</div>
			</div>
		</div>
		<br><br>
		<div class="container">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-12 col-md-6">
					<div class="card-img">
						<img class="img-responsive" src="images/cake/cake5.jpg">
					</div>
				</div>	  			
	  			<div class="col-8 col-md-6">
	  				<hr>
	  					<div class="card-head">
	  						<h3 align="center">Product Name</h3>
	  					</div>
	  					<div class="card-desc">
	  						<label>Description</label>
	  						<p>
	  							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	  						</p>
	  					</div>
	  					<div class="quantity">
	  						<label>Quantity: &nbsp;</label>
	  						<input type="number" name="quantity">
	  					</div>
	  					<div class="price">
	  						<label>Total Price: &#8377;</label>350
	  					</div>
	  				<hr>
			  	</div>
			</div>
		</div>
	</div>
<?php

	include('includes/footer.php');

?>