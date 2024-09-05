<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <meta name="title" content="Login account">
  <meta name="description" content="This is a business Login account">
  <link rel="shortcut icon" href="<?= URLROOT ?>/img/logo.png" type="image/svg+xml">
  <link rel="stylesheet" href="<?= URLROOT ?>/css/login.css">

</head>
<body>
  <div class="wrapper">
    <h1>Hello Again!</h1>
    <p>Welcome back you've <br> been missed!</p>
    <?php if(isset($data["message"])): ?>
      <p class="error-message"><?= $data["message"] ?></p>
    <?php endif; ?>
    <form action="<?= URLROOT ?>/loginUser" method="POST">
      <input type="text" placeholder="Enter username" name="username">
      <input type="password" placeholder="Password" name="password">
      <button type="submit">Sign in</button>
    </form>
    <p class="or">
      ----- or continue with -----
    </p>
    <div class="not-member">
      Not a member? <a href="<?= URLROOT ?>/register">Register Now</a>
    </div>
  </div>
</body>
</html>