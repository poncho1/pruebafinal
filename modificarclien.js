$(document).ready(function(){
	$(".eliminar").click(function(){
                $(this).parent('td').parent('tr').remove();
                $.post('./ejecutaclien.php',{
                Caso:'Eliminar',
                Id:$(this).attr('data-id'),
                },function(e){
                  alert(e);
                 });
                
		
		});

       $(".modificar").click(function(){
                var rfc=$(this).parent('td').parent('tr').find('.rfc').val();
                var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
		var direccion=$(this).parent('td').parent('tr').find('.direccion').val();
                var localidad=$(this).parent('td').parent('tr').find('.localidad').val();
                var codigo=$(this).parent('td').parent('tr').find('.codigo').val();
                var telefono=$(this).parent('td').parent('tr').find('.telefono').val();
                var correo=$(this).parent('td').parent('tr').find('.correo').val();
		$.post('./ejecutaclien.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
                        Rfc:rfc,
                        Nombre:nombre,
                        Direccion:direccion,
                        Localidad:localidad,
                        Codigo:codigo,
                        Telefono:telefono,
			Correo:correo
		},function(e){
			alert(e);
		});
	});
});