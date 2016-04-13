<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
<?php
include('./conexion.php');
if($_POST){

$q=$_POST['palabra']; //se recibe la cadena que queremos buscar
$re=mysql_query("select * from productos where nombre like '%$q%'");
while($f=mysql_fetch_array($re)){
$id=$f['id'];
$nombre=$f['nombre'];
$marca=$f['marca'];

?>
<a href="detalles.php?id=<?php echo $id;?>" style="text-decoration:none;" > <!--Recuperamos el id para pasarlo a otra pagina -->
<div class="display_box" align="left">
<div style="float:left; margin-right:6px;"><img src="./productos/<?php echo $f['imagen'];?>"width="60" height="60"></div> <!--Colocamos la foto Recuperada de la bd -->
<div style="margin-center:6px;"><b><?php echo $nombre;?></b></div> <!--Recuperamos el nombre recuperado de la bd -->
<div style="margin-right:6px; font-size:14px;" class="desc"><?php echo $marca;?></div></div> <!--Recuperamos la direccion recuperada de la bd -->
</a>

<?php
}

}
else
{

}

?>
</body>
</html>

