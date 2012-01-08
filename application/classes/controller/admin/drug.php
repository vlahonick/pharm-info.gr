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
		$drug->storage = "Σε θερμοκρασία έως 28 βαθμούς C,\nξηρό μέρος, μακριά από το φως.";
		$drug->precautions = "Αντενδείκνυται στα άτομα με:\nΠροσοχή στα άτομα με:\nΚύηση:\nΘηλασμός:\nΟδήγηση: Δεν αναμένονται επιπτώσεις.";
		$drug->dosage = "Χορήγηση από το στόμα (p.o.):\nΕνήλικες:\nΗλικιωμένοι:";
		$drug->diet_parameters = "Τροφές/γεύματα:\nΑλκοόλ:\nΠρόσθετες συμβουλές:";
		$drug->chronic_usage = 'Δεν αναμένονται προβλήματα.';
		$drug->interactions = "Β.Ε.:\n\nΒ.Ε.:\n\nΒ.Ε.:";

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
		if ($this->request->post('submit')) {
			echo file_get_contents($_FILES['csv']['tmp_name']);
		}
		$view = View::factory('admin/import_csv');

		$view->messages = Message::display();
		$this->template->content = $view;
	}
}
