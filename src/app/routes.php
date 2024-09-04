<?php 

// Static pages routes
$router->addRoute('', ['controller' => 'Index', 'action' => 'home']);

$router->setParams(getUri());