<div class="sales view">
<h2><?php echo __('Sale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Pack'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['id_pack']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Client'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['id_client']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['payment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sale'), array('action' => 'edit', $sale['Sale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sale'), array('action' => 'delete', $sale['Sale']['id']), array(), __('Are you sure you want to delete # %s?', $sale['Sale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('action' => 'add')); ?> </li>
	</ul>
</div>
