<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array(), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Packs'), array('controller' => 'packs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pack'), array('controller' => 'packs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Packs'); ?></h3>
	<?php if (!empty($product['Pack'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Pack'] as $pack): ?>
		<tr>
			<td><?php echo $pack['id']; ?></td>
			<td><?php echo $pack['product_id']; ?></td>
			<td><?php echo $pack['name']; ?></td>
			<td><?php echo $pack['quantity']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'packs', 'action' => 'view', $pack['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'packs', 'action' => 'edit', $pack['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'packs', 'action' => 'delete', $pack['id']), array(), __('Are you sure you want to delete # %s?', $pack['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pack'), array('controller' => 'packs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
