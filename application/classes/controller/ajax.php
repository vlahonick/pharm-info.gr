<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {

	public function before()
	{
		parent::before();
		if ( ! $this->request->is_ajax())
		{
			//$this->request->redirect('home');
		}
		$this->response->headers('Content-Type', 'application/json');
	}

	public function action_formulation()
	{
		$results = ORM::factory('formulation')
			->where('name', 'LIKE', '%'.$this->request->query('term').'%')
			->find_all();
		$formulations = array();
		foreach ($results as $result) {
			$formulations[] = array(
				'id' => $result->name,
				'label' => $result->name,
				'value' => $result->name,
			);
		}
		$this->response->body(json_encode($formulations));
	}

}
