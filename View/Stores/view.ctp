<div class="stores view">
<h2><?php echo __('Store'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($store['Store']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($store['Store']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SmallDescription'); ?></dt>
		<dd>
			<?php echo h($store['Store']['smallDescription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LargeDescription'); ?></dt>
		<dd>
			<?php echo h($store['Store']['largeDescription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone1'); ?></dt>
		<dd>
			<?php echo h($store['Store']['phone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone2'); ?></dt>
		<dd>
			<?php echo h($store['Store']['phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email1'); ?></dt>
		<dd>
			<?php echo h($store['Store']['email1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email2'); ?></dt>
		<dd>
			<?php echo h($store['Store']['email2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($store['Store']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cp'); ?></dt>
		<dd>
			<?php echo h($store['Store']['cp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb'); ?></dt>
		<dd>
			<?php echo h($store['Store']['suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($store['Store']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('InternalNumber'); ?></dt>
		<dd>
			<?php echo h($store['Store']['internalNumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ExternalNumber'); ?></dt>
		<dd>
			<?php echo h($store['Store']['externalNumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gallerie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($store['Gallerie']['id'], array('controller' => 'galleries', 'action' => 'view', $store['Gallerie']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($store['State']['name'], array('controller' => 'states', 'action' => 'view', $store['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categorystore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($store['Categorystore']['id'], array('controller' => 'categorystores', 'action' => 'view', $store['Categorystore']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store'), array('action' => 'edit', $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store'), array('action' => 'delete', $store['Store']['id']), null, __('Are you sure you want to delete # %s?', $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Galleries'), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallerie'), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorystores'), array('controller' => 'categorystores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorystore'), array('controller' => 'categorystores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($store['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('SmallDescription'); ?></th>
		<th><?php echo __('LargeDescription'); ?></th>
		<th><?php echo __('OtherText'); ?></th>
		<th><?php echo __('CreationDate'); ?></th>
		<th><?php echo __('ModificationDate'); ?></th>
		<th><?php echo __('UserPrice'); ?></th>
		<th><?php echo __('StorePrice'); ?></th>
		<th><?php echo __('Stock'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('BarCode'); ?></th>
		<th><?php echo __('Store Id'); ?></th>
		<th><?php echo __('Brand Id'); ?></th>
		<th><?php echo __('Season Id'); ?></th>
		<th><?php echo __('Gallerie Id'); ?></th>
		<th><?php echo __('Offer Id'); ?></th>
		<th><?php echo __('Realsize Id'); ?></th>
		<th><?php echo __('Vegano'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($store['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['smallDescription']; ?></td>
			<td><?php echo $product['largeDescription']; ?></td>
			<td><?php echo $product['otherText']; ?></td>
			<td><?php echo $product['creationDate']; ?></td>
			<td><?php echo $product['modificationDate']; ?></td>
			<td><?php echo $product['userPrice']; ?></td>
			<td><?php echo $product['storePrice']; ?></td>
			<td><?php echo $product['stock']; ?></td>
			<td><?php echo $product['status']; ?></td>
			<td><?php echo $product['barCode']; ?></td>
			<td><?php echo $product['store_id']; ?></td>
			<td><?php echo $product['brand_id']; ?></td>
			<td><?php echo $product['season_id']; ?></td>
			<td><?php echo $product['gallerie_id']; ?></td>
			<td><?php echo $product['offer_id']; ?></td>
			<td><?php echo $product['realsize_id']; ?></td>
			<td><?php echo $product['vegano']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
