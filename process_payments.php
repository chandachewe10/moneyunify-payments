<?php
require 'vendor/autoload.php';
require 'config.php';
use GuzzleHttp\Client;
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));

$dotenv->safeLoad();

$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $amount = floatval($_POST['amount']);
    $phone_number = floatval($_POST['phone_number']);
    $transactionDetails = htmlspecialchars($_POST['transaction_details']);





    $postData = [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'email' => $email,
        'amount' => $amount,
        'phone_number' => $phone_number,
        'transaction_details' => $transactionDetails,
        'muid' => $_ENV['MONEYUNIFY_UUID']
    ];


    $client = new Client([
        
        'timeout'  => 5.0,
    ]);

    try {

        $response = $client->post($base_uri . '/request_payment', [
            'body' => $postData,
        ]);


        if ($response->getStatusCode() === 200) {

            echo '<h3>Please Confirm payment prompt we have sent on your device!</h3>';
        } else {

            echo '<h3>Payment Failed!</h3>';
        }
    } catch (\Exception $e) {
        
        echo '<h3>Payment Failed!</h3>';
        echo '<p>Whooops something went wrong: ' . $e->getMessage() . '</p>';
    }
}
