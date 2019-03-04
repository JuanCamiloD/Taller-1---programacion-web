<?php
//incluir archivo con las funciones de la calculadora
require_once("funciones.php");

$numero_1= $_POST["num_1"];
$numero_2= $_POST["num2"];
$numero_3= $_POST["num3"];
$numero_4= $_POST["num4"];
$operacion = $_POST["operacion"];

switch ($operacion) {
	case '+': echo " Resultado ".sumar($numero_1,$numero_2,$numero_3,$numero_4);
		
		break;
	case '-':echo  " Resultado ".restar($numero_1,$numero_2,$numero_3,$numero_4);
		
		break;
	case '*':echo " Resultado ".multiplicar($numero_1,$numero_2,$numero_3,$numero_4);

		break;
	case '/':echo " Resultado ".dividir($numero_1,$numero_2,$numero_3,$numero_4);
		
		break;
	case '**':echo " Resultado ".potencia($numero_1,$numero_2,$numero_3);
		
		break;
	case 'R':echo " Resultado ".raiz($numero_1,$numero_2);
		
		break;

}



?>