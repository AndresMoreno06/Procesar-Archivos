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
	</form>
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
			  	window.location="formulario.php";
			  }
			});
		});


	});
</script>
</html>