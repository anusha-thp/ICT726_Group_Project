<?php 

// Static pages routes
$router->addRoute('', ['controller' => 'Home', 'action' => 'home']);
$router->addRoute('about', ['controller' => 'About', 'action' => 'home']);
$router->addRoute('recipe', ['controller' => 'Recipe', 'action' => 'home']);
$router->addRoute('blog', ['controller' => 'Blog', 'action' => 'home']);
$router->addRoute('contact', ['controller' => 'Contact', 'action' => 'home']);
$router->addRoute('login', ['controller' => 'Login', 'action' => 'home']);
$router->addRoute('register', ['controller' => 'Register', 'action' => 'home']);

$router->addRoute('admin/home', ['controller' => 'Dashboard', 'action' => 'home']);
$router->addRoute('admin/home/add-recipe', ['controller' => 'Recipe', 'action' => 'addRecipe']);



$router->setParams(getUri());