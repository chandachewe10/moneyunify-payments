<?php 
require('vendor/autoload.php');
use Chandachewe\Moneyunify\Collections\GetPayments;

$form = new GetPayments();
$form->processForm('YOUR UUID HERE');
echo $form->renderForm();


