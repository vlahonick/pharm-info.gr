<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Drug extends Controller_Admin_Template {

	public function action_add()
	{
		if ($this->request->post('submit')) {
			// First create/save the Formulation if not already exists
			$formulation = ORM::factory('formulation')
				->where('name', '=', $this->request->post('formulation_id'))
				->find();

			if ( ! $formulation->id) {
				$formulation = ORM::factory('formulation');
				$formulation->name = $this->request->post('formulation_id');
				$formulation->save();
			}

			$drug = ORM::factory('drug');
			$drug->values($this->request->post());
			$drug->profile = serialize($drug->profile);
			$drug->formulation_id = $formulation->id;
			$drug->save();
			Message::success('Drug created successfully');
			// Add categories
			foreach ($this->request->post('categories') as $category_id) {
				$drug->add('categories', ORM::factory('category')->where('id', '=', $category_id)->find());
			}
			// Add extra_formulations
			$extra_formulations = explode(',', $this->request->post('formulations'));
			foreach ($extra_formulations as $formulation_name) {
				$drug->add('formulations', ORM::factory('formulation')->where('name', '=', $formulation_name)->find());
			}
		}
		$category = ORM::factory('category');
		$formulation = ORM::factory('formulation');
		$drug = ORM::factory('drug');

		// Default values
		$drug->profile = array(
			'overdose' => 'high',
			'side_effects' => 'high',
			'interactions' => 'high',
		);

		$drug->storage = 'Σε θερμοκρασία έως 28 βαθμούς C,<br />ξηρό μέρος, μακριά από το φως.';

		$drug->precautions = '<strong>Αντενδείκνυται στα άτομα με:</strong><br /><br />'
			.'<strong>Προσοχή στα άτομα με:</strong><br /><br />'
			.'<strong>Κύηση:</strong><br /><br />'
			.'<strong>Θηλασμός:</strong><br /><br />'
			.'<strong>Οδήγηση:</strong> Δεν αναμένονται επιπτώσεις.';

		$drug->dosage = '<strong>Χορήγηση από το στόμα (p.o.):</strong><br /><br />'
			.'<strong>Ενήλικες:</strong><br /><br />'
			.'<strong>Ηλικιωμένοι:</strong>';

		$drug->action = '<strong>Έναρξη δράσης:</strong><br /><br />'
			.'<strong>Μέγιστη συγκέντρωση στον ορό:</strong><br /><br />'
			.'<strong>Διάρκεια δράσης:</strong><br /><br />'
			.'<strong>Εάν χαθεί μια δόση:</strong><br /><br />'
			.'<strong>Υπέρβαση της δόσης:</strong>';

		$drug->diet_parameters = '<strong>Τροφές/γεύματα:</strong><br /><br />'
			.'<strong>Αλκοόλ:</strong><br /><br />'
			.'<strong>Πρόσθετες συμβουλές:</strong>';

		$drug->side_effects = 'Συχνότητα: εμφανίζεται συχνά. Ειδοποιήστε το γιατρό σε: ένταση ή επιμονή.';

		$drug->chronic_usage = 'Δεν αναμένονται προβλήματα.';
		$drug->interactions = '<strong>Β.Ε.:</strong><br /><br /><strong>Β.Ε.:</strong><br /><br /><strong>Β.Ε.:</strong>';

		$results = $category->find_all();
		foreach ($results as $category) {
			$categories[$category->id] = $category->name;
		}

		$labels = array_merge($drug->labels(), $category->labels());
		// Formulations and categories has the same field name in database
		// so we have to seperate them before merging the rest lablels.
		$labels['category_name'] = $labels['name'];
		$labels = array_merge($labels, $formulation->labels());

		$view = View::factory('admin/drug');
		$view->drug = $drug;
		$view->labels = $labels;
		$view->categories = isset($categories) ? $categories : array();

		$view->messages = Message::display();
		$this->template->content = $view;
	}

	public function action_import()
	{

		if ($this->request->post('submit') && ($handle = fopen($_FILES['csv']['tmp_name'], "r")) !== FALSE) {
			$i = 0;
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				if ($i === 1) print_r($data);
				// Check if substance exists
				$drug = ORM::factory('drug')
					->where('substance', '=', $data[1])
					->find();

				if ( ! $drug->id) {
					$drug = ORM::factory('drug');
					$drug->substance_en = $data[0];
					$drug->substance = $data[1];
					$drug->chemical_info = nl2br($data[3]);

					$formulation = ORM::factory('formulation')
						->where('name', '=', $data[4])
						->find();

					if ( ! $formulation->id) {
						$formulation = ORM::factory('formulation');
						$formulation->name = $data[4];
						$formulation->save();
					}

					$drug->formulation_id = $formulation->id;

					$drug->forms = nl2br($data[6]);
					$drug->profile = nl2br($data[7]);
					$drug->action_mechanism = nl2br($data[8]);
					$drug->indications = nl2br($data[9]);
					$drug->precautions = nl2br($data[10]);
					$drug->side_effects = nl2br($data[11]);
					$drug->interactions = nl2br($data[12]);
					$drug->diet_parameters = nl2br($data[13]);
					$drug->dosage = nl2br($data[14]);
					$drug->action = nl2br($data[15]);
					$drug->overdose = nl2br($data[16]);
					$drug->chronic_usage = nl2br($data[17]);
					$drug->attention_points = nl2br($data[18]);
					$drug->storage = nl2br($data[19]);
					$drug->save();

					$categories = explode(',', $data[2]);
					foreach ($categories as $cat) {
						// Create new if not exists
						$category = ORM::factory('category')
						->where('name', '=', $cat)
						->find();

						if ( ! $category->id) {
							$category = ORM::factory('category');
							$category->name = $cat;
							$category->save();
						}
						$drug->add('categories', $category);
					}

					$formulations = explode(',', $data[5]);
					foreach ($formulations as $formul) {
						// Create new if not exists
						$formulation = ORM::factory('formulation')
						->where('name', '=', $formul)
						->find();

						if ( ! $formulation->id) {
							$formulation = ORM::factory('formulation');
							$formulation->name = $formul;
							$formulation->save();
						}
						$drug->add('formulations', $formulation);
					}
					$i++;
				}
			}

			Message::success("Saved $i drugs");
			fclose($handle);
		}

		$view = View::factory('admin/import_csv');

		$view->messages = Message::display();
		$this->template->content = $view;
	}
}
