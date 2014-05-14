<div class="childsectionsProducts view">
<h2><?php echo __('Childsections Product'); ?></h2>
	<dl>
		<dt><?php echo __('Child Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($childsectionsProduct['ChildSection']['name'], array('controller' => 'child_sections', 'action' => 'view', $childsectionsProduct['ChildSection']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($childsectionsProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $childsectionsProduct['Product']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Childsections Product'), array('action' => 'edit', $childsectionsProduct['ChildsectionsProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Childsections Product'), array('action' => 'delete', $childsectionsProduct['ChildsectionsProduct']['id']), null, __('Are you sure you want to delete # %s?', $childsectionsProduct['ChildsectionsProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Childsections Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Childsections Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Child Sections'), array('controller' => 'child_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Child Section'), array('controller' => 'child_sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
