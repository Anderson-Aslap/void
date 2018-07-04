<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>
	<form action="valida.php" method="POST" id="myForm">
		<label>Quantidade: </label><br>
		<input type="number" name="qtd"><br><br>
		<label>Código: </label><br>
		<input type="text" name="codigo" onkeydown="bloquear_ctrl_j();"><br><br>
		<!-- <input type="submit" name="enviar" value="Enviar"> -->
	</form>
</body>
<script type="text/javascript">
	function bloquear_ctrl_j(){
		if (window.event.ctrlKey && window.event.keyCode == 74){
			event.returnValue = false;
			event.keyCode = 0;
			document.getElementById('myForm').submit();
		}
	}
</script>
</html>