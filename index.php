
<?php

$curl = curl_init();

//Setup transaction details
$data = [
    'muid' => '01H793GDV7DJDFQJT59PD27J61', //get it from your MoneyUnify dashboard https://dashboard.moneyunify.com/
    'first_name' => 'Chanda',
    'last_name' => 'Chewe',
    'email' => 'chewec03@gmail.com',
    'phone_number' => '0973750029', // Customer mobile money phone number where funds are to be deducted. e.g 260971943638 
    'transaction_details' => 'Testing Transactions', //Description of transaction / product being purchased
    'amount' => '1' // valid number amount e.g 2.45 or 2345 or 23213.04. 2500 is just an example
];

curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.moneyunify.com/moneyunify/request_payment",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => [
        "Accept: */*",
        "Content-Type: application/x-www-form-urlencoded"
    ],
]);

// Trigger payment
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}

// see API responses below image examples for your eased debugging
