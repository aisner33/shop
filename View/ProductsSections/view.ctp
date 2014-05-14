<div class="productsSections view">
<h2><?php echo __('Products Section'); ?></h2>
	<dl>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productsSection['Section']['name'], array('controller' => 'sections', 'action' => 'view', $productsSection['Section']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productsSection['Product']['name'], array('controller' => 'products', 'action' => 'view', $productsSection['Product']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Products Section'), array('action' => 'edit', $productsSection['ProductsSection']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Products Section'), array('action' => 'delete', $productsSection['ProductsSection']['id']), null, __('Are you sure you want to delete # %s?', $productsSection['ProductsSection']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products Sections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products Section'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
