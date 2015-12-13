

	<!-- GRÁFICAS -->
	<div class="row">
	<div class="slider">
		<div class="col-md-2 col-sm-12">
		<a class="prev" data-current="1" href="">Anterior</a>
		<form class="filtros" >
		
		  <div class="form-group ">
		  	
		    <label for="daterange" class="control-label ">Periodo</label>
		    <input type="text" class="form-control" name="daterange" value="01/01/2015 - 01/31/2015" />
		    
		  </div>
		  <div class="form-group">
		  	<label for="mostrar">Mostrar</label>
		  	<select name="mostrar" class="form-control" id="mostrar">
		  		<option value="1">Vinos</option>
		  		<option value="2">Packs</option>
		  		<option value="3">Clientes</option>		
			</select>
		  </div>
		  <div class="form-group">
		  	<button id="show-filtros" type="button" class="col-xs-12 btn btn-default btn-xs ">
				  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Filtros
			</button>
			<div id="filtros-container" style="display:none;">
				
			
		  	<div id="filtro-vinos" >
			  	<div class="row">
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="filtro-vino" value="todos" checked>
							    Todos
							  </label>
			  			</div>		  			
			  		</div>
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="filtro-vino" value="total">
							    Total
							  </label>
			  			</div>	
			  		</div>
			  		
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  		<?php 

			  		$total = count($vinos);
			  		$i = 0;
			  		foreach ($vinos as $key => $value){
			  			if ($i < ($total/2)){
			  				echo '<label>
						    <input type="checkbox" name="filtro-vino" value="'.$value.'">
							    '.$value.'
							</label>';
			  			}else{
			  				break;
			  			}
			  			$i++;
			  		}						
			  		?>
						</div>
			  		</div>
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  			 
					<?php 
			  		$total = count($vinos);
			  		$i = 0;
			  		foreach ($vinos as $key => $value){
			  			if ($i >= ($total/2)){
			  				echo '<label>
						    <input type="checkbox" name="filtro-vino" value="'.$value.'">
							    '.$value.'
							</label>';
			  			}
			  			$i++;
			  		}						
			  		?>
						</div>		  			
			  		</div>
			  	</div>	
		  	</div>
		  	<!-- Mostrar Packs -->
		  	<div id="filtro-packs" style="display:none;">

			  	<div class="row">			  	
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="filtro-packs" value="">
							    Todos
							  </label>
			  			</div>		  			
			  		</div>
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="filtro-packs" value="">
							    Total
							  </label>
			  			</div>	
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="filtro-packs" value="Botellas sueltas">
							    Botellas sueltas
							  </label>
							<label>
							  <input type="checkbox" name="filtro-packs" value="Caja de 6">
							    Caja de 6
							  </label>
							 <label>
							  <input type="checkbox" name="filtro-packs" value="Magnum">
							    Magnum
							  </label> 
							<label>
							  <input type="checkbox" name="filtro-packs" value="BagInBox 5L">
							    BagInBox 5L
							  </label> 
			  			</div>		  			
			  		</div>
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="filtro-packs" value="Caja de 3">
							    Caja de 3
							  </label>
							<label>
							  <input type="checkbox" name="filtro-packs" value="Caja de 12">
							    Caja de 12
							  </label>
							<label>
							  <input type="checkbox" name="filtro-packs" value="A granel">
							    A granel
							  </label>
							<label>
							  <input type="checkbox" name="filtro-packs" value="BagInBox 15L">
							    BagInBox 15L
							  </label> 
			  			</div>	
			  		</div>
			  	</div>
			  	
		  	</div>
		  	<!-- Filtro clientes -->
		  	<div id="filtro-clientes" style="display:none;">
				
			  	<div class="row">
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="filtro-clientes" value="">
							    Todos
							  </label>
			  			</div>		  			
			  		</div>
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="filtro-clientes" value="">
							    Total
							  </label>
			  			</div>	
			  		</div>
			  		
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  		<?php 

			  		$total = count($clients);
			  		$i = 0;
			  		foreach ($clients as $key => $value){
			  			if ($i < ($total/2)){
			  				echo '<label>
						    <input type="checkbox" name="filtro-clientes" value="'.$key.'">
							    '.$value.'
							</label>';
			  			}else{
			  				break;
			  			}
			  			$i++;
			  		}						
			  		?>
						</div>
			  		</div>
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  			 
					<?php 
			  		$total = count($clients);
			  		$i = 0;
			  		foreach ($clients as $key => $value){
			  			if ($i >= ($total/2)){
			  				echo '<label>
						    <input type="checkbox" name="filtro-clientes" value="'.$key.'">
							    '.$value.'
							</label>';
			  			}
			  			$i++;
			  		}						
			  		?>
						</div>		  			
			  		</div>
			  	</div>	
		  			  		
		  	</div>
		  	</div>
		  </div>
		  <!-- Refiltro Packs -->
		  <div class="form-group" >
			  	
			  	<button id="show-packs" type="button" class="col-xs-12 btn btn-default btn-xs pila">
				  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Packs
				</button>
				<div id="packs-container" style="display:none;">
				<div class="row">
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="packs" value="todos" checked>
							    Todos
							  </label>
			  			</div>		  			
			  		</div>
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="packs" value="total">
							    Total
							  </label>
			  			</div>	
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="packs" value="Botellas sueltas">
							    Botellas sueltas
							  </label>
							<label>
							  <input type="checkbox" name="packs" value="Caja de 6">
							    Caja de 6
							  </label>
							 <label>
							  <input type="checkbox" name="packs" value="Magnum">
							    Magnum
							  </label> 
							<label>
							  <input type="checkbox" name="packs" value="BagInBox 5L">
							    BagInBox 5L
							  </label> 
			  			</div>		  			
			  		</div>
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="packs" value="Caja de 3">
							    Caja de 3
							  </label>
							<label>
							  <input type="checkbox" name="packs" value="Caja de 12">
							    Caja de 12
							  </label>
							<label>
							  <input type="checkbox" name="packs" value="A granel">
							    A granel
							  </label>
							<label>
							  <input type="checkbox" name="packs" value="BagInBox 15L">
							    BagInBox 15L
							  </label> 
			  			</div>	
			  		</div>
			  	</div>
			</div>
		  	
		  </div>
		  <div class="form-group">
		  	<button id="show-clientes" type="button" class="col-xs-12 btn btn-default btn-xs pila">
				  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Clientes
				</button>
		  		<div id="clientes-container" class="row" style="display:none;">
			  	
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="clientes" value="todos" checked>
							    Todos
							  </label>
			  			</div>		  			
			  		</div>
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="clientes" value="total">
							    Total
							  </label>
			  			</div>	
			  		</div>
			  		
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  		<?php 

			  		$total = count($clients);
			  		$i = 0;
			  		foreach ($clients as $key => $value){
			  			if ($i < ($total/2)){
			  				echo '<label>
						    <input type="checkbox" name="clientes" value="'.$key.'">
							    '.$value.'
							</label>';
			  			}else{
			  				break;
			  			}
			  			$i++;
			  		}						
			  		?>
						</div>
			  		</div>
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  			 
					<?php 
			  		$total = count($clients);
			  		$i = 0;
			  		foreach ($clients as $key => $value){
			  			if ($i >= ($total/2)){
			  				echo '<label>
						    <input type="checkbox" name="clientes" value="'.$key.'">
							    '.$value.'
							</label>';
			  			}
			  			$i++;
			  		}						
			  		?>
						</div>		  			
			  		</div>
			  		
		  		</div>
		  </div>
		  
			
			<div class="row" style="text-align:center;">
		  		<button  type="submit" class="btn btn-primary pila">Filtrar resultados</button>
			</div>
		
		</form>

		</div>
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

		<div class="col-md-2 col-sm-12">
			<a class="next" data-current="1" href="">Siguiente</a>
			
 			<button id="show-form-comp" type="button" class="col-xs-12 btn btn-default btn-xs pila">
				  <span class="glyphicon glyphicon-random" aria-hidden="true"></span> Comparar datos				</button>
			<form id="compare-form" style="display:none;">
				<div class="form-group">
					<label for="periodo">Comparar Periodo</label>
					<input type="text" class="form-control" name="daterange2" value="01/01/2015 - 01/31/2015" />
				</div>
				<div class="form-group">
		  	<button id="show-clientes-comp" type="button" class="col-xs-12 btn btn-default btn-xs pila">
				  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Comparar clientes				</button>
		  		<div id="clientes-container-comp" class="row" style="display:none;">
			  	
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="compara-clientes" value="todos" checked>
							    Todos
							  </label>
			  			</div>		  			
			  		</div>
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  				<label>
							  <input type="checkbox" name="compara-clientes" value="total">
							    Total
							  </label>
			  			</div>	
			  		</div>
			  		
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  		<?php 

			  		$total = count($clients);
			  		$i = 0;
			  		foreach ($clients as $key => $value){
			  			if ($i < ($total/2)){
			  				echo '<label>
						    <input type="checkbox" name="compara-clientes" value="'.$key.'">
							    '.$value.'
							</label>';
			  			}else{
			  				break;
			  			}
			  			$i++;
			  		}						
			  		?>
						</div>
			  		</div>
			  		<div class="col-xs-6">
			  			<div class="checkbox">
			  			 
					<?php 
			  		$total = count($clients);
			  		$i = 0;
			  		foreach ($clients as $key => $value){
			  			if ($i >= ($total/2)){
			  				echo '<label>
						    <input type="checkbox" name="compara-clientes" value="'.$key.'">
							    '.$value.'
							</label>';
			  			}
			  			$i++;
			  		}						
			  		?>
						</div>		  			
			  		</div>
			  		
		  		</div>
		  </div>
		  	<div class="row" style="text-align:center;">
		  		<button  type="submit" class="btn btn-primary pila">Comparar</button>
		  	</div>
				
			</form>
		</div>
	</div>
	</div>

	<!-- PAGINATOR -->
	<div class="row">
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th>Vino</th>
			<th><?php echo $this->Paginator->sort('id_pack', 'Pack'); ?></th>
			<th><?php echo $this->Paginator->sort('id_client', 'Cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity', 'Cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('amount', 'Precio'); ?></th>
			<th><?php echo $this->Paginator->sort('payment', 'Forma de Pago'); ?></th>
			<th><?php echo $this->Paginator->sort('date', 'Fecha'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php 
		
		function getWineName($id_pack,$packs_venta)
		{
			foreach ($packs_venta as $key => $my_pack) {
				if (isset($my_pack[$id_pack])){
					return $key;
				}
			}
		}

	?>
	<?php foreach ($sales as $sale): ?>
	<tr>
	
		<td><?php echo h($sale['Sale']['id']); ?>&nbsp;</td>
		<td><?php echo getWineName($sale['Sale']['id_pack'],$packs_venta); ?></td>
		<td><?php echo h($pack_list[$sale['Sale']['id_pack']]); ?>&nbsp;</td>
		<td><?php echo h($clients[$sale['Sale']['id_client']]); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['amount']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['payment']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $sale['Sale']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $sale['Sale']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $sale['Sale']['id']), array(), __('Estás seguro que quieres borrar # %s?', $sale['Sale']['id'])); ?>
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
