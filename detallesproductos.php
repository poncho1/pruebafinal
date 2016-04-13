<?php
session_start();
 include "conexion.php";
 if (isset($_SESSION['Usuario'])){
     
 }  else {
     header("Location:./index.html?Error=Acceso denegado");   
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Ferreteria Vicasa</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>

	<section>
		
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos where id=".$_GET['id'])or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>


			
			<center>
				<img src="./productos/<?php echo $f['imagen'];?>"><br>
                                <span>Codigo: <?php echo $f['codigo'];?></span><br>
      				<span>Clave: <?php echo $f['clave'];?></span><br>
                                <span>Nombre: <?php echo $f['nombre'];?></span><br>
                                <span>Marca: <?php echo $f['marca'];?></span><br>
                                <span>Medida: <?php echo $f['medida'];?></span><br>
                                <span>Precio proveedor: <?php echo $f['pproveedor'];?></span><br>
                                <span>Precio publico: <?php echo $f['ppublico'];?></span><br>    
                                <span>Cantidad en almacen: <?php echo $f['existencia'];?></span><br>                            
                                <span>Descripcion:<?php echo $f['descripcion'];?></span><br>
                                <a href="./mostrarproductos.php?id=<?php  echo $f['id'];?>">volver</a>
			</center>
		
	<?php
		}
	?>
		
		

		
	</section>
</body>
</html>