<div class="deliverysSales view">
<h2><?php echo __('Deliverys Sale'); ?></h2>
	<dl>
		<dt><?php echo __('Sale Id'); ?></dt>
		<dd>
			<?php echo h($deliverysSale['DeliverysSale']['sale_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delivery'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deliverysSale['Delivery']['id'], array('controller' => 'deliveries', 'action' => 'view', $deliverysSale['Delivery']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deliverys Sale'), array('action' => 'edit', $deliverysSale['DeliverysSale']['sale_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deliverys Sale'), array('action' => 'delete', $deliverysSale['DeliverysSale']['sale_id']), null, __('Are you sure you want to delete # %s?', $deliverysSale['DeliverysSale']['sale_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deliverys Sales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deliverys Sale'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deliveries'), array('controller' => 'deliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery'), array('controller' => 'deliveries', 'action' => 'add')); ?> </li>
	</ul>
</div>
