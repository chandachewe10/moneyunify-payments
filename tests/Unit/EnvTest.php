<?php
require_once './vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));

$dotenv->safeLoad();

it('checks DotEnv', function () {
    $MONEYUNIFY_UUID = $_ENV['MONEYUNIFY_UUID'];


    expect($MONEYUNIFY_UUID)->toEqual('3');
});
