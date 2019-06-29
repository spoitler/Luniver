<?php

// var_dump($_POST);
echo "payment effectué";

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
require ("vendor/autoload.php");

Stripe\Stripe::setApiKey('sk_test_7yLQkOjuivkGJPDPqzb3MbIe003WAyDG17');
$token = $_POST['stripeToken'];

$customer = Stripe\Customer::create([
   'source' => $token,
   'description' => $_POST['name'],
   'email' => $_POST['email']
]);

// var_dump($customer);

$payment = \Stripe\PaymentIntent::create([
    'amount' => 8000,
    'currency' => 'eur',
    'description' => 'teeshirt noir LUNIVER',
    'payment_method_types' => ['card'],
    'customer' => 'cus_FBLEMdc7yjyQwL',
    'confirm' => true,
]);

//var_dump($payment);
