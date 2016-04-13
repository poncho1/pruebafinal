<?php
 session_start();
 include './conexion.php';
 if(isset($_SESSION['carrito'])){
    if(isset($_GET['id'])){
       $arreglo=$_SESSION['carrito'];
       $encontro=false;
       $numero=0;
       for($i=0;$i<count($arreglo);$i++){
       if($arreglo[$i]['Id']==$_GET['id']){
             $encontro=true;
             $numero=$i;
         }
     }
      if($encontro==true){
         $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
         $_SESSION['carrito']=$arreglo;
      }else{
        $nombre="";
         $precio=0;
         $imagen="";
         $re=mysql_query("select * from productos where id=".$_GET['id']);
         while ($f=mysql_fetch_array($re)){
             $nombre=$f['nombre'];
             $precio=$f['ppublico'];
             $imagen=$f['imagen'];
         }
         $datosNuevos=array('Id'=>$_GET['id'],
                 'Nombre'=>$nombre,
                 'Precio'=>$precio,
                 'Imagen'=>$imagen,
                 'Cantidad'=>1); 
             array_push($arreglo, $datosNuevos);
             $_SESSION['carrito']=$arreglo;
      }
    }
 }else {
     
     if(isset($_GET['id'])){
         $nombre="";
         $precio=0;
         $imagen="";
         $re=mysql_query("select * from productos where id=".$_GET['id']);
         while ($f=mysql_fetch_array($re)){
             $nombre=$f['nombre'];
             $precio=$f['ppublico'];
             $imagen=$f['imagen'];
         }
         $arreglo[]=array('Id'=>$_GET['id'],
                 'Nombre'=>$nombre,
                 'Precio'=>$precio,
                 'Imagen'=>$imagen,
                 'Cantidad'=>1);
         $_SESSION['carrito']=$arreglo;       
     }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Nueva venta  </title>
        <link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$(".busca").keyup(function(){ 
var texto = $(this).val();
var dataString = 'palabra='+ texto;

if(texto==''){
}else{
$.ajax({
type: "POST",
url: "busqueda.php",
data: dataString,
cache: false,
success: function(html){
$("#display").html(html).show();
}
});

}
return false;    
});
});

</script>
<style type="text/css">

#caja_busqueda 
{
width:250px;
height:25px;
border:solid 2px #979DAE;
font-size:16px;
margin: 0 0 1em 0;
background:url('./icono_buscar.png') no-repeat right center; 
padding-right:5px;
}
#display 
{
width:300px;
display:none;
overflow:hidden;
z-index:10;
border: solid 1px #666;
}
.display_box 
{
padding:2px;
padding-left:6px; 
font-size:18px;
height:63px;
text-decoration:none;
color:#3b5999; 
}

.display_box:hover 
{
background: #415AB5;
color: #FFF;
}
.desc
{
color:#666;
font-size:16;
}
.desc:hover
{
color:#FFF;
}
</style>

</head>
<body>
<form>
  <div style=" width:240px; " >
     <input type="text" class="busca" id="caja_busqueda" name="clave" placeholder="Busca un producto por Nombre"/><br />
  </div> 
<div id="display"></div>       
</form>
	
	<section>
		
	<?php
           $total=0;
          if(isset($_SESSION['carrito'])){
            $datos=$_SESSION['carrito'];
         
            for($i=0;$i<count($datos);$i++){
        ?>
            <div class="producto">
                <center>
                    <img src="./productos/<?php echo $datos[$i]['Imagen'];?>"><br>
                    <span><?php echo $datos[$i]['Nombre'];?></span><br>
                    <span>Precio:$<?php echo $datos[$i]['Precio'];?></span><br>
                    <span>Cantidad: 
                        <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
                         data-precio="<?php echo $datos[$i]['Precio'];?>"
                         data-id="<?php echo $datos[$i]['Id'];?>"
                         class="cantidad">
                    </span><br>
                    <span class="subtotal">Subtotal:$<?php echo $datos[$i]['Precio']*$datos[$i]['Cantidad'];?></span><br> 
                    <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>   
                </center>
            </div>
            
<?php
    $total=($datos[$i]['Precio']*$datos[$i]['Cantidad'])+$total;
            }
}else{
   echo'<center><h2>Aun no has elegido productos para comprar</h2></center>';
}
echo '<center><h2 id="total">Total:  $'.$total.'</h2></center>';
if ($total!=0){
    echo '<center><a href="./compras/compras.php" class="aceptar">Comprar</a></center>;';
}

        ?>
            

		
	</section>
</body>
</html>