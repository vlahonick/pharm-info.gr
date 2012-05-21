<?php defined('SYSPATH') or die('No direct script access.');

class Model_Formulation extends ORM {

	protected $_table_name = 'formulations';

	protected $_table_columns = array(
		'id' => NULL,
		'name' => NULL,
	);

	protected $_has_many = array(
		'drugs' => array(
			'model' => 'drug',
			'through' => 'drugs_formulations_extras',
		),
	);

	protected $_has_one = array(
		'drug' => array(
			'model' => 'formulation',
		),
	);

	/**
	 * Labels for fields in this model
	 *
	 * @return array Labels
	 */
	public function labels()
	{
		return array('name' => 'Σκευάσματα με συνδυασμένα συστατικά');
	}

}
