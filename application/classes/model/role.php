<?php defined('SYSPATH') or die('No direct script access.');

class Model_Role extends Model_Auth_Role {
	protected $_table_name = 'roles';

	protected $_table_columns = array(
		'id' => NULL,
		'name' => NULL,
		'description' => NULL,
	);
}
