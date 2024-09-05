<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <meta name="title" content="Register account">
  <meta name="description" content="This is a business register account">
  <link rel="shortcut icon" href="<?= URLROOT ?>/img/logo.png" type="image/svg+xml">
  <link rel="stylesheet" href="<?= URLROOT ?>/css/login.css?<?php echo time(); ?>">

</head>
<body>
  <div class="wrapper">
    <h1>Hello Again!</h1>
    <p>Sign up for an account <br/> to experience the latest recipes</p>

    <?php if(isset($data["message"])): ?>
      <p class="error-message"><?= $data["message"] ?></p>
    <?php endif; ?>
    <form action="<?= URLROOT ?>/registerUser" method="POST">
      <input type="text" placeholder="Enter username" name="username">
      <input type="password" placeholder="Password" name="password">
      <input type="password" placeholder="Enter password again" name="repassword">
      <button type="submit">Register</button>
    </form>
    <p class="or">
      ----- or continue with -----
    </p>
    <div class="not-member">
    Do you already have an account <a href="<?= URLROOT ?>/login">Login Now</a>
    </div>
  </div>
</body>
</html>