<?php

namespace Helpers;

class Messages
{
  private static $messages = [
    'required' => 'El campo es obligatorio',
    'email' => 'El email no es valido',
    'password' => 'El pasword no cumple los requisitos',
    'number' => 'El campo debe ser un numero valido',
    'phone' => 'El numero telefonico debe ser de 10 digitos'
  ];

  public static function get(string $keyMessages): string
  {
    return self::$messages[$keyMessages];
  }
}
