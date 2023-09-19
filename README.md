<h1 align="center">COLLECTIONS AND DISBURSEMEMNTS</h1>

<p align="center">
A Moneyunify PHP Package For Payments Collections and Disbursements
</p>



## Requirements

- PHP >= 8.1
- MONEYUNIFY UUID [MoneyUnify](https://moneyunify.com/)

## Installation

Install package using `composer require`:

```bash
composer require chandachewe/moneyunify
```

The process of collecting payments is very simple. Once the package is downloaded you can do the following steps: 



## Usage
If you have required the package correctly you should now see a directory called vendor. If so proceed as follows

```bash
1. create a file in the root directory lets name it collections.php
2. add the following in the file: 

<?php 
require('vendor/autoload.php');
use Chandachewe\Moneyunify\Collections\GetPayments;

$form = new GetPayments();
$form->processForm('YOUR MONEYUNIFY UUID HERE');
echo $form->renderForm();
?>

NOTE: Dont forget to replace your MONEYUNIFY UUID in the processForm() with the one you got From MoneyUnify ;
3.  Run that file and you will see a payments form. Enter details to collect payments. Thats It!!!! 
  
```

## Versioning

Releases will be numbered with the following format:

```bash
<major>.<minor>.<patch>
```

## Contributions
Fork the dev branch
