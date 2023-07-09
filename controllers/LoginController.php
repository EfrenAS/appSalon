<?php

namespace Controllers;

use Model\User;
use MVC\Router;
use Helpers\Validator;

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

  public static function forgot(Router $router): void
  {
    $router->render('auth/forgot-password', []);
  }

  public static function recover(): void
  {
    echo 'I wanna recover my password';
  }

  public static function create(Router $router): void
  {
    $user = new User;
    $alerts = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $user->sincronizar($_POST);

      $alerts = Validator::make($_POST, [
        'name' => 'required',
        'lastname' => 'required',
        'cellphone' => 'required|phone',
        'email' => 'required|email',
        'password' => 'required'
      ]);

      if (empty($alerts)) {
        echo 'pasaste las validaciones';
        $user->uniqueMail();
      }
    }
    $router->render('auth/create-account', [
      'user' => $user,
      'alerts' => $alerts
    ]);
  }
}
