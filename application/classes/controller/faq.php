<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Faq extends Controller_Template {

	public function action_index()
	{
    $view = View::factory('faq');
    $this->template->home = FALSE;
    $this->template->title = 'Συχνές Ερωτήσεις - PharmInfo';
    
    $this->template->content = $view;
	}

}
