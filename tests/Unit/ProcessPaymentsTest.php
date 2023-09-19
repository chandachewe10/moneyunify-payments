<?php
require_once './vendor/autoload.php';
use GuzzleHttp\Client;
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));

$dotenv->safeLoad();

it('checks success payments', function () {

    $firstName = 'Chanda';
    $lastName = 'Chewe';
    $email = 'chewec03@gmail.com';
    $amount = 1;
    $phone_number = "0973750029";
    $transactionDetails = 'testing transactions';





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
        
        'timeout'  => 300.0,
    ]);

    

        $response = $client->post('https://api.moneyunify.com/moneyunify/request_payment', [
            'form_params' => $postData,
        ]);

       
        
 
    
    expect($response->getStatusCode())->toEqual(200);
});





    


