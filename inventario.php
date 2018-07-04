<?php 
include 'conexao.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>ESTOQUE</h1>
<table border="1" bgcolor="#EEE" cellpadding="10" cellspacing="0">
	<tr>
		<td>NOME</td>
		<td>QUANTIDADE</td>
	</tr>
	<?php 
		$ver_estoque = mysqli_query($conecta, "SELECT * FROM estoque");
		while ($linha=mysqli_fetch_array($ver_estoque)) {?>
			<tr>
				<td><?= $linha['DESCRICAO']?></td>
				<td><?= $linha['QUANTIDADE']?></td>
			</tr>
	<?php }?>
</table>
<a href="index.php">Voltar</a>	
</body>
</html>