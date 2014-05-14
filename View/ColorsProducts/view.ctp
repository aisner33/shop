<div class="colorsProducts view">
<h2><?php echo __('Colors Product'); ?></h2>
	<dl>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo $this->Html->link($colorsProduct['Color']['name'], array('controller' => 'colors', 'action' => 'view', $colorsProduct['Color']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($colorsProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $colorsProduct['Product']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Colors Product'), array('action' => 'edit', $colorsProduct['ColorsProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Colors Product'), array('action' => 'delete', $colorsProduct['ColorsProduct']['id']), null, __('Are you sure you want to delete # %s?', $colorsProduct['ColorsProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Colors Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colors Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colors'), array('controller' => 'colors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Color'), array('controller' => 'colors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
