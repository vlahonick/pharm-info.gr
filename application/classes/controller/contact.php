<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Template {

  public function action_index($errors = NULL)
  {
    $view = View::factory('contact');
    $this->template->home = FALSE;
    $view->errors = $errors;
    $this->template->title = 'Επικοινωνήστε μαζί μας - PharmInfo';
    
    $this->template->content = $view;
  }

  public function action_send()
  {
    $post = Validation::factory($this->request->post());
    $post->rule('Όνομα', 'not_empty')
      ->rule('Email', 'not_empty')
      ->rule('Email', 'email')
      ->rule('Email', 'email_domain')
      ->rule('Θέμα', 'not_empty')
      ->rule('Μήνυμα', 'not_empty');
    if ($post->check())
    {
      Email::connect();
      $to = array('to' => 'rootatwc@gmail.com' , 'cc' => 'vlahonick@gmail.com');
      $from = strip_tags($this->request->post('email'));
      $subject = strip_tags($this->request->post('subject'));

      $message = HTML::chars($this->request->post('message')).'<br/><hr/><br/>sent from '
        .strip_tags($this->request->post('name')).' at '
        .date('m-d-Y H:i', $_SERVER['REQUEST_TIME']).
        ' using your contact form at http://rootatwc.com/contact';

      Email::send($to, $from, $subject, $message, $html = TRUE);

    }
    $errors = $post->errors();
    $this->action_index($errors);

  }
}
