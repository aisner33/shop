<div class="devolutionsReasons form">
<?php echo $this->Form->create('DevolutionsReason'); ?>
	<fieldset>
		<legend><?php echo __('Add Devolutions Reason'); ?></legend>
	<?php
		echo $this->Form->input('reason');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Devolutions Reasons'), array('action' => 'index')); ?></li>
	</ul>
</div>
