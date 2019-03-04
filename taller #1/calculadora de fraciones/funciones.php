<?php

//sumar
function sumar($num_1,$num2,$num3,$num4){
	$a= ( $num_1*$num4 + $num2*$num3 );
	$b= $num2 * $num4;
	echo $a."/".$b;	
}

//restar
function restar($num_1,$num2,$num3,$num4){
	$a= ( $num_1*$num4 - $num2*$num3 );
	$b= $num2 * $num4;
	echo $a."/".$b;	
}
//multiplicar
function multiplicar($num_1,$num2,$num3,$num4){
	$a= $num_1*$num3 ;
	$b= $num2*$num4;
	echo $a."/".$b;	
}

//dividir
function dividir($num_1,$num2,$num3,$num4){
	$a=  $num_1*$num4;
	$b= $num2 * $num3;
	echo $a."/".$b;	
}
//potencia
function potencia($num_1,$num2,$num3){
	$a=  $num_1;
	$b= $num2;
	for ($i=0; $i < $num3; $i++) { 
		$a=  $num_1*$num_1;
		$b= $num2*$num2;
		$i+1;
	}
	echo $a."/".$b;	
}

function raiz($num_1,$num2){
	$a=  sqrt($num_1);
	$b= sqrt($num2);
	echo $a."/".$b;	
}

?>