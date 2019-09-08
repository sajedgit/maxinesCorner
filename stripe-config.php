<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_test_E4WTKXC1mnqloMjbcKSNvBYq",
  "publishable_key" => "pk_test_gj6NDR4uHImVXlEqU9hHaUFr",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>