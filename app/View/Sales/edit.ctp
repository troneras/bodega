<div class="sales form">
<?php echo $this->Form->create('Sale'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sale'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_pack');
		echo $this->Form->input('id_client');
		echo $this->Form->input('quantity');
		echo $this->Form->input('amount');
		echo $this->Form->input('payment');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sale.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Sale.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sales'), array('action' => 'index')); ?></li>
	</ul>
</div>
