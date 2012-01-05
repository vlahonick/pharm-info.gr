<?php defined('SYSPATH') or die('No direct script access.');

class Model_Drug extends ORM {

	protected $_table_name = 'drugs';

	protected $_table_columns = array(
		'id' => NULL,
		'substance' => NULL,
		'substance_en' => NULL,
		'formulation_id' => NULL,
		'chemical_info' => NULL,
		'forms' => NULL,
		'profile' => NULL,
		'action_mechanism' => NULL,
		'indications' => NULL,
		'precautions' => NULL,
		'side_effects' => NULL,
		'interactions' => NULL,
		'diet_parameters' => NULL,
		'dosage' => NULL,
		'action' => NULL,
		'overdose' => NULL,
		'chronic_usage' => NULL,
		'attention_points' => NULL,
		'storage' => NULL,
	);

	protected $_has_many = array(
		'formulations' => array(
			'model' => 'formulation',
			'through' => 'drugs_formulations_extras',
		),
		'categories' => array(
			'model' => 'category',
			'through' => 'drugs_categories',
		),
	);

	protected $_has_one = array(
		'formulation' => array(
			'model' => 'formulation',
			'foreign_key' => 'formulation_id',
		),
	);

	/**
	 * Labels for fields in this model
	 *
	 * @return array Labels
	 */
	public function labels()
	{
		return array(
			'substance' => 'Δραστική Ουσία',
			'substance_en' => 'Δραστική Ουσία EN',
			'formulation_id' => 'Σκεύασμα',
			'chemical_info' => 'Χημικές Πληροφορίες',
			'forms' => 'Μορφές',
			'profile' => 'Προφίλ Φαρμάκου',
			'action_mechanism' => 'Μηχανισμός Δράσης',
			'indications' => 'Ενδείξεις - Χρήσεις',
			'precautions' => 'Προφυλάξεις',
			'side_effects' => 'Παρενέργεις',
			'interactions' => 'Αλληλεπιδράσεις',
			'diet_parameters' => 'Διαιτητικές Παράμετροι',
			'dosage' => 'Δοσολογία',
			'action' => 'Δράση',
			'overdose' => 'Υπερδοσολογία',
			'chronic_usage' => 'Χρόνια Χορήγηση',
			'attention_points' => 'Σημεία Προσοχής',
			'storage' => 'Φύλαξη',
		);
	}
}
