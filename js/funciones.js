$(document).on('ready',funcionPrincipal);

function funcionPrincipal(){
	$("#btnAgregar").on('click', agregarFilaElemento);
}

//FUNCION PARA AGREGAR ELEMENTOS HTML DE MANERA DINÁMICA

function agregarFilaElemento(){
	$("#tablaElementos")
	.append
	(
		$('<tr>')
		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type', 'text').addClass('form-control').attr('name','pesoElemento[]').attr('placeholder','Peso del elemento')
			)
		)
		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type','text').addClass('form-control').attr('name','caloriaElemento[]').attr('placeholder','Propiedad calórica')
			)
		)
	)
}

