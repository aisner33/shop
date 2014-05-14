<div class="freaturedproducts view">
<h2><?php echo __('Freaturedproduct'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($freaturedproduct['Freaturedproduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($freaturedproduct['Freaturedproduct']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($freaturedproduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $freaturedproduct['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Childsection'); ?></dt>
		<dd>
			<?php echo $this->Html->link($freaturedproduct['Childsection']['name'], array('controller' => 'childsections', 'action' => 'view', $freaturedproduct['Childsection']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($freaturedproduct['Section']['name'], array('controller' => 'sections', 'action' => 'view', $freaturedproduct['Section']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fathersection'); ?></dt>
		<dd>
			<?php echo $this->Html->link($freaturedproduct['Fathersection']['name'], array('controller' => 'fathersections', 'action' => 'view', $freaturedproduct['Fathersection']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mastersection'); ?></dt>
		<dd>
			<?php echo $this->Html->link($freaturedproduct['Mastersection']['name'], array('controller' => 'mastersections', 'action' => 'view', $freaturedproduct['Mastersection']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Freaturedproduct'), array('action' => 'edit', $freaturedproduct['Freaturedproduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Freaturedproduct'), array('action' => 'delete', $freaturedproduct['Freaturedproduct']['id']), null, __('Are you sure you want to delete # %s?', $freaturedproduct['Freaturedproduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Freaturedproducts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Freaturedproduct'), array('action' => 'add')); ?> </li>
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
