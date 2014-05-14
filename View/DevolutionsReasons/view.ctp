<div class="devolutionsReasons view">
<h2><?php echo __('Devolutions Reason'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($devolutionsReason['DevolutionsReason']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
			<?php echo h($devolutionsReason['DevolutionsReason']['reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($devolutionsReason['DevolutionsReason']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Devolutions Reason'), array('action' => 'edit', $devolutionsReason['DevolutionsReason']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Devolutions Reason'), array('action' => 'delete', $devolutionsReason['DevolutionsReason']['id']), null, __('Are you sure you want to delete # %s?', $devolutionsReason['DevolutionsReason']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Devolutions Reasons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devolutions Reason'), array('action' => 'add')); ?> </li>
	</ul>
</div>
