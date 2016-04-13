$(document).ready(function(){
	$(".eliminar").click(function(){
                var imagen=$(this).parent('td').parent('tr').find('.imagen').val();
                $(this).parent('td').parent('tr').remove();
                $.post('./ejecuta.php',{
                Caso:'Eliminar',
                Id:$(this).attr('data-id'),
                Imagen:imagen
                },function(e){
                  alert(e);
                 });
                
		
		});

       $(".modificar").click(function(){
                var codigo=$(this).parent('td').parent('tr').find('.codigo').val();
                var clave=$(this).parent('td').parent('tr').find('.clave').val();
		var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
                var marca=$(this).parent('td').parent('tr').find('.marca').val();
                var medida=$(this).parent('td').parent('tr').find('.medida').val();
                var pproveedor=$(this).parent('td').parent('tr').find('.pproveedor').val();
                var ppublico=$(this).parent('td').parent('tr').find('.ppublico').val();
		var descripcion=$(this).parent('td').parent('tr').find('.descripcion').val();
		$.post('./ejecuta.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
                        Codigo:codigo,
                        Clave:clave,
                        Nombre:nombre,
                        Marca:marca,
                        Medida:medida,
                        Pproveedor:pproveedor,
                        Ppublico:ppublico,
			Descripcion:descripcion
		},function(e){
			alert(e);
		});
	});
});