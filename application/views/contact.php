<div id="main">

<h1>Επικοινωνία</h1>

<?php echo form::open('contact/send') ?>

<div class="contact-form">
	<?php echo form::label('name', 'Όνομα:') ?>
	<?php echo form::input('name', '', array('id' => 'name')) ?>
</div>
<div class="contact-form">
	<?php echo form::label('from', 'Email:') ?>
	<?php echo form::input('email', '', array('id' => 'from')) ?>
</div>
<div class="contact-form">
	<?php echo form::label('subject', 'Θέμα:') ?>
	<?php echo form::input('subject', '', array('id' => 'subject')) ?>
</div>
<div class="contact-form">
	<?php echo form::label('message', 'Μήνυμα:') ?>
	<?php echo form::textarea('message', '', array('id' => 'message')) ?>
</div>
<div class="contact-form">
	<?php echo form::submit('submit', 'Αποστολή') ?>
</div>
<?php echo form::close() ?>

</div>
