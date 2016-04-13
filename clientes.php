<?php
session_start();
 include "conexion.php";
 if (isset($_SESSION['Usuario'])){
     
 }  else {
     header("Location:./index.html?Error=Acceso denegado");   
}
?>
<!DOCTYPE html>
 <head>
 <title>Clientes Ferreteria VICASA</title>
 </head>
<style>

h1{
text-align:center;
}
      nav{
         width: 600px;
         padding: 0;
         margin: 20px auto;
         border-top: 1px solid #c83535;
     }
.menu{
         list-style: none;
         margin: 0;
         color: #000;
     }
     .menu li{
         float: left;
         padding: 0;
         line-height: 1;
         text-align:center;
         color: #000;
     }
.menu li a{
          color: #000;
         font-family: haleway;
         padding: 10px 15px;
         font-size: 15px;
         display: block;
         -webkit-transition: all .3s ease-in-out;
          -moz-transition: all .3s ease-in-out; 
          -ms-transition: all .3s ease-in-out; 
          -o-transition: all .3s ease-in-out;
     }
.menu li a:hover, .menu li.activo a{
         -webkit-box-shadow: 0px -4px 0px #c83535 inset;
         box-shadow: 0px -4px 0px #c83535 inset;
         color: #c83535;
     } 

div{
clear:both;
padding:50px;
text-align:center;
}  
	
#content {
		
clear: both;
		
background: #fff;
		
padding: 0px;
		
overflow-y: scroll;
		
width: 100%;
		
height: 600px;
		
border: 0;
	
}


</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script>$(document).ready(function(e) 
{
		
$('#nuevo').on('click', function(){
			
			
$('#content').attr('src', 'nuevosclientes.php');
		
});
		
$('#buscar').on('click', function(){
			
$('#content').attr('src', 'buscarclientes.php');
			
		
});
		
$('#modificar').on('click', function(){		
			
$('#content').attr('src', 'modificarclientes.php');
			
		
});
		
		
	
});

</script>


<body>


<h1>Modulo Clientes</h1>
<nav>
 <ul class="menu">
   <li class="activo"><a href="#" id="nuevo">Nuevo cliente</a></li>
   <li><a href="#" id="buscar">Mostrar clientes</a></li>
   <li><a href="#" id="modificar">Modificar y/o eliminar cliente</a></li>
   <li><a href="paginainicio.php">Inicio</a></li>
 </ul>
</nav>
<br><br><br>

<iframe id="content"></iframe>



</body>
 </html> 