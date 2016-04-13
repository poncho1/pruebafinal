<?php
	include ("./conexion.php");
	if(!isset($_POST['codigo']) &&  !isset($_POST['clave']) &&  !isset($_POST['nombre']) &&  !isset($_POST['marca']) &&  !isset($_POST['medida']) &&  !isset($_POST['pproveedor']) &&  !isset($_POST['ppublico']) && !isset($_POST['descripcion'])){
		header("Location: nuevosproductos.php");
	}else{
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen

		    	$imagen= $random.'_'.$_FILES["file"]["name"];
		    	if(file_exists("./productos/".$random.'_'.$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"./productos/" .$random.'_'.$_FILES["file"]["name"]);
		      		echo "Archivo guardado en " . "../productos/" .$random.'_'. $_FILES["file"]["name"];
		      		$codigo=$_POST['codigo'];
                                $clave=$_POST['clave'];
                                $producto=$_POST['nombre'];
                                $marca=$_POST['marca'];
                                $medida=$_POST['medida'];
                                $pproveedor=$_POST['pproveedor'];
                                $ppublico=$_POST['ppublico'];
                                $existencia=$_POST['existencia'];
			        $descripcion=$_POST['descripcion'];
				$Sql="insert into productos (codigo,clave,nombre,marca,medida,pproveedor,ppublico,existencia,descripcion,imagen) values(
							'".$codigo."',
                                                        '".$clave."',
                                                        '".$producto."',
                                                        '".$marca."',
                                                        '".$medida."',
                                                        '".$pproveedor."',
                                                        '".$ppublico."',
                                                        '".$existencia."',
							'".$descripcion."',
							'".$imagen."')";
					mysql_query($Sql);
					header ("Location: nuevosproductos.php");
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }

		
	}
?>
