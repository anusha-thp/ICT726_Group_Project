<?php 

// Static pages routes
$router->addRoute('', ['controller' => 'Home', 'action' => 'home']);
$router->addRoute('about', ['controller' => 'About', 'action' => 'home']);
$router->addRoute('recipe', ['controller' => 'Recipe', 'action' => 'home']);
$router->addRoute('blog', ['controller' => 'Blog', 'action' => 'home']);
$router->addRoute('contact', ['controller' => 'Contact', 'action' => 'home']);

$router->addRoute('login', ['controller' => 'Login', 'action' => 'home']);
$router->addRoute('loginUser', ['controller' => 'Login', 'action' => 'loginUser']);
$router->addRoute('logout', ['controller' => 'Login', 'action' => 'logOut']);

$router->addRoute('register', ['controller' => 'Register', 'action' => 'home']);
$router->addRoute('registerUser', ['controller' => 'Register', 'action' => 'registerUser']);



$router->addRoute('admin/recipe', ['controller' => 'Recipe', 'action' => 'recipeAdmin']);
$router->addRoute('admin/recipe/add-recipe', ['controller' => 'Recipe', 'action' => 'viewAddRecipe']);
$router->addRoute('admin/recipe/add-data-recipe', ['controller' => 'Recipe', 'action' => 'addRecipe']);
$router->addRoute('admin/recipe/edit-data-recipe', ['controller' => 'Recipe', 'action' => 'editRecipe']);
$router->addRoute('admin/recipe/uploadImageCk', ['controller' => 'Recipe', 'action' => 'uploadFileCkEditor']);
$router->addRoute('admin/recipe/remove/{id:\d+}', ['controller' => 'Recipe', 'action' => 'remove']);
$router->addRoute('admin/recipe/edit-recipe/{id:\d+}', ['controller' => 'Recipe', 'action' => 'viewEditRecipe']);



$router->setParams(getUri());