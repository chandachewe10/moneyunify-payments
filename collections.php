<?php 
require('vendor/autoload.php');
use Chandachewe\Moneyunify\Collections\GetPayments;

$form = new GetPayments();
$form->processForm();
echo $form->renderForm();


