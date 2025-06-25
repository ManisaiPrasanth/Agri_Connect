<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

$stripeDetails = array(
		"secretKey" => "sk_test_51NlDPzSJxfOi2wnmsZSPrQrBfJ1n26qR3gzKkJ3wW397nXy100xjqwhPGEER6wHY3I4GRI8zzoifSr8KLaNiL5vx00RTD7OuxL",  //Your Stripe Secret key
		"publishableKey" => "pk_test_51NlDPzSJxfOi2wnmjjXVZ01ykSPHof9atcthMhLWsoj4wfdPydRoZ0t4U68uAiEGLINKXOGJLvbPmW29gOQ1fbqb00L0XZspdV"  //Your Stripe Publishable key
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);

	
?>
