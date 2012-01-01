<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Disclaimer extends Controller_Template {

  public function action_index()
  {
    $view = View::factory('disclaimer');
    $this->template->title = 'Disclaimer - PharmInfo';

    $this->template->content = $view;
  }

}
