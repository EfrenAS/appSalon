<?php

namespace Model;

class User extends ActiveRecord
{
  protected static $table = 'users';
  protected static $columns = ['id', 'name', 'lastanme', 'email', 'password', 'cellphone', 'admin', 'confirmed', 'token'];

  public $id;
  public $name;
  public $lastname;
  public $email;
  public $password;
  public $cellphone;
  public $admin;
  public $confirmed;
  public $token;

  public function __construct($args = [])
  {
    $this->id = $args['id'] ?? null;
    $this->name = $args['name'] ?? '';
    $this->lastname = $args['lastname'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->password = $args['password'] ?? '';
    $this->cellphone = $args['cellphone'] ?? '';
    $this->admin = $args['admin'] ?? null;
    $this->confirmed = $args['confirmed'] ?? null;
    $this->token = $args['token'] ?? '';
  }

  public function uniqueMail(): object {
    $query = "SELECT * FROM " . self::$table . " WHERE email = '" . $this->email . "' LIMIT 1";
    $response = self::$db->query($query);
    return $response;
  }
}
