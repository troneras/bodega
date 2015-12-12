<div class="sales form">
<?php echo $this->Form->create('Sale'); ?>
	<fieldset>
		<legend><?php echo __('Add Sale'); ?></legend>
	<?php
		// debug($clientes);
		// debug($packs);
	// $packs = array('Crianza' => array(array(1=>'Caja de 6',2=>'Caja de 3')), 'Boticario' => array(array(3=>'Caja de 3',4=>'Magnum')));
		echo $this->Form->input('id_pack',array(
				'label' => 'Pack',
				'options' => $packs
			));
		echo $this->Form->input('id_client',array(
				'label' => 'Cliente',
				'options' => $clientes
			));
		echo $this->Form->input('quantity');
		echo $this->Form->input('amount');
		echo $this->Form->input('payment',array('options' => $payment_options ));
		echo $this->Form->input('date');
		echo $this->Form->input('comment');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sales'), array('action' => 'index')); ?></li>
	</ul>
</div>
