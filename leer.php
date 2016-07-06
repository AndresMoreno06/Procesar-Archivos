<?php

	/*
		Se utiliza la sentencia fopen para abrir el archivo y como parametros se da el 
		nombre del archivo que deseamos abrir y como segundo parametro 
		la letra "r" que permite leer el archivo
    */

	$archivo = fopen("archivo.txt", "r") or die ("Problemas al leer el archivo");

	/*
		la sentencia feof permite indicar cuando el archivo llega a la linea final
	*/
	while (!feof($archivo)) {
		/*
			fgets obtiene el contenido del archivo que se le manda por parametro
		*/

		$traer = fgets($archivo);

		/*
			la instruccion nl2br permite leer los saltos de linea que se encuentran en el archivo
		*/
		$enter = nl2br($traer);
		echo $enter;

	}

?>