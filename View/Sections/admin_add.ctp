<div class="sections form">
<?php echo $this->Form->create('Section'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Section'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('status');
		echo $this->Form->input('order');
		echo $this->Form->input('childsection_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index')); ?></li>
	</ul>
</div>
