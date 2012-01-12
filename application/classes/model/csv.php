<?php defined('SYSPATH') or die('No direct script access.');

class Model_CSV extends Model {

	public function map_drug($data) {
		$data = array_map('nl2br', $data);
		$data = array_map('trim', $data);
		$drug = ORM::factory('drug');
		$drug->substance_en = $data[0];
		$drug->substance = $data[1];
		$drug->chemical_info = $data[3];

		$formulation = ORM::factory('formulation')
			->where('name', '=', $data[4])
			->find();

		if ( ! $formulation->id) {
			$formulation = ORM::factory('formulation');
			$formulation->name = $data[4];
			$formulation->save();
		}

		$drug->formulation_id = $formulation->id;

		$drug->forms = $data[6];
		$drug->profile = $data[7];
		$drug->action_mechanism = $data[8];
		$drug->indications = $data[9];
		$drug->precautions = $data[10];
		$drug->side_effects = $data[11];
		$drug->interactions = $data[12];
		$drug->diet_parameters = $data[13];
		$drug->dosage = $data[14];
		$drug->action = $data[15];
		$drug->overdose = $data[16];
		$drug->chronic_usage = $data[17];
		$drug->attention_points = $data[18];
		$drug->storage = $data[19];
		$drug->save();

		$categories = explode(',', $data[2]);
		foreach ($categories as $cat) {
			// Create new if not exists
			$category = ORM::factory('category')
			->where('name', '=', $cat)
			->find();

			if ( ! $category->id) {
				$category = ORM::factory('category');
				$category->name = trim(strip_tags($cat));
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
	}
}
