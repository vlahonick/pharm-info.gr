<div id="main">

<h1>Επικοινωνία</h1>

<?php if ($errors): ?>
	<ul class="error message">
	<?php foreach ($errors as $name => $error): ?>
		<li>Άκυρο <?php echo $name ?></li>
	<?php endforeach ?>
	</ul>
<?php else: ?>
	<?php if(Request::current()->post('submit')) : ?>
	<ul class="success message">
		<li>Το μήνυμά σας παραδόθηκε! Ευχαριστούμε που επικοινωνήσατε μαζί μας!</li>
	</ul>
	<?php endif ?>
<?php endif ?>

<?php echo form::open('contact/send') ?>

<div class="contact-form">
	<?php echo form::label('name', 'Όνομα:') ?>
	<?php echo form::input('Όνομα', '', array('id' => 'name')) ?>
</div>
<div class="contact-form">
	<?php echo form::label('from', 'Email:') ?>
	<?php echo form::input('Email', '', array('id' => 'from')) ?>
</div>
<div class="contact-form">
	<?php echo form::label('subject', 'Θέμα:') ?>
	<?php echo form::input('Θέμα', '', array('id' => 'subject')) ?>
</div>
<div class="contact-form">
	<?php echo form::label('message', 'Μήνυμα:') ?>
	<?php echo form::textarea('Μήνυμα', '', array('id' => 'message')) ?>
</div>
<div class="contact-form">
	<?php echo form::submit('submit', 'Αποστολή') ?>
</div>
<?php echo form::close() ?>

</div>
