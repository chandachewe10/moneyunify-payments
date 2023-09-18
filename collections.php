<!DOCTYPE html>
<html lang="en">
<head>
  <title>MONEY-UNIFY::MOBILE MONEY PAYMENTS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h3>Please Make Payments</h3>
    <br>
<form action="process_payments.php" method="POST">
  <div class="form-group">
    <label for="First Name">First Name</label>
    <input type="text" class="form-control" name="first_name" id="First Name" placeholder="John" required>
    
  </div>
  <div class="form-group">
    <label for="Last Name">Last Name</label>
    <input type="text" class="form-control" name="last_name" id="Last Name" placeholder="Doe" required>
  </div>
  <div class="form-group">
    <label for="Email Adress">Email Adress</label>
    <input type="email" class="form-control" name="email" id="Email Adress" placeholder="johndoe@example.com" required>
  </div>
  <div class="form-group">
    <label for="Email Adress">Amount</label>
    <input type="number" name="amount" class="form-control" id="Amount" placeholder="1" required>
  </div>
  <div class="form-group">
    <label for="Phone Number">Phone Number</label>
    <input type="number" name="phone_number" class="form-control" id="phone_number" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="Transaction Details">Transaction Details</label>
    <input type="text" name="transaction_details" class="form-control" id="transaction_details" placeholder="1" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>