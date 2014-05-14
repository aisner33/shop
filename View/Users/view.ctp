<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deliveries'), array('controller' => 'deliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery'), array('controller' => 'deliveries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mailingadresses'), array('controller' => 'mailingadresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mailingadress'), array('controller' => 'mailingadresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Userprofiles'), array('controller' => 'userprofiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Userprofile'), array('controller' => 'userprofiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devolutions'), array('controller' => 'devolutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devolution'), array('controller' => 'devolutions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Carts'); ?></h3>
	<?php if (!empty($user['Cart'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Added'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Color Id'); ?></th>
		<th><?php echo __('Size Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Cart'] as $cart): ?>
		<tr>
			<td><?php echo $cart['id']; ?></td>
			<td><?php echo $cart['added']; ?></td>
			<td><?php echo $cart['quantity']; ?></td>
			<td><?php echo $cart['color_id']; ?></td>
			<td><?php echo $cart['size_id']; ?></td>
			<td><?php echo $cart['product_id']; ?></td>
			<td><?php echo $cart['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'carts', 'action' => 'view', $cart['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'carts', 'action' => 'edit', $cart['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carts', 'action' => 'delete', $cart['id']), null, __('Are you sure you want to delete # %s?', $cart['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Deliveries'); ?></h3>
	<?php if (!empty($user['Delivery'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('RecibeDay'); ?></th>
		<th><?php echo __('SendDay'); ?></th>
		<th><?php echo __('Service'); ?></th>
		<th><?php echo __('CodeGuide'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Delivery'] as $delivery): ?>
		<tr>
			<td><?php echo $delivery['id']; ?></td>
			<td><?php echo $delivery['recibeDay']; ?></td>
			<td><?php echo $delivery['sendDay']; ?></td>
			<td><?php echo $delivery['service']; ?></td>
			<td><?php echo $delivery['codeGuide']; ?></td>
			<td><?php echo $delivery['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'deliveries', 'action' => 'view', $delivery['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'deliveries', 'action' => 'edit', $delivery['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'deliveries', 'action' => 'delete', $delivery['id']), null, __('Are you sure you want to delete # %s?', $delivery['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Delivery'), array('controller' => 'deliveries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mailingadresses'); ?></h3>
	<?php if (!empty($user['Mailingadress'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Suburb'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('ExteriorNumber'); ?></th>
		<th><?php echo __('InteriorNumber'); ?></th>
		<th><?php echo __('Reference'); ?></th>
		<th><?php echo __('Cp'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Mailingadress'] as $mailingadress): ?>
		<tr>
			<td><?php echo $mailingadress['id']; ?></td>
			<td><?php echo $mailingadress['country_id']; ?></td>
			<td><?php echo $mailingadress['state_id']; ?></td>
			<td><?php echo $mailingadress['suburb']; ?></td>
			<td><?php echo $mailingadress['street']; ?></td>
			<td><?php echo $mailingadress['exteriorNumber']; ?></td>
			<td><?php echo $mailingadress['interiorNumber']; ?></td>
			<td><?php echo $mailingadress['reference']; ?></td>
			<td><?php echo $mailingadress['cp']; ?></td>
			<td><?php echo $mailingadress['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mailingadresses', 'action' => 'view', $mailingadress['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mailingadresses', 'action' => 'edit', $mailingadress['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mailingadresses', 'action' => 'delete', $mailingadress['id']), null, __('Are you sure you want to delete # %s?', $mailingadress['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mailingadress'), array('controller' => 'mailingadresses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reviews'); ?></h3>
	<?php if (!empty($user['Review'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Star'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Sponsored'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Review'] as $review): ?>
		<tr>
			<td><?php echo $review['id']; ?></td>
			<td><?php echo $review['comment']; ?></td>
			<td><?php echo $review['star']; ?></td>
			<td><?php echo $review['user_id']; ?></td>
			<td><?php echo $review['created']; ?></td>
			<td><?php echo $review['status']; ?></td>
			<td><?php echo $review['sponsored']; ?></td>
			<td><?php echo $review['product_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reviews', 'action' => 'view', $review['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reviews', 'action' => 'edit', $review['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reviews', 'action' => 'delete', $review['id']), null, __('Are you sure you want to delete # %s?', $review['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sales'); ?></h3>
	<?php if (!empty($user['Sale'])): ?>
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
	<?php foreach ($user['Sale'] as $sale): ?>
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
<div class="related">
	<h3><?php echo __('Related Userprofiles'); ?></h3>
	<?php if (!empty($user['Userprofile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Genre'); ?></th>
		<th><?php echo __('Birthday'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Userprofile'] as $userprofile): ?>
		<tr>
			<td><?php echo $userprofile['id']; ?></td>
			<td><?php echo $userprofile['user_id']; ?></td>
			<td><?php echo $userprofile['name']; ?></td>
			<td><?php echo $userprofile['lastname']; ?></td>
			<td><?php echo $userprofile['genre']; ?></td>
			<td><?php echo $userprofile['birthday']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'userprofiles', 'action' => 'view', $userprofile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'userprofiles', 'action' => 'edit', $userprofile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'userprofiles', 'action' => 'delete', $userprofile['id']), null, __('Are you sure you want to delete # %s?', $userprofile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Userprofile'), array('controller' => 'userprofiles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Wishlists'); ?></h3>
	<?php if (!empty($user['Wishlist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Wishlist'] as $wishlist): ?>
		<tr>
			<td><?php echo $wishlist['id']; ?></td>
			<td><?php echo $wishlist['user_id']; ?></td>
			<td><?php echo $wishlist['created']; ?></td>
			<td><?php echo $wishlist['description']; ?></td>
			<td><?php echo $wishlist['visible']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wishlists', 'action' => 'view', $wishlist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wishlists', 'action' => 'edit', $wishlist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wishlists', 'action' => 'delete', $wishlist['id']), null, __('Are you sure you want to delete # %s?', $wishlist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Devolutions'); ?></h3>
	<?php if (!empty($user['Devolution'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('DevolutionDate'); ?></th>
		<th><?php echo __('AcceptanceDate'); ?></th>
		<th><?php echo __('Devolutionsreason Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Devolution'] as $devolution): ?>
		<tr>
			<td><?php echo $devolution['id']; ?></td>
			<td><?php echo $devolution['devolutionDate']; ?></td>
			<td><?php echo $devolution['acceptanceDate']; ?></td>
			<td><?php echo $devolution['devolutionsreason_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'devolutions', 'action' => 'view', $devolution['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'devolutions', 'action' => 'edit', $devolution['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'devolutions', 'action' => 'delete', $devolution['id']), null, __('Are you sure you want to delete # %s?', $devolution['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Devolution'), array('controller' => 'devolutions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Guests'); ?></h3>
	<?php if (!empty($user['Guest'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Genre'); ?></th>
		<th><?php echo __('InvitedDate'); ?></th>
		<th><?php echo __('AceptedInviatation'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Guest'] as $guest): ?>
		<tr>
			<td><?php echo $guest['id']; ?></td>
			<td><?php echo $guest['name']; ?></td>
			<td><?php echo $guest['email']; ?></td>
			<td><?php echo $guest['genre']; ?></td>
			<td><?php echo $guest['invitedDate']; ?></td>
			<td><?php echo $guest['aceptedInviatation']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'guests', 'action' => 'view', $guest['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'guests', 'action' => 'edit', $guest['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'guests', 'action' => 'delete', $guest['id']), null, __('Are you sure you want to delete # %s?', $guest['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
