<?php
// $router->define([
//   'home'=>'indexController',
//   'about'=>'aboutController'
// ]);
$router->get('','indexController');
$router->get('home','indexController');
$router->get('about','aboutController');
$router->get('register','registerController');
$router->get('login','loginController');
