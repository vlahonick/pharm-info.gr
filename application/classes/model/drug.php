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
			'interactions' => 'Αλληλεπιδράσεις και Βαθμός Επικινδυνότητας',
			'diet_parameters' => 'Διαιτητικές Παράμετροι',
			'dosage' => 'Δοσολογία',
			'action' => 'Δράση',
			'overdose' => 'Υπερδοσολογία (Ενδείξεις και Συμπτώματα)',
			'chronic_usage' => 'Χρόνια Χορήγηση',
			'attention_points' => 'Σημεία Προσοχής',
			'storage' => 'Φύλαξη',
		);
	}

	/**
	 * Assign default values for drug properties.
	 *
	 * @return  $this
	 */
	public function defaults()
	{
		$this->profile = array(
			'overdose' => 'high',
			'side_effects' => 'high',
			'interactions' => 'high',
		);

		$this->storage = 'Σε θερμοκρασία έως 28 βαθμούς C,<br />ξηρό μέρος, μακριά από το φως.';

		$this->precautions = '<strong>Αντενδείκνυται στα άτομα με:</strong><br /><br />'
			.'<strong>Προσοχή στα άτομα με:</strong><br /><br />'
			.'<strong>Κύηση:</strong><br /><br />'
			.'<strong>Θηλασμός:</strong><br /><br />'
			.'<strong>Οδήγηση:</strong> Δεν αναμένονται επιπτώσεις.';

		$this->dosage = '<strong>Χορήγηση από το στόμα (p.o.):</strong><br /><br />'
			.'<strong>Ενήλικες:</strong><br /><br />'
			.'<strong>Ηλικιωμένοι:</strong>';

		$this->action = '<strong>Έναρξη δράσης:</strong><br /><br />'
			.'<strong>Μέγιστη συγκέντρωση στον ορό:</strong><br /><br />'
			.'<strong>Διάρκεια δράσης:</strong><br /><br />'
			.'<strong>Εάν χαθεί μια δόση:</strong>Να ληφθεί το συντομότερο δυνατό. Αν η επόμενη δόση είναι μέσα στις επόμενες h, να ληφθεί άμεσα μια δόση και να παραληφθεί η επόμενη.<br /><br />'
			.'<strong>Υπέρβαση της δόσης:</strong>Μια επιπλέον δόση δεν προκαλεί ανησυχία.Εάν ληφθεί μεγαλύτερη δόση ή εάν παρατηρηθούν ασυνήθιστα συμπτώματα, απαιτείται η συμβουλή γιατρού';

		$this->diet_parameters = '<strong>Τροφές/γεύματα:</strong><br /><br />'
			.'<strong>Αλκοόλ:</strong><br /><br />'
			.'<strong>Πρόσθετες συμβουλές:</strong>';

		$this->side_effects = 'Συχνότητα: εμφανίζεται συχνά. Ειδοποιήστε το γιατρό σε: ένταση ή επιμονή.';

		$this->chronic_usage = 'Δεν αναμένονται προβλήματα.';
		$this->interactions = '<strong>Β.Ε.:</strong><br /><br /><strong>Β.Ε.:</strong><br /><br /><strong>Β.Ε.:</strong>';

		return $this;
	}
}
