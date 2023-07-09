<?php

namespace Helpers;

use Helpers\Messages;

/**
 * El metodo make recibe los argumentos que se deben validar y los valores que llegaron por metodo POST
 * 
 * Los argumentos contienen las keys del request y el nombre de los metodos que se llamaran a traves del metodo execute()
 * 
 * Por ahora solo hace las siguientes validaciones:
 *    required: Evalua si el valor es un string vacio
 *    email: Valida que el valor sea un email valido ejemplo: correo@correo.com
 *    password: Valida que el valor solo contenga caracteres entre a-z, A-Z y digitos 0-9
 *    number: Evalua el valor sea un numero entero y digitos 0-9
 *    phone: Evalua a traves de una expresion regular que el telefono contenga digitos del 0-9 y sean una cantidad de 10 digitos
 * 
 * Si se requiere agregar una validacion se puede definir como un metodo nuevo y llamarlo a traves de los argumentos
 */

class Validator
{
  private static $errors = [];

  public static function make($request = [], $args = []): array
  {
    try {
      foreach ($args as $key => $value) {
        $filters = explode('|', $value);
        foreach ($filters as $filter) {
          $result =  self::execute($request[$key], array(self::class, $filter));
          if (is_bool($result) === true && $result === false) {
            self::$errors[$key] = Messages::get($filter);
          }
        }
      }
      return ['errors' => self::$errors];
    } catch (\Throwable $th) {
      //throw $th;
      echo 'Algo salio mal al tratar de hacer la validacion... Compruebe los datos enviados';
      exit;
    }
  }

  private static function execute(string $value, callable $callback): bool
  {
    return call_user_func($callback, $value);
  }

  private static function required(string $value): bool
  {
    return empty($value) !== true;
  }

  private static function email(string $value): bool
  {
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }

  private static function password(string $value): bool
  {
    return preg_match('/^[a-zA-Z0-9]{8,}$/', $value);
  }

  private static function number(string $value): bool
  {
    return filter_var($value, FILTER_VALIDATE_INT);
  }

  private static function phone(string $value): bool
  {
    return preg_match('/^[0-9]{10}$/', $value);
  }
}
