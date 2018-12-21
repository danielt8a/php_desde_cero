<?php

	#Desactivar toda notificación de error
	error_reporting(0);

	#E_NOTICE informa de variables no inicializadas o capturar

	#Guardar errores en un log

	ini_set("log_errors",1);
	ini("error_log", "/tmp/php-error.log");
	error_log("Hay un error");



?>