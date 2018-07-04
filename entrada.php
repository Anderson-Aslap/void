<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Entrada</h1>
<form method="post" action="entra.php">
	<input type="text" name="cod" placeholder="Codigo" onkeydown="bloquear_ctrl_j();">
	<input type="number" name="quant" placeholder="Quantidade">
	<input type="submit" value="Enviar">
</form>

<script type="text/javascript">
	function bloquear_ctrl_j(){
		if (window.event.ctrlKey && window.event.keyCode == 74){
			event.returnValue = false;
			event.keyCode = 0;
			document.getElementById('myForm').submit();
		}
	}
</script>

<a href="index.php">index</a>

</body>
</html>