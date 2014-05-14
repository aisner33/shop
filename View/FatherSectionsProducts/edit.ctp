<div class="fatherSectionsProducts form">
<?php echo $this->Form->create('FatherSectionsProduct'); ?>
	<fieldset>
		<legend><?php echo __('Edit Father Sections Product'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('fathersection_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FatherSectionsProduct.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FatherSectionsProduct.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Father Sections Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fathersections'), array('controller' => 'fathersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fathersection'), array('controller' => 'fathersections', 'action' => 'add')); ?> </li>
	</ul>
</div>
