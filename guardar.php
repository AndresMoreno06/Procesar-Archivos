<?php
	
	/*
		fopen crea un archivo en caso que no exista recibe como parametro dos argumentos
		el primero es el nombre que se le dará al archivo que se esta creando, y el segundo 
		es una letra, es decir, la letra "a",crea un nuevo archivo si no existe y escribir 
		a continuacion de lo que ya hay
	*/
	$fi = fopen("archivo.txt", "a") or die("Problemas al crear archivo");

	/*
		ahora se comienza a escribir nuestro archivo, se pueden utilizar dos metodos que son
		fputs o fwrite.

	*/

	fwrite($fi, "Datos :");
	fwrite($fi, "\n");
	fwrite($fi, $_POST['nombre']);
	fwrite($fi, "\n");
	fwrite($fi, $_POST['comentario']);
	fwrite($fi, "\n");
	fwrite($fi, "--------------------");

	/*
		una vez escrito el archivo se cierra el archivo con la sentencia fclose();
	*/
	fclose($fi);

	/*
		Una vez finalizado esto se avisa al usuario que el archivo fue guardado con un echo
	*/
	echo "1";

?>