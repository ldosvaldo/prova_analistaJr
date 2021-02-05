<?php 

include 'conexao.php';

$id = $_GET['id'];

 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Biblioteca C-LIG</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<style type="text/css">
		#tamanhoContainer{
			width: 500px;
		}

		#botao{
			background-color: #327CCB;
			color: #ffffff;
		}
	</style>

</head>
<body>

<div class=" container" id="tamanhoContainer" style="margin-top: 40px">
	<h4> Biblioteca C-LIG</h4>
	<form action="_atualizar_livro.php" method="post" style="margin-top: 20px">
		<?php

		$sql = "SELECT * FROM `biblioteca` WHERE id_biblioteca = $id";
		$buscar = mysqli_query($conexao,$sql);
		while ($array = mysqli_fetch_array($buscar)) {
				$id_biblioteca = $array['id_biblioteca'];
    			$titulodolivro = $array['titulodolivro'];
    			$autordolivro = $array['autordolivro'];
    			$categoria = $array['categoria'];
    			$quantidade = $array['quantidade'];
			

		?>

    	<div class="form-group">
    		<label>Título do Livro</label>
    		<input type="text" class="form-control" name="titulodolivro" value="<?php echo $titulodolivro ?>">
    		<input type="text" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">

   	 	</div>
    	<div class="form-group">
    		<label>Autor do Livro</label>
    		<input type="text" class="form-control" name="autordolivro" value="<?php echo $autordolivro ?>">
    		<input type="text" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">

    	</div>
    	<div class="form-group">
    		<label>Categoria</label>
    		<input type="text" class="form-control" name="categoria" value="<?php echo $categoria ?>">

    	</div>
    	<div class="form-group">
    		<label>Quantidade</label>
    		<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">

    	</div>
    	<div style="text-align: right;">
   		 	<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
		</div>
	<?php } ?>
	</form>	
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>