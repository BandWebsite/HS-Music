<?php
	require ('stripeconfig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Dhruvil">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
	<title>Complete Your Order</title>
	<link rel="stylesheet" href="css/payment.css">
  <link rel="icon"
    href="https://nypost.com/wp-content/uploads/sites/2/2019/12/harry-styles-album-1.jpg?quality=80&strip=all&w=618&h=410&crop=1.jpg"
    type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div style="background-image: url('https://jmd.im/wp-content/uploads/2017/06/blackiv_thumbnail.jpg');">
	<!-- Navbar links -->
	<div id="wrap">
    
		<form class="payment-form">
			<div style="color:white" id="phead"> PAYMENT DETAILS</div>
			<BR><hr >
			
			<table>
				
				<tr>
					<td> <label style="color:white" for="fname">FIRST NAME</label>  </td>
					<td>  <label style="color:white" for="lname">LAST NAME</label> </td>
				</tr>
				<tr>
					<td>  <input type="text" id="fname" name="fname"  placeholder="Enter first name" required> </td>
					<td>  <input type="text" id="lname" name="lname"  placeholder="Enter last name"> </td>
				</tr>
				<tr>
					<td>  <label style="color:white" for="state">STATE</label> </td>
					<td> <select id="state" name="state" required>
					<option value="null">_ _</option> 
					<option value="Maharashtra">MAHARASHTRA</option> 
					<option value="West Bengal">WEST BENGAL</option>
					<option value="Jharkhand">JHARKHAND</option>
					<option value="Tamilnadu">TAMILNADU</option>
					<option value="Delhi">DELHI</option>
					<option value="Kerela">KERELA</option>
					<option value="Karnataka">KARNATAKA</option>
				</select>  </td>
				</tr>
				<tr>
					<td>  <label style="color:white" for="city">CITY</label> </td>
					<td> <input type="text" id="city" name="city" placeholder="Enter city" required>  </td>
				</tr>
				
				
	
			</table> 
	
	<label style="color:white" for="adline">ADDRESS</label>
				<textarea id="adline" placeholder="Enter complete address" required></textarea>
			 
	
	
			<table>
				
				<tr>
					<td>  <label style="color:white" for="mobile">MOBILE</label> </td>
					<td> <input style="color:white" type="tel" id="mobile" name="mobile" placeholder="+919999999999" required>  </td>
				</tr>
				<tr>
					<td> <label style="color:white" for="password">CONFIRM PASSWORD</label>  </td>
					<td> <input type="password" id="password" name="password" placeholder="Enter password" required>  </td>
				</tr>
			</table>
		</form>
		<div class="button-div">
			</form>
			<form action="submit.php" method="POST">
			<script
			src="https://checkout.stripe.com/checkout.js" class="stripe-button"
			data-key="<?php echo $publishableKey?>"
			data-amount="<?number_format($total_price)?>"
			data-name="Are you sure to buy <?= $pname; ?> ?" 
			data-description="Thanks for shopping with us"
			data-currency="inr"
			>
			</script>	
		</form>
	</div>
		</div>
	</div>
</div>
</div>
</body>
</html>