<?php
	//RECUPERO LAS VARIABLES POR POST
		$peso = $_POST['peso'];
		$calorias = $_POST['calorias'];
		$pesoElemento = $_POST['pesoElemento'];
		$caloriaElemento = $_POST['caloriaElemento'];
		$pesoFinal = 0;
		$caloriaFinal = 0;
		$solucion="";
		$elementos = array();
	//LLENO UN ARREGLOCON LOS DATOS OBTENIDOS Y LES ASIGNO UN INDICE
		for ($i=0; $i < sizeof($pesoElemento); $i++) { 
			$elementos[] = array($i+1, $pesoElemento[$i], $caloriaElemento[$i]);
		}
	//ORDENO DE MANERA DESCENDENTE CON RESPECTO A LAS CALORIAS 	
		array_multisort(array_column($elementos, 2), SORT_DESC, $elementos);
	//CREO UN CICLO PARA QUE RECORRA EL ARREGLO Y COMPARE LAS VARIABLES
	//Y A SU VES VOY ACTUALIZANDO LAS VARIABLES	
		$i=0;
		while ($peso>0){
			if ($peso>=$elementos[$i][1]) {
				$peso=$peso-$elementos[$i][1];
				$caloriaFinal=$caloriaFinal+$elementos[$i][2];
				$pesoFinal=$pesoFinal+$elementos[$i][1];
				$solucion=$solucion."Elemento (".$elementos[$i][0]."): Peso: ".$elementos[$i][1]." Calorias: ".$elementos[$i][2].'<br>';
			}else{
	//CUANDO YA NO SE PUEDA AGREGAR OTRO ELEMENTO POR LA CONDICION DEL PESO
	//LE DAMOS EL VALOR DE 0 PARA QUE CULMINE EL CICLO
				$peso=0;
			}
			$i++;
			//break;
		}
	//SALIDA SOLUCIÓN CON SUS TOTALES
		$especific = 'Peso total: '.$pesoFinal.' Caloria total: '.$caloriaFinal;
		echo "<body style='background-image: url(img/fondo.jpg);'><div style='width:72%; heiht: 10vh; margin: 0 auto; text-align: center; font-family: sans-serif; margin-top: 100px; background-color: #FEFEFE; padding: 20px; border-radius: 10px; box-shadow: 2px 2px 2px 2px;'><h1 style='margin: 50 auto;'>ELEMENTOS OPTIMOS</h1><p style='text-align: center; margin: 100 auto; font-size: 20px;'>$solucion$especific</p><br><a href='index.php'>VOLVER</a></body></div>";
?>