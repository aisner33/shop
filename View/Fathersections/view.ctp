<div class="fathersections view">
<h2><?php echo __('Fathersection'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fathersection['Fathersection']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($fathersection['Fathersection']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($fathersection['Fathersection']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($fathersection['Fathersection']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($fathersection['Fathersection']['order']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fathersection'), array('action' => 'edit', $fathersection['Fathersection']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fathersection'), array('action' => 'delete', $fathersection['Fathersection']['id']), null, __('Are you sure you want to delete # %s?', $fathersection['Fathersection']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fathersections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fathersection'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Childsections'), array('controller' => 'childsections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Childsection'), array('controller' => 'childsections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Father Sections Products'), array('controller' => 'father_sections_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Father Sections Product'), array('controller' => 'father_sections_products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Freaturedproducts'), array('controller' => 'freaturedproducts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Freaturedproduct'), array('controller' => 'freaturedproducts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Childsections'); ?></h3>
	<?php if (!empty($fathersection['Childsection'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Fathersection Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fathersection['Childsection'] as $childsection): ?>
		<tr>
			<td><?php echo $childsection['id']; ?></td>
			<td><?php echo $childsection['name']; ?></td>
			<td><?php echo $childsection['description']; ?></td>
			<td><?php echo $childsection['status']; ?></td>
			<td><?php echo $childsection['order']; ?></td>
			<td><?php echo $childsection['fathersection_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'childsections', 'action' => 'view', $childsection['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'childsections', 'action' => 'edit', $childsection['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'childsections', 'action' => 'delete', $childsection['id']), null, __('Are you sure you want to delete # %s?', $childsection['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Childsection'), array('controller' => 'childsections', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Father Sections Products'); ?></h3>
	<?php if (!empty($fathersection['FatherSectionsProduct'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Fathersection Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fathersection['FatherSectionsProduct'] as $fatherSectionsProduct): ?>
		<tr>
			<td><?php echo $fatherSectionsProduct['product_id']; ?></td>
			<td><?php echo $fatherSectionsProduct['fathersection_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'father_sections_products', 'action' => 'view', $fatherSectionsProduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'father_sections_products', 'action' => 'edit', $fatherSectionsProduct['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'father_sections_products', 'action' => 'delete', $fatherSectionsProduct['id']), null, __('Are you sure you want to delete # %s?', $fatherSectionsProduct['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Father Sections Product'), array('controller' => 'father_sections_products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Freaturedproducts'); ?></h3>
	<?php if (!empty($fathersection['Freaturedproduct'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Childsection Id'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Fathersection Id'); ?></th>
		<th><?php echo __('Mastersection Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fathersection['Freaturedproduct'] as $freaturedproduct): ?>
		<tr>
			<td><?php echo $freaturedproduct['id']; ?></td>
			<td><?php echo $freaturedproduct['order']; ?></td>
			<td><?php echo $freaturedproduct['product_id']; ?></td>
			<td><?php echo $freaturedproduct['childsection_id']; ?></td>
			<td><?php echo $freaturedproduct['section_id']; ?></td>
			<td><?php echo $freaturedproduct['fathersection_id']; ?></td>
			<td><?php echo $freaturedproduct['mastersection_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'freaturedproducts', 'action' => 'view', $freaturedproduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'freaturedproducts', 'action' => 'edit', $freaturedproduct['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'freaturedproducts', 'action' => 'delete', $freaturedproduct['id']), null, __('Are you sure you want to delete # %s?', $freaturedproduct['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Freaturedproduct'), array('controller' => 'freaturedproducts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
