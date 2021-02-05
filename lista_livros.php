<!DOCTYPE html>
<html>
<head>
	<title>Lista de Livros</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/317d275eb6.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container" style="margin-top: 40px">
<h3>Lista de Livros</h3>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>

    	<?php
    		include 'conexao.php';
    		$sql = "SELECT * FROM `biblioteca`";
    		$busca = mysqli_query($conexao,$sql);

    		while ($array = mysqli_fetch_array($busca)){

    			$id_biblioteca = $array['id_biblioteca'];
    			$titulodolivro = $array['titulodolivro'];
    			$autordolivro = $array['autordolivro'];
    			$categoria = $array['categoria'];
    			$quantidade = $array['quantidade'];
    	?>
    <tr>
      <td><?php echo $titulodolivro ?></td>
      <td><?php echo $autordolivro ?></td>
      <td><?php echo $categoria ?></td>
      <td><?php echo $quantidade ?></td>
      <td><a class="btn btn-warning btn-sm" style="color:#fff" href="editar_livro.php?id=<?php echo $id_biblioteca?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
        <a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_livro.php?id=<?php echo $id_biblioteca?>" role="button"><i class="far fa-trash-alt"></i></i>&nbsp;Excluir</a>
      </td>
  <?php }	?>

    </tr>

</table>
  <div style="text-align: right">
    <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
  </div>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>