<?php
	$i = random_int(0, 9);
	$mensaje;
	$fechasistema = date("l d/m/Y h:ia");
	
	switch ($i) {
		case 0:
			$mensaje = "Atender con una actitud positiva hará que tomes confianza con el cliente.";
			break;
		case 1:
			$mensaje = "Busca evitar el 'NO' y procura escalar situaciones de venta con un superior cuando algo no se encuentre a tu alcance.";
			break;
		case 2:
			$mensaje = "Las promesas de entrega deben ser siempre acorde a la disponibilidad del inventario, esto incrementará la confianza con tu clientes";
			break;
		case 3:
			$mensaje = "Recuerde que todas las pruebas de manejo requieren: INE, Licencia de conducir vigente y firma de responsiva por parte del cliente.";
			break;
		case 4:
			$mensaje = "No sobrecargues clientes a tu cartera, tus compañeros también pueden atender otros clientes y agradecerán tu apoyo.";
			break;
		case 5:
			$mensaje = "Gracias por ser parte de este valioso equipo.";
			break;
		case 6:
			$mensaje = "Los sobornos entre empleados para conseguir una venta anticipada se considera violación al contrato. Evita prácticas no permitidas y avisa de estos hechos.";
			break;
		case 7:
			$mensaje = "Recuerda siempre atender como quisieras que fueras atendido";
			break;
		case 8:
			$mensaje = "Si se presenta una situación a resolver que no se encuentra dentro de tus posibilidades el solucionarlo, traslada este tema con tu supervisor";
			break;
		case 9:
			$mensaje = "Recuerda: La atención no es nada si no se alcanza la solución.";
			break;

	}
	
?>