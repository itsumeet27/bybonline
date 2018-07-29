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
				width: 5em;
			}

			input[type='number'], input[type='text']{
				
				width: 15em;
				height: 2em;
				padding: 0.5em;
			}

        </style> 
</head>

	<hr>
		<h1 align="center" id="user-head">Checkout</h1>
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
	  					<table class="table">
	  						<tr>
	  							<th>Quantity: </th>
	  							<td>25</td>
	  						</tr>
	  						<tr>
	  							<th>Address: </th>
	  							<td><textarea placeholder="Enter your Address" cols="25" rows="5"></textarea></td>
	  						</tr>
	  						<tr>
	  							<th>Pin code: </th>
	  							<td><input type="number" name="pin" placeholder="401107" minlength="6" maxlength="6"></td>
	  						</tr>
	  						<tr>
	  							<th>Cake Message: </th>
	  							<td><input type="text" name="cakemsg" placeholder="Enter your message"></td>
	  						</tr>
	  						<tr>
	  							<th>Location:</th>
	  							<td>
	  								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.149041081527!2d72.86094411447148!3d19.275883786973527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b05083d02857%3A0x9b4ccbda449809a8!2sSudarshan%2C+Sai+Mandir+Marg%2C+Sector+9%2C+Shanti+Nagar%2C+Mira+Road+East%2C+Mira+Bhayandar%2C+Maharashtra+401107!5e0!3m2!1sen!2sin!4v1532867570518" frameborder="0" style="border:0" allowfullscreen></iframe>
	  							</td>
	  						</tr>
	  					</table>
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
	  					<table class="table">
	  						<tr>
	  							<th>Quantity: </th>
	  							<td>25</td>
	  						</tr>
	  						<tr>
	  							<th>Address: </th>
	  							<td><textarea placeholder="Enter your Address" cols="25" rows="5"></textarea></td>
	  						</tr>
	  						<tr>
	  							<th>Pin code: </th>
	  							<td><input type="number" name="pin" placeholder="401107" minlength="6" maxlength="6"></td>
	  						</tr>
	  						<tr>
	  							<th>Cake Message: </th>
	  							<td><input type="text" name="cakemsg" placeholder="Enter your message"></td>
	  						</tr>
	  						<tr>
	  							<th>Location:</th>
	  							<td>
	  								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.149041081527!2d72.86094411447148!3d19.275883786973527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b05083d02857%3A0x9b4ccbda449809a8!2sSudarshan%2C+Sai+Mandir+Marg%2C+Sector+9%2C+Shanti+Nagar%2C+Mira+Road+East%2C+Mira+Bhayandar%2C+Maharashtra+401107!5e0!3m2!1sen!2sin!4v1532867570518" frameborder="0" style="border:0" allowfullscreen></iframe>
	  							</td>
	  						</tr>
	  					</table>
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
	  					<table class="table">
	  						<tr>
	  							<th>Quantity: </th>
	  							<td>25</td>
	  						</tr>
	  						<tr>
	  							<th>Address: </th>
	  							<td><textarea placeholder="Enter your Address" cols="25" rows="5"></textarea></td>
	  						</tr>
	  						<tr>
	  							<th>Pin code: </th>
	  							<td><input type="number" name="pin" placeholder="401107" minlength="6" maxlength="6"></td>
	  						</tr>
	  						<tr>
	  							<th>Cake Message: </th>
	  							<td><input type="text" name="cakemsg" placeholder="Enter your message"></td>
	  						</tr>
	  						<tr>
	  							<th>Location:</th>
	  							<td>
	  								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.149041081527!2d72.86094411447148!3d19.275883786973527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b05083d02857%3A0x9b4ccbda449809a8!2sSudarshan%2C+Sai+Mandir+Marg%2C+Sector+9%2C+Shanti+Nagar%2C+Mira+Road+East%2C+Mira+Bhayandar%2C+Maharashtra+401107!5e0!3m2!1sen!2sin!4v1532867570518" frameborder="0" style="border:0" allowfullscreen></iframe>
	  							</td>
	  						</tr>
	  					</table>
	  				<hr>
			  	</div>
			</div>
		</div>
	</div>
<?php

	include('includes/footer.php');

?>