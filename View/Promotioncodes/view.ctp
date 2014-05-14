<div class="promotioncodes view">
<h2><?php echo __('Promotioncode'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($promotioncode['Promotioncode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($promotioncode['Promotioncode']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ValidityStart'); ?></dt>
		<dd>
			<?php echo h($promotioncode['Promotioncode']['validityStart']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ValidityEnd'); ?></dt>
		<dd>
			<?php echo h($promotioncode['Promotioncode']['validityEnd']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($promotioncode['Promotioncode']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Origin'); ?></dt>
		<dd>
			<?php echo h($promotioncode['Promotioncode']['origin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($promotioncode['Promotioncode']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($promotioncode['CodeType']['name'], array('controller' => 'code_types', 'action' => 'view', $promotioncode['CodeType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Promotioncode'), array('action' => 'edit', $promotioncode['Promotioncode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Promotioncode'), array('action' => 'delete', $promotioncode['Promotioncode']['id']), null, __('Are you sure you want to delete # %s?', $promotioncode['Promotioncode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Promotioncodes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promotioncode'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Code Types'), array('controller' => 'code_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Code Type'), array('controller' => 'code_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sales'); ?></h3>
	<?php if (!empty($promotioncode['Sale'])): ?>
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
	<?php foreach ($promotioncode['Sale'] as $sale): ?>
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
