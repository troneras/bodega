$(function() {
    $('input[name="daterange"]').daterangepicker();
    $('input[name="daterange2"]').daterangepicker();
    $('select#products').on('change',function () {
    	var id_vino = $(this).val();
    	var packs = $('select#packs').data('packs');
    	var result = [];
    	for (var i = packs.length - 1; i >= 0; i--) {
    		if (packs[i].Product.id == id_vino){
    			result[packs[i].Pack.id] = packs[i].Pack.name;
    		}
    	};	
    	
    	var options = '<option value="0">--Todos--</option>';
    	for (var k in result){
		    if (result.hasOwnProperty(k)) {
		    	options += '<option value="'+k+'">'+result[k]+'</option>';		      
		    }
		}
		$('select#packs').html(options);
    });

    $('select#mostrar').on('change',function (e) {
    	var value = $(this).val();
    	console.log(value);
    	switch(value){
    		case "1":
    			$('#filtro-vinos').show();
    			$('#filtro-packs').hide();
    			$('#filtro-clientes').hide();
    			break;
    		case "2":
    			$('#filtro-vinos').hide();
    			$('#filtro-packs').show();
    			$('#filtro-clientes').hide();
    			break;
    		case "3":
    			$('#filtro-vinos').hide();
    			$('#filtro-packs').hide();
    			$('#filtro-clientes').show();
    			break;
    	}
    });

    $('#show-clientes').on('click', function (e) {
    	e.preventDefault();
    	$('#clientes-container').toggle();
    });
    $('#show-packs').on('click', function (e) {
    	e.preventDefault();
    	$('#packs-container').toggle();
    });
    $('#show-clientes-comp').on('click', function (e) {
    	e.preventDefault();
    	$('#clientes-container-comp').toggle();
    });
    $('#show-form-comp').on('click', function (e) {
    	e.preventDefault();
    	$('#compare-form').toggle();
    });
    $('#show-filtros').on('click', function (e) {
    	e.preventDefault();
    	$('#filtros-container').toggle();
    });
});