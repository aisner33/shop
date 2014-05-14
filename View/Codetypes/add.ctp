<div class="codetypes form">
<?php echo $this->Form->create('Codetype'); ?>
	<fieldset>
		<legend><?php echo __('Add Codetype'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Codetypes'), array('action' => 'index')); ?></li>
	</ul>
</div>
