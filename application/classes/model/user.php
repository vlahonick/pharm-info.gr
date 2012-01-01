<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {
  protected $_table_name  = 'users';

  protected $_table_columns = array(
    'id' => NULL,
    'email' => NULL,
    'username' => NULL,
    'password' => NULL,
    'logins' => NULL,
    'last_login' => NULL,
  );
}
