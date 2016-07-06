<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<title>Procesar Archivos</title>
</head>
<body>
	<form>
		<input type="text" name="nombre" id="nombre"> <br/><br/>
		<textarea name="comentario" id="comentario"></textarea><br/><br/>
		<button type="button" id="guardar"> Guardar Archivo</button>
		<button type="button" id="leer"> Leer Archivo</button>
		<button type="button" id="ocultar" hidden="hidden"> Ocultar Lectura</button>
		<button type="button" id="eliminar"> Eliminar Archivo</button>
		<button type="button" id="ocultareliminar" hidden="hidden">Ocultar</button>
	</form>

	<br/>
	<div id="lecturaarchivo" >
	</div>
	<div id="eliminararchivo" hidden="hidden">		
		<form action="eliminar.php" method="post" name="form">
			<input type="file" name="archivo" id="archivo"> <br/><br/>
			<button type="submit" id="borrar"> Eliminar</button>
		</form>
	</div>
</body>
<script>
	$(document).ready(function(){
		
		$('#guardar').click(function(){

			nombre 		= $('#nombre').val();
			comentario	= $('#comentario').val();
			var data = new FormData();
			data.append('nombre',nombre);
			data.append('comentario',comentario);

			$.ajax({
			  type: "POST",
			  url: "guardar.php",
			  data: data,
			  cache: false,
			  contentType: false, 
		      processData: false,
			  success: function(prueba){
			  	alert('se guardo el archivo');
			  	window.location="formulario.php";
			  }
			});
		});

		$('#leer').click(function(){

			$.ajax({
				type:"POST",
				url:"leer.php",
				success:function(data){

					$('#lecturaarchivo').removeAttr("hidden","hidden");
					$('#lecturaarchivo').html(data);
					$('#leer').attr("hidden","hidden");

					$('#ocultar').removeAttr("hidden","hidden");

					$('#eliminararchivo').attr("hidden","hidden");
					$('#eliminar').removeAttr("hidden","hidden");
					$('#ocultareliminar').attr("hidden","hidden");

				}
			});
		});

		$('#ocultar').click(function(){

			$('#ocultar').attr("hidden","hidden");
			$('#leer').removeAttr("hidden","hidden");
			$('#lecturaarchivo').attr("hidden","hidden");

			$('#eliminararchivo').attr("hidden","hidden");
			$('#eliminar').removeAttr("hidden","hidden");
			$('#ocultareliminar').attr("hidden","hidden");
		});

		$('#eliminar').click(function(){

			$('#ocultar').attr("hidden","hidden");
			$('#leer').removeAttr("hidden","hidden");
			$('#lecturaarchivo').attr("hidden","hidden");

			$('#eliminararchivo').removeAttr("hidden","hidden");
			$('#eliminar').attr("hidden","hidden");
			$('#ocultareliminar').removeAttr("hidden","hidden");
		});

		$('#ocultareliminar').click(function(){

			$('#eliminararchivo').attr("hidden","hidden");
			$('#eliminar').removeAttr("hidden","hidden");
			$('#ocultareliminar').attr("hidden","hidden");
		});

	});
</script>
</html>