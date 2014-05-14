<div class="freaturedproducts form">
<?php echo $this->Form->create('Freaturedproduct'); ?>
	<fieldset>
		<legend><?php echo __('Edit Freaturedproduct'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('order');
		echo $this->Form->input('product_id');
		echo $this->Form->input('childsection_id');
		echo $this->Form->input('section_id');
		echo $this->Form->input('fathersection_id');
		echo $this->Form->input('mastersection_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Freaturedproduct.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Freaturedproduct.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Freaturedproducts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Childsections'), array('controller' => 'childsections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Childsection'), array('controller' => 'childsections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fathersections'), array('controller' => 'fathersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fathersection'), array('controller' => 'fathersections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mastersections'), array('controller' => 'mastersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mastersection'), array('controller' => 'mastersections', 'action' => 'add')); ?> </li>
	</ul>
</div>
