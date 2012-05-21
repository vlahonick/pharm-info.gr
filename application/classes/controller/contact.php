<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Template {

	public function action_index()
	{
		$view = View::factory('contact');
		$this->template->title = 'Επικοινωνία | PharmInfo - Οδηγός Φαρμάκων';

		$this->template->content = $view;
	}

	public function action_send()
	{
		$post = Validation::factory($this->request->post());
		$post->rule('name', 'not_empty')
			->rule('email', 'not_empty')
			->rule('email', 'email')
			->rule('email', 'email_domain')
			->rule('subject', 'not_empty')
			->rule('message', 'not_empty');
		if ($post->check())
		{
			Email::connect();
			$to = array('to' => 'rootatwc@gmail.com' , 'cc' => 'vlahonick@gmail.com');
			$from = strip_tags($this->request->post('email'));
			$subject = strip_tags($this->request->post('subject'));

			$message = HTML::chars($this->request->post('message')).'<br/><hr/><br/>sent from '
				.strip_tags($this->request->post('name')).' at '
				.date('m-d-Y H:i', $_SERVER['REQUEST_TIME']).
				' using your contact form at http://pharm-info.gr/contact';

			Email::send($to, $from, $subject, $message, TRUE);
			Message::success('Το μήνυμά σας παραδόθηκε! Ευχαριστούμε που επικοινωνήσατε μαζί μας!');
		}
		else
		{
			Message::error($post->errors('contact'));
		}

		$this->request->redirect('contact');
	}
}
