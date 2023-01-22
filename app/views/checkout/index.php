<?php
include __DIR__ . '/../header.php';
?>
<h1>Checkout</h1>
<p>Amount to pay: €<?php echo $_GET['total'] ?></p>
<form action="/checkout/insert?total=<?php echo $_GET['total'] ?>" method="post">
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name" required>
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="lastName"placeholder="Enter last name" required>
  </div>
  <div class="form-group">
    <label for="emailaddress">Email address</label>
    <input type="email" class="form-control" id="emailAddress" name="emailAddress"placeholder="Enter email" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Pay</button>
</form>

<?php
include __DIR__ . '/../footer.php';
?>