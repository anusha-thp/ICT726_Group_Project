<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php echo isset($title) ? $title : TITLE_SITE ?> </title>
  <meta name="title" content="<?php echo isset($title) ? $title : TITLE_SITE ?>">
  <meta name="description" content="This is a business home page <?= SITENAME ?>">
  <link rel="shortcut icon" href="<?= URLROOT ?>/img/logo.png" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= URLROOT ?>/css/reset.css">
  <link rel="stylesheet" href="<?= URLROOT ?>/css/style.css?<?= time() ?>">

</head>

<body>
  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
      <figure>
      <img src="<?= URLROOT ?>/img/logo.png" width="74" height="24" loading="lazy" alt="<?= SITENAME ?> home">
      </figure>
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">
          <figure>
          <img src="<?= URLROOT ?>/img/logo.png" width="74" height="24" alt="<?= SITENAME ?> home">
          </figure>
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li>
            <a href="<?= URLROOT ?>/" class="navbar-link">Home</a>
          </li>

          <li>
		  <a href="<?= URLROOT ?>/about" class="navbar-link">About</a>
          </li>

          <li>
		  <a href="<?= URLROOT ?>/recipe" class="navbar-link">Recipes</a>
          </li>

          <li>
		  <a href="<?= URLROOT ?>/blog" class="navbar-link">Blog</a>
          </li>

          <li>
		    <a href="<?= URLROOT ?>/contact" class="navbar-link">Contact</a>
          </li>
          <?php if(isset($_SESSION["user"]) && $_SESSION["user"]["role"] === 'admin'): ?>
            <li class="toggle">
		         <a href="<?= URLROOT ?>/admin/recipe" class="navbar-link">Admin</a>
            </li>
            <?php endif; ?>
          <?php if(isset($_SESSION["user"])): ?>
            <li class="toggle">
		         <a href="<?= URLROOT ?>/logOut" class="navbar-link">LogOut</a>
            </li>
          <?php else: ?>
            <li class="toggle">
		         <a href="<?= URLROOT ?>/login" class="navbar-link">Login</a>
            </li>
          <?php endif; ?>
        </ul>

        <div class="wrapper">
          <a href="mailto:info@email.com" class="contact-link">info@email.com</a>

          <a href="tel:001234567890" class="contact-link">00 (123) 456 78 90</a>
        </div>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-dribbble"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>
      
    <?php if(isset($_SESSION["user"])): ?>
      <div class="dropdown">
        <p  class="btn btn-primary dropbtn">Hello <?= $_SESSION["user"]["username"] ?></p>
        <div class="dropdown-content">
           <?php if(isset($_SESSION["user"]) && $_SESSION["user"]["role"] === 'admin'): ?>
		         <a href="<?= URLROOT ?>/admin/recipe" class="navbar-link">Admin</a>
            <?php endif; ?>
          <a href="<?= URLROOT ?>/logOut" class="navbar-link">LogOut</a>       
        </div>
      </div>
      
    <?php else: ?>
      <a href="<?= URLROOT ?>/login" class="btn btn-primary">Login</a>
    <?php endif; ?>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>