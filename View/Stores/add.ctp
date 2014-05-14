<div class="stores form">
<?php echo $this->Form->create('Store'); ?>
	<fieldset>
		<legend><?php echo __('Add Store'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('smallDescription');
		echo $this->Form->input('largeDescription');
		echo $this->Form->input('phone1');
		echo $this->Form->input('phone2');
		echo $this->Form->input('email1');
		echo $this->Form->input('email2');
		echo $this->Form->input('city');
		echo $this->Form->input('cp');
		echo $this->Form->input('suburb');
		echo $this->Form->input('street');
		echo $this->Form->input('internalNumber');
		echo $this->Form->input('externalNumber');
		echo $this->Form->input('gallerie_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('categorystore_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Galleries'), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallerie'), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorystores'), array('controller' => 'categorystores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorystore'), array('controller' => 'categorystores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
