<div class="realsizes form">
<?php echo $this->Form->create('Realsize'); ?>
	<fieldset>
		<legend><?php echo __('Add Realsize'); ?></legend>
	<?php
		echo $this->Form->input('large');
		echo $this->Form->input('width');
		echo $this->Form->input('height');
		echo $this->Form->input('mediumLarge');
		echo $this->Form->input('mediumWidth');
		echo $this->Form->input('weight');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Realsizes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
