<?php

namespace Controllers;

use MVC\Router;

class LoginController
{
  public static function login(Router $router): void
  {
    $router->render('auth/login');
  }

  public static function logout(): void
  {
    echo 'From Logout';
  }

  public static function forgot(Router$router): void
  {
    $router->render('auth/forgot-password', [

    ]);
  }

  public static function recover(): void
  {
    echo 'I wanna recover my password';
  }

  public static function create(  Router $router): void
  {
    $router->render('auth/create-account', [

    ]);
  }
}
