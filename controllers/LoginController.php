<?php

namespace Controllers;

class LoginController
{
  public static function login()
  {
    echo 'Desde Login';
  }

  public static function logout(): void
  {
    echo 'Desde Logout';
  }

  public static function forgot(): void
  {
    echo 'I forgot my password';
  }

  public static function recover(): void
  {
    echo 'I wanna recover my password';
  }

  public static function create () {
    echo 'Create a new account';
  }
}
