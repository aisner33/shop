<div class="labels form">
<?php echo $this->Form->create('Label'); ?>
	<fieldset>
		<legend><?php echo __('Edit Label'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('composition');
		echo $this->Form->input('madeIn');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Label.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Label.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Labels'), array('action' => 'index')); ?></li>
	</ul>
</div>
