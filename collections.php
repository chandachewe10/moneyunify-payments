<!DOCTYPE html>
<html lang="en">
<head>
  <title>MONEY-UNIFY::MOBILE MONEY PAYMENTS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    /* Custom CSS for styling the form */
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f7f7f7;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .form-container h3 {
      text-align: center;
    }
  </style>
</head>
<body>
    <br>
  <div class="container">
    <div class="form-container">
      <h3>Please Make Payments</h3>
      <form action="process_payments_collections.php" method="POST">
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" class="form-control" name="first_name" id="first_name" placeholder="John" required>
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Doe" required>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="johndoe@example.com" required>
        </div>
        <div class="form-group">
          <label for="amount">Amount</label>
          <input type="number" name="amount" class="form-control" id="amount" placeholder="1" required>
        </div>
        <div class="form-group">
          <label for="phone_number">Phone Number</label>
          <input type="number" name="phone_number" class="form-control" id="phone_number" placeholder="0973790900" required>
        </div>
        <div class="form-group">
          <label for="transaction_details">Transaction Details</label>
          <input type="text" name="transaction_details" class="form-control" id="transaction_details" placeholder="Transaction details" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>
