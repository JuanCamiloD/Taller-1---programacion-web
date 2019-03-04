<?php

function dias_trabajados($num_1){
	$sueldo = (30000 * $num_1)+70000;
	$total =$sueldo * 0.045 *2;
	$v=($sueldo -$total);
	
	return $v;
}
function neto($num_1,$num2){
	$sueldo = (30000 * $num_1)+70000;
	$total =$sueldo * 0.045 *2;
	$v=($sueldo -$total);
	if ($num2 >0){
	$neto_p= $v - $num2;
	}else{
		$neto_p= $v;
	}
	
	return $neto_p;
}



function pension($num_1){
	$sueldo = (30000 * $num_1)+70000;
	$v_pencion = $sueldo *  0.045;
	return $v_pencion;
}

function salud($num_1){
	$sueldo = (30000 * $num_1)+70000;
	$v_salud = $sueldo *  0.045;
	return $v_salud;
}

?>