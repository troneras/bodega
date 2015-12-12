

	<!-- GRÁFICAS -->
	<div class="row">
	<div class="slider">
		<div class="col-md-2 col-sm-12"><a class="prev" data-current="1" href="">Anterior</a></div>
		<div class="col-md-8 col-sm-12"  data-slide="1" >
			<canvas id="canvas-1">
		</div>
		<div class="col-md-8 col-sm-12" style="display:none;" data-slide="2" >
			<canvas id="canvas-2">
		</div>
		<div class="col-md-8 col-sm-12" style="display:none;" data-slide="3" >
			<canvas id="canvas-3">
		</div>
		<div class="col-md-8 col-sm-12" style="display:none;" data-slide="4" >
			<canvas id="canvas-4">
		</div>
		<div class="col-md-8 col-sm-12" style="display:none;" data-slide="5" >
			<canvas id="canvas-5">
		</div>
		<div class="col-md-8 col-sm-12" style="display:none;" data-slide="6" >
			<canvas id="canvas-6">
		</div>
		<div class="col-md-2 col-sm-12"><a class="next" data-current="1" href="">Siguiente</a></div>
	</div>
	</div>
	<!-- FILTROS -->
	<div class="row">
		<form class="col-md-12 filtros" >
		<div class="row">
		  <div class="col-xs-6 form-group ">
		  	
		    <label for="exampleInputEmail1" class="control-label col-xs-3">Periodo</label>
		    <input type="text" class="form-control col-xs-9" name="daterange" value="01/01/2015 - 01/31/2015" />
		    
		  </div>
		  <div class="col-xs-6 form-group ">
		  	<label for="clients" class="control-label col-xs-3">Cliente</label>
		  	<select name="data[clients]" class="form-control col-xs-9" id="clients">
		  		<option value="0">--Todos--</option>
		  	<?php foreach ($clients as $key => $client): ?>
		  		<option value="<?php echo $key;?>"><?php echo $client;?></option>
		  	<?php endforeach;?>				
			</select>
		    
		  </div>
		</div>
		<div class="row">
		  <div class="form-group col-xs-6">
		  	<label for="products" class="control-label col-xs-3">Vino</label>
		  	<select name="data[products]" class="form-control col-xs-9" id="products">
		  		<option value="0">--Todos--</option>
		  	<?php foreach ($products as $key => $product): ?>
		  		<option value='<?php echo $key;?>'><?php echo $product;?></option>
		  	<?php endforeach;?>				
			</select>
		    
		  </div>
		  <div class="form-group col-xs-6">
		  	<label for="packs" class="control-label col-xs-3">Formato</label>
		  	<select name="data[packs]" class="form-control col-xs-9" id="packs" data-packs="<?php echo htmlspecialchars(json_encode($packs),ENT_QUOTES,'UTF-8');?>">
		  		<option value="0">--Todos--</option>
		  				
			</select>
		    
		  </div>
		</div>
		<div class="row">
			
			<div id="btn-submit" class="col-xs-offset-4 col-xs-4">
		  		<button  type="submit" class="btn btn-default ">Filtrar resultados</button>
			</div>
		</div>
		</form>
	</div>
	<!-- PAGINATOR -->
	<div class="row">
			<h2><?php echo __('Ventas'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_pack'); ?></th>
			<th><?php echo $this->Paginator->sort('id_client'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('payment'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sales as $sale): ?>
	<tr>
		<td><?php echo h($sale['Sale']['id']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['id_pack']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['id_client']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['amount']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['payment']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sale['Sale']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sale['Sale']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sale['Sale']['id']), array(), __('Are you sure you want to delete # %s?', $sale['Sale']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
	<!-- FORMULARIO VENTA -->
	<div class="row">
		<div class="sales form">
		<?php echo $this->Form->create('Sale'); ?>
			<fieldset>
				<legend><?php echo __('Nueva Venta'); ?></legend>
			<?php
				
				echo $this->Form->input('id_pack',array(
						'label' => 'Pack',
						'options' => $packs_venta
					));
				echo $this->Form->input('id_client',array(
						'label' => 'Cliente',
						'options' => $clientes_venta
					));
				echo $this->Form->input('quantity');
				echo $this->Form->input('amount');
				echo $this->Form->input('payment',array('options' => $payment_options ));
				echo $this->Form->input('date');
				echo $this->Form->input('comment');

			?>
			</fieldset>
		<?php echo $this->Form->end(__('Enviar')); ?>
		</div>
	</div>

<?php echo $this->Html->script(array('slider','filtros'));?>
