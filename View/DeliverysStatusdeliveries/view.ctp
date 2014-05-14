<div class="deliverysStatusdeliveries view">
<h2><?php echo __('Deliverys Statusdelivery'); ?></h2>
	<dl>
		<dt><?php echo __('Modification'); ?></dt>
		<dd>
			<?php echo h($deliverysStatusdelivery['DeliverysStatusdelivery']['modification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delivery Id'); ?></dt>
		<dd>
			<?php echo h($deliverysStatusdelivery['DeliverysStatusdelivery']['delivery_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Statusdelivery'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deliverysStatusdelivery['Statusdelivery']['id'], array('controller' => 'statusdeliveries', 'action' => 'view', $deliverysStatusdelivery['Statusdelivery']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deliverys Statusdelivery'), array('action' => 'edit', $deliverysStatusdelivery['DeliverysStatusdelivery']['delivery_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deliverys Statusdelivery'), array('action' => 'delete', $deliverysStatusdelivery['DeliverysStatusdelivery']['delivery_id']), null, __('Are you sure you want to delete # %s?', $deliverysStatusdelivery['DeliverysStatusdelivery']['delivery_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deliverys Statusdeliveries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deliverys Statusdelivery'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statusdeliveries'), array('controller' => 'statusdeliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Statusdelivery'), array('controller' => 'statusdeliveries', 'action' => 'add')); ?> </li>
	</ul>
</div>
