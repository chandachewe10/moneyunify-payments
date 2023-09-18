
<?php

$body = array(
    'muid' => '01H793GDV7DJDFQJT59PD27J61',
    'phone_number' => '0973750029', // 10 digits customer phone number eg. 09700000
    'transaction_details' => 'Test order',
    'amount' => '1', // this is just a sample - amount to deduct e.g 5.50. or 2
    'email' => 'chewec03@gmail.com', //customer email -  this is just a sample
    'first_name' => 'Chanda', //customer first name -  this is just a sample
    'last_name' => 'Chewe', //customer last name -  this is just a sample
);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://api.moneyunify.com/moneyunify/request_payment'); //endpoint
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($body));

$response = curl_exec($curl);

if ($response === false) {
    echo 'cURL Error: ' . curl_error($curl);
} else {
    echo $response;
}

curl_close($curl);

// see API responses below image examples for your eased debugging
