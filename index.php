<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="processar.php" method="post">
	<label>Valor 1</label>
	<p></p>
	<input type="text" name="val1">
	<p></p>
	<label>Valor 2</label>
	<p></p>
	<input type="text" name="val2">
	<p></p>
	<select name="opcao">
		<option value="somar">somar</option>
		<option value="subtrair">subtrair</option>
		<option value="multiplicar">multiplicar</option>
		<option value="dividir">dividir</option>
	</select>
	<p></p>
	<button>Calcular</button>
</form>
</body>
</html>