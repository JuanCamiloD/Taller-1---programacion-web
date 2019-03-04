<?php
require_once("funciones.php");

$nombre_ = $_POST["nombre"];
$num1 = $_POST["num_1"];
$num_2 =$_POST["num2"];
$aux = 70000;



echo "Nombre: ".$nombre_;
echo "<br>";
echo "Sueldo: ".dias_trabajados($num1);
echo "<br>";
echo "deudas: ".$num_2;
echo "<br>";
echo "Auxilio de trasmporte: ".$aux;
echo "<br>";
echo "% de salud: ".salud($num1);
echo "<br>";
echo "% de pencion: ".pension($num1);
echo "<br>";
echo "sueldo neto: ".neto($num1,$num_2);

?>
