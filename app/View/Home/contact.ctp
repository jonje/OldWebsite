<h1>Contact Us</h1>
<?= $this->Form->create('Contact'); ?>
<?= $this->Form->input('email'); ?>
<?= $this->Form->input('message', array('rows' => '3')); ?>
<?= $this->Form->end('Send'); ?>
