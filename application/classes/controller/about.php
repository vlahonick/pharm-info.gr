<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Template {

  public function action_index()
  {
    $view = View::factory('about');
    $this->template->title = 'PharmInfo - Οδηγός Φαρμάκων';

    $this->template->content = $view;
  }

}
