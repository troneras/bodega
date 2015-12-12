$(function() {
    $('input[name="daterange"]').daterangepicker();

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
});