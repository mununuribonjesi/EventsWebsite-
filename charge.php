<?php
  require_once('../includes/config.php');

  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];
  $total = $_POST['total']

  $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $total,
      'currency' => 'GBP'
  ));

  echo '<h1>Successfully charged $total!</h1>';
?>