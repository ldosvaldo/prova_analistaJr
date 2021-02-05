<?php

include 'conexao.php';


$titulodolivro = $_POST['titulodolivro'];
$autordolivro = $_POST['autordolivro'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO `biblioteca`(`titulodolivro`, `autordolivro`, `categoria`, `quantidade`) VALUES ('$titulodolivro','$autordolivro','$categoria',$quantidade)";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	
<div class="container" style="width: 500px; margin-top: 20px">
	<center>
	<h4>Livro Adicionado com Sucesso !</h4>
	</center>
	<div style="padding-top: 20px">
		<center>
		<a href="index.php" role= "button"	 class="btn btn-primary">Cadastrar Novo Livro</a>
		</center>
	</div>

</div>