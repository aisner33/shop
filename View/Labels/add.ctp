<div class="labels form">
<?php echo $this->Form->create('Label'); ?>
	<fieldset>
		<legend><?php echo __('Add Label'); ?></legend>
	<?php
		echo $this->Form->input('composition');
		echo $this->Form->input('madeIn');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Labels'), array('action' => 'index')); ?></li>
	</ul>
</div>
