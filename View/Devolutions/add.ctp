<div class="devolutions form">
<?php echo $this->Form->create('Devolution'); ?>
	<fieldset>
		<legend><?php echo __('Add Devolution'); ?></legend>
	<?php
		echo $this->Form->input('devolutionDate');
		echo $this->Form->input('acceptanceDate');
		echo $this->Form->input('devolutionsreason_id');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Devolutions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Devolutionsreasons'), array('controller' => 'devolutionsreasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devolutionsreason'), array('controller' => 'devolutionsreasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
