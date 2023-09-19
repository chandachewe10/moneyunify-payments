<h1 align="center">COLLECTIONS AND DISBURSEMEMNTS</h1>

<p align="center">
A Moneyunify PHP Package For Payments Collections and Disbursements
</p>



## Requirements

- PHP >= 8.1
- MONEYUNIFY UUID

## Installation

Install package using `composer require`:

```bash
composer require chandachewe/moneyunify
```

The process of collecting payments is very simple. Once the package is downloaded you can do the following steps: 

```bash
 1. You will find a file called .env.example. rename that file to .env   
 2. Inside that .env file you will find a variable name called MONEYUNIFY_UUID. 
 Assign that variable your MoneyUnify UUID which you were given after creating an account at:
 ``` 
 [MoneyUnify](https://moneyunify.com/)
 
 
 



## Usage


```bash
1. create a file in the root directory lets name it collections.php
2. add the following in the file: 

<?php 
require('vendor/autoload.php');
use Chandachewe\Moneyunify\Collections\GetPayments;

$form = new GetPayments();
$form->processForm();
echo $form->renderForm();
?>

3.  Run that file and you will see a payments form. Enter details to collect payments!!!! 
  
```

## Versioning

Releases will be numbered with the following format:

```bash
<major>.<minor>.<patch>
```

## Contributions
Fork the dev branch
