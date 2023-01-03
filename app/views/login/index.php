<?php
require __DIR__ . '/../header.php';
?>

<form action="login/validate" method="post" class="form-signin">
  <div class="form-outline mb-4">
    <input type="text" name="userName" class="form-control" />
    <label class="form-label" for="form2Example1">Username</label>
  </div>

  <div class="form-outline mb-4">
    <input type="password" name="passWord" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <div class="row mb-4">
    <div class="col d-flex justify-content-center">

  <button name="submit" type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

</form>