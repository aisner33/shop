<div class="galleries index">
	<h2><?php echo __('Galleries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('thumbnail1'); ?></th>
			<th><?php echo $this->Paginator->sort('fullImage1'); ?></th>
			<th><?php echo $this->Paginator->sort('thumbnail2'); ?></th>
			<th><?php echo $this->Paginator->sort('fullImage2'); ?></th>
			<th><?php echo $this->Paginator->sort('thumbnail3'); ?></th>
			<th><?php echo $this->Paginator->sort('fullImage3'); ?></th>
			<th><?php echo $this->Paginator->sort('thumbnail4'); ?></th>
			<th><?php echo $this->Paginator->sort('fullImage4'); ?></th>
			<th><?php echo $this->Paginator->sort('thumbnail5'); ?></th>
			<th><?php echo $this->Paginator->sort('fullimage5'); ?></th>
			<th><?php echo $this->Paginator->sort('thumbnail6'); ?></th>
			<th><?php echo $this->Paginator->sort('fullImage6'); ?></th>
			<th><?php echo $this->Paginator->sort('thumbnail7'); ?></th>
			<th><?php echo $this->Paginator->sort('fullImage7'); ?></th>
			<th><?php echo $this->Paginator->sort('thumbnail8'); ?></th>
			<th><?php echo $this->Paginator->sort('fullImage8'); ?></th>
			<th><?php echo $this->Paginator->sort('thumbnail9'); ?></th>
			<th><?php echo $this->Paginator->sort('fullImage9'); ?></th>
			<th><?php echo $this->Paginator->sort('thumbnail10'); ?></th>
			<th><?php echo $this->Paginator->sort('fullImage10'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($galleries as $gallery): ?>
	<tr>
		<td><?php echo h($gallery['Gallery']['id']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['description']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['thumbnail1']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['fullImage1']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['thumbnail2']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['fullImage2']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['thumbnail3']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['fullImage3']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['thumbnail4']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['fullImage4']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['thumbnail5']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['fullimage5']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['thumbnail6']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['fullImage6']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['thumbnail7']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['fullImage7']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['thumbnail8']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['fullImage8']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['thumbnail9']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['fullImage9']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['thumbnail10']); ?>&nbsp;</td>
		<td><?php echo h($gallery['Gallery']['fullImage10']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gallery['Gallery']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gallery['Gallery']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gallery['Gallery']['id']), null, __('Are you sure you want to delete # %s?', $gallery['Gallery']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Gallery'), array('action' => 'add')); ?></li>
	</ul>
</div>
