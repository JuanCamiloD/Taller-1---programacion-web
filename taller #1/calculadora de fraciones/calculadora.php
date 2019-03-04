

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Calculadora</title>
</head>
<body>
	<h1>Calculadora Cotecnova</h1>
	<form action="calculadora.php" method="POST">
		<label>fraccionario 1: En caso de raiz cuadrada solo utiliza estas dos casillas </label>
		<br>
		<input type="number" name="num_1" required>
		<input type="number" name="num2" required>
		<br><br>
		<select name="operacion">

			<option value="+">suma </option>
			<option value="-">resta </option>
			<option value="*">multiplicacion</option>
			<option value="/">division </option>
			<option value="**">potencia </option>
			<option value="R">Raiz cuadrada </option>
			
		</select>
		<br><br>
		<label>fraccionario 2: En caso de potencia use solo el primer espacio para poner cualto lo quiere elevar</label>
		<br>
		<input type="number" name="num3" >
		<input type="number" name="num4" >
		<br>
		<input type="submit" vale="Calcular">
		<br>
		<br>

	</form>
	<br>
	<?php

if(isset($_POST["num_1"]) && isset($_POST["num2"]) && isset($_POST["num3"]) && isset($_POST["num4"]) && isset($_POST["operacion"])){
	require_once("procesar.php");

}

?>
	
</body>
</html>