<div class="sections view">
<h2><?php echo __('Section'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($section['Section']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($section['Section']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($section['Section']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($section['Section']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($section['Section']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Childsection Id'); ?></dt>
		<dd>
			<?php echo h($section['Section']['childsection_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Section'), array('action' => 'edit', $section['Section']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Section'), array('action' => 'delete', $section['Section']['id']), null, __('Are you sure you want to delete # %s?', $section['Section']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('action' => 'add')); ?> </li>
	</ul>
</div>
