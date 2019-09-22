<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_live_OGcHWJoW9uU08dOz1D3paS2B",
  "publishable_key" => "pk_live_k1xixqp6olYy2kP768Wt8Euc",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>