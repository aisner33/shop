<div class="devolutionsUsers form">
<?php echo $this->Form->create('DevolutionsUser'); ?>
	<fieldset>
		<legend><?php echo __('Add Devolutions User'); ?></legend>
	<?php
		echo $this->Form->input('devolutions_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Devolutions Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Devolutions'), array('controller' => 'devolutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devolutions'), array('controller' => 'devolutions', 'action' => 'add')); ?> </li>
	</ul>
</div>
