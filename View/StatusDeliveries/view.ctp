<div class="statusDeliveries view">
<h2><?php echo __('Status Delivery'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($statusDelivery['StatusDelivery']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($statusDelivery['StatusDelivery']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($statusDelivery['StatusDelivery']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Status Delivery'), array('action' => 'edit', $statusDelivery['StatusDelivery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Status Delivery'), array('action' => 'delete', $statusDelivery['StatusDelivery']['id']), null, __('Are you sure you want to delete # %s?', $statusDelivery['StatusDelivery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Deliveries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Delivery'), array('action' => 'add')); ?> </li>
	</ul>
</div>
