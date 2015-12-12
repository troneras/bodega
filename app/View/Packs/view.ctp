<div class="packs view">
<h2><?php echo __('Pack'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pack['Pack']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pack['Product']['name'], array('controller' => 'products', 'action' => 'view', $pack['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($pack['Pack']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($pack['Pack']['quantity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pack'), array('action' => 'edit', $pack['Pack']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pack'), array('action' => 'delete', $pack['Pack']['id']), array(), __('Are you sure you want to delete # %s?', $pack['Pack']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Packs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pack'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
