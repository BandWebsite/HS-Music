<?php
require('stripeconfig.php');?>
<form action="submit.php" method="POST">
			<script
			src="https://checkout.stripe.com/checkout.js" class="stripe-button"
			data-key="<?php echo $publishableKey?>"
			data-amount="5000"
			data-name="Are you sure to buy?" 
			data-description="Thanks for shopping with us"
			data-currency="inr"
			>
			</script>	
		</form>