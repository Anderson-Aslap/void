<?php

$conexao = mysqli_connect("localhost", "root", "", "mercado");

$codigo = $_POST['cod'];
$quantidade2 = $_POST['quant'];


$a = mysqli_query($conexao,"SELECT QUANTIDADE FROM estoque WHERE CODIGO = '$codigo'");

while($linha = mysqli_fetch_array($a)){
	$quantidade = $linha['QUANTIDADE'];

	$u = mysqli_query($conexao,"UPDATE estoque SET QUANTIDADE = '$quantidade'+'$quantidade2' WHERE CODIGO = '$codigo'");
	header('location:inventario.php');
}


?>