<div class="deliveries view">
<h2><?php echo __('Delivery'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RecibeDay'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['recibeDay']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SendDay'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['sendDay']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['service']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CodeGuide'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['codeGuide']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($delivery['User']['id'], array('controller' => 'users', 'action' => 'view', $delivery['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Delivery'), array('action' => 'edit', $delivery['Delivery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Delivery'), array('action' => 'delete', $delivery['Delivery']['id']), null, __('Are you sure you want to delete # %s?', $delivery['Delivery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deliveries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sales'); ?></h3>
	<?php if (!empty($delivery['Sale'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('SaleDate'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Color Id'); ?></th>
		<th><?php echo __('Size Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('TotalCost'); ?></th>
		<th><?php echo __('Promotioncode Id'); ?></th>
		<th><?php echo __('Offer Id'); ?></th>
		<th><?php echo __('SubTotal'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($delivery['Sale'] as $sale): ?>
		<tr>
			<td><?php echo $sale['id']; ?></td>
			<td><?php echo $sale['saleDate']; ?></td>
			<td><?php echo $sale['quantity']; ?></td>
			<td><?php echo $sale['color_id']; ?></td>
			<td><?php echo $sale['size_id']; ?></td>
			<td><?php echo $sale['product_id']; ?></td>
			<td><?php echo $sale['user_id']; ?></td>
			<td><?php echo $sale['totalCost']; ?></td>
			<td><?php echo $sale['promotioncode_id']; ?></td>
			<td><?php echo $sale['offer_id']; ?></td>
			<td><?php echo $sale['subTotal']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sales', 'action' => 'view', $sale['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sales', 'action' => 'edit', $sale['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sales', 'action' => 'delete', $sale['id']), null, __('Are you sure you want to delete # %s?', $sale['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
