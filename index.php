<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Prueba Técnica</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="js/funciones.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<div class="main container">
		<h2>PRUEBA TÉCNICA DESARROLLO 1</h2>
		<div class="container">
			<img class="mountain" src="img/mountain.png">
			<form method="POST" action="modulo.php">
				<div class="form-group">
					<table class="table table-bordered table-hover">
						<tr>
							<td><input class="form-control" type="text" name="peso" placeholder="Peso máximo"></td>
							<td><input class="form-control" type="text" name="calorias" placeholder="Calorías mínimas"></td>
						</tr>	
					</table>
				</div>
				<div class="form-group">
					<table id="tablaElementos" class="table table-bordered table-hover">
						<tr>
							<th>Peso</th>
							<th>Calorías</th>
							<th></th>
						</tr>
						<tr>
							<td><input class="form-control" type="text" name="pesoElemento[]" placeholder="Peso del elemento"></td>
							<td><input class="form-control" type="text" name="caloriaElemento[]" placeholder="Propiedad calórica"></td>
							<td class="text-center">
								<div id="btnAgregar" class="btn btn-success">AÑADIR FILA</div>
							</td>
						</tr>	
					</table>
					<input class="btn btn-primary" type="submit" name="calcular" value="CALCULAR" >
				</div>
			</form>
		</div>
	</div>
</body>
</html>