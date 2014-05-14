<div class="galleries form">
<?php echo $this->Form->create('Gallery'); ?>
	<fieldset>
		<legend><?php echo __('Add Gallery'); ?></legend>
	<?php
		echo $this->Form->input('description');
		echo $this->Form->input('thumbnail1');
		echo $this->Form->input('fullImage1');
		echo $this->Form->input('thumbnail2');
		echo $this->Form->input('fullImage2');
		echo $this->Form->input('thumbnail3');
		echo $this->Form->input('fullImage3');
		echo $this->Form->input('thumbnail4');
		echo $this->Form->input('fullImage4');
		echo $this->Form->input('thumbnail5');
		echo $this->Form->input('fullimage5');
		echo $this->Form->input('thumbnail6');
		echo $this->Form->input('fullImage6');
		echo $this->Form->input('thumbnail7');
		echo $this->Form->input('fullImage7');
		echo $this->Form->input('thumbnail8');
		echo $this->Form->input('fullImage8');
		echo $this->Form->input('thumbnail9');
		echo $this->Form->input('fullImage9');
		echo $this->Form->input('thumbnail10');
		echo $this->Form->input('fullImage10');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Galleries'), array('action' => 'index')); ?></li>
	</ul>
</div>
