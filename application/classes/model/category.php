<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM {

	protected $_table_name = 'categories';

	protected $_table_columns = array(
		'id' => NULL,
		'name' => NULL,
	);

	protected $_has_many = array(
		'drugs' => array(
			'model' => 'drug',
			'through' => 'drugs_categories',
		),
	);

	/**
	 * Labels for fields in this model
	 *
	 * @return array Labels
	 */
	public function labels()
	{
		return array('name' => 'Φαρμακολογική Κατηγορία');
	}

}
