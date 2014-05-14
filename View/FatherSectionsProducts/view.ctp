<div class="fatherSectionsProducts view">
<h2><?php echo __('Father Sections Product'); ?></h2>
	<dl>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fatherSectionsProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $fatherSectionsProduct['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fathersection'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fatherSectionsProduct['Fathersection']['name'], array('controller' => 'fathersections', 'action' => 'view', $fatherSectionsProduct['Fathersection']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Father Sections Product'), array('action' => 'edit', $fatherSectionsProduct['FatherSectionsProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Father Sections Product'), array('action' => 'delete', $fatherSectionsProduct['FatherSectionsProduct']['id']), null, __('Are you sure you want to delete # %s?', $fatherSectionsProduct['FatherSectionsProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Father Sections Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Father Sections Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fathersections'), array('controller' => 'fathersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fathersection'), array('controller' => 'fathersections', 'action' => 'add')); ?> </li>
	</ul>
</div>
