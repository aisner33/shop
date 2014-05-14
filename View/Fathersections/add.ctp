<div class="fathersections form">
<?php echo $this->Form->create('Fathersection'); ?>
	<fieldset>
		<legend><?php echo __('Add Fathersection'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('status');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fathersections'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Childsections'), array('controller' => 'childsections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Childsection'), array('controller' => 'childsections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Father Sections Products'), array('controller' => 'father_sections_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Father Sections Product'), array('controller' => 'father_sections_products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Freaturedproducts'), array('controller' => 'freaturedproducts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Freaturedproduct'), array('controller' => 'freaturedproducts', 'action' => 'add')); ?> </li>
	</ul>
</div>
