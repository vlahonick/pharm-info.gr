<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Template extends Controller {

	/**
	 * @var  View  page template
	 */
	public $template = 'template';

	/**
	 * @var  boolean  auto render template
	 **/
	public $auto_render = TRUE;

	/**
	 * Loads the template [View] object.
	 */
	public function before()
	{
		parent::before();

		if ($this->auto_render === TRUE)
		{
			// Load the template
			$this->template = View::factory($this->template);
		}
		$this->template->toolbar = Auth::instance()->logged_in('admin') ? View::factory('admin/toolbar') : FALSE;
	}

	/**
	 * Assigns the template [View] as the request response.
	 */
	public function after()
	{
		// Assign the flash messages variable
		$this->template->messages = Message::display();

		if ($this->auto_render === TRUE)
		{
			$this->response->body($this->template->render());
		}

		parent::after();
	}

} // End Controller_Template
