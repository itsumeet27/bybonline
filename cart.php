<?php

	require_once 'core/init.php';
	include 'includes/header.php';

	if($cart_id != ''){
		$cartQ = $db->query("SELECT * FROM cart WHERE id = '{$cart_id}'");
		$result = mysqli_fetch_assoc($cartQ);
		$items = json_decode($result['items'],true);
		$i = 1;
		$sub_total = 0;
		$item_count = 0;
	}
?>
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="row">
			<h2 class="text-center">My Shopping Cart</h2><hr>
			<?php if($cart_id == ''): ?>
				<div class="bg-danger">
					<p class="text-center text-danger">
						Your shopping cart is empty!
					</p>
				</div>
			<?php else: ?>
				<table class="table table-striped table-responsive">
					<thead>
						<th>#</th>
						<th>Item</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Subtotal</th>
					</thead>
					<tbody>
						<?php
							foreach($items as $item){
								$product_id = $item['id'];
								$productQ = $db->query("SELECT * FROM products WHERE id = '{$product_id}'");
								$product = mysqli_fetch_assoc($productQ);								
							?>

							<tr>
								<td><?=$i;?></td>
								<td><?=$product['title']; ?></td>
								<td><?=money($product['price']);?></td>
								<td>
									<button class="btn btn-xs btn-default" onclick="update_cart('removeone','<?=$product['id'];?>');">-</button>
									<?=$item['quantity'];?>
									<?php if($item['quantity'] < 10): ?>
										<button class="btn btn-xs btn-default" onclick="update_cart('addone','<?=$product['id'];?>');">+</button>
									<?php else: ?>
										<span class="text-danger">Max</span>
									<?php endif; ?>
								</td>
								<td><?=money($item['quantity'] * $product['price']);?></td>
							</tr>

						<?php 
								$i++;
								$item_count += $item['quantity'];
								$sub_total += ($product['price'] * $item['quantity']);
							} 
							/*$tax = TAXRATE * $sub_total;
							$tax = number_format($tax,2);*/
							$grand_total = $sub_total;
						?>
					</tbody>
				</table>
				<table class="table table-striped table-responsive">
					<legend>Totals</legend>
					<thead class="totals-table-header">
						<th>Total Items</th>
						<!--<th>Sub Total</th>
						<th>Tax</th>-->
						<th>Grand Total</th>
					</thead>
					<tbody>
						<tr>
							<td><?=$item_count;?></td>
							<!--<td><?=money($sub_total);?></td>
							<td><?=money($tax);?></td>-->
							<td class="bg-success"><?=money($grand_total);?></td>
						</tr>
					</tbody>
				</table>

				<!-- Checkout Modal -->
				<a href="payu/checkout.php" class="btn btn-primary btn-md pull-right"><span class="glyphicon glyphicon-shopping-cart"> </span>
				  Checkout Now
				</a>
			<?php endif; ?>
		</div>
	</div>
</div>

<script type="text/javascript">

	function back_address(){
		jQuery('#payment-errors').html("");
		jQuery('#step1').css("display","block");
		jQuery('#step2').css("display","none");
		jQuery('#next_button').css("display","inline-block");
		jQuery('#back_button').css("display","none");
		jQuery('#checkout_button').css("display","none");
		jQuery('#checkoutModalLabel').html("<h4 class='modal-title text-center'>Shipping Address</h4>");
	}

	function check_address(){
		var data = {
			'first_name' : jQuery('#first_name').val(),
			'last_name' : jQuery('#last_name').val(),
			'email' : jQuery('#email').val(),
			'address1' : jQuery('#address').val(),
			'address2' : jQuery('#street_name').val(),
			'city' : jQuery('#city').val(),
			'state' : jQuery('#state').val(),
			'zip' : jQuery('#zip').val(),
			'country' : jQuery('#country').val(),
		};
		jQuery.ajax({
			url : '/khadi/admin/parsers/check_address.php',
			method : 'POST',
			data : data,
			success : function(data){
				if(data != 'passed'){
					jQuery('#payment-errors').html(data);					
				}
				if(data == 'passed'){
					jQuery('#payment-errors').html("");
					jQuery('#step1').css("display","none");
					jQuery('#step2').css("display","block");
					jQuery('#next_button').css("display","none");
					jQuery('#back_button').css("display","inline-block");
					jQuery('#checkout_button').css("display","inline-block");
					jQuery('#checkoutModalLabel').html("<h4 class='modal-title text-center'>Proceed to the payment gateway</h4>");
				}
			},
			error : function(){
				alert('Something went wrong');
			},
		});
	}
</script>

<?php include 'includes/footer.php'; ?>