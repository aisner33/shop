<div class="promotioncodes form">
<?php echo $this->Form->create('Promotioncode'); ?>
	<fieldset>
		<legend><?php echo __('Add Promotioncode'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('validityStart');
		echo $this->Form->input('validityEnd');
		echo $this->Form->input('value');
		echo $this->Form->input('origin');
		echo $this->Form->input('status');
		echo $this->Form->input('codeType_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Promotioncodes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Code Types'), array('controller' => 'code_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Code Type'), array('controller' => 'code_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>
