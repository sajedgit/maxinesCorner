<?php
  require_once('wp-load.php');
  require_once('stripe-config.php');

  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];
 echo $plan  = $_POST['plan'];die();

  $customer = \Stripe\Customer::create([
      'email' => $email,
      'source'  => $token,
  ]);

   $charge = \Stripe\Charge::create([
      'customer' => $customer->id,
      'amount'   => 2000,
      'currency' => 'usd',
  ]); 
  
  //print_r( $charge->status);
  
/*   $charge = \Stripe\Plan::create([
  "nickname" => "Standard Monthly",
  "product" => "Get Healthy Meal Plan",
  "amount" => 2000,
  "currency" => "usd",
  "interval" => "month",
  "usage_type" => "licensed",
]); */
  

  //echo '<h1>Successfully charged $20.00!</h1>';
  
	if ( $charge->status =="succeeded") 
	{
		$variable_to_send = '1';
		wp_redirect( home_url() .'?my_variable='.$variable_to_send );
		exit;
	}
?>