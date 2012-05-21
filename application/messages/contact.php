<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'name' => array(
		'not_empty' => 'Το Όνομα είναι απαραίτητο πεδίο',
	),
	'email' => array(
		'not_empty' => 'Το Email είναι απαραίτητο πεδίο',
		'email' => 'Το πεδίο email πρέπει να είναι μια έγκυρη διεύθυνση e-mail',
	),
	'subject'	 => array(
		'not_empty' => 'Το Θέμα είναι απαραίτητο πεδίο',
	),
	'message' => array(
		'not_empty' => 'Το Μύνημα είναι απαραίτητο πεδίο',
	),
);
