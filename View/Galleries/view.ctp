<div class="galleries view">
<h2><?php echo __('Gallery'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail1'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['thumbnail1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullImage1'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['fullImage1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail2'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['thumbnail2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullImage2'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['fullImage2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail3'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['thumbnail3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullImage3'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['fullImage3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail4'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['thumbnail4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullImage4'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['fullImage4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail5'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['thumbnail5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fullimage5'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['fullimage5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail6'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['thumbnail6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullImage6'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['fullImage6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail7'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['thumbnail7']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullImage7'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['fullImage7']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail8'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['thumbnail8']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullImage8'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['fullImage8']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail9'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['thumbnail9']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullImage9'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['fullImage9']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail10'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['thumbnail10']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullImage10'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['fullImage10']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gallery'), array('action' => 'edit', $gallery['Gallery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gallery'), array('action' => 'delete', $gallery['Gallery']['id']), null, __('Are you sure you want to delete # %s?', $gallery['Gallery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Galleries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery'), array('action' => 'add')); ?> </li>
	</ul>
</div>
