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
	<form action="_inserir_livro.php" method="post" style="margin-top: 20px">

    	<div class="form-group">
    		<label>Título do Livro</label>
    		<input type="text" class="form-control" name="titulodolivro" placeholder="Insira o título do livro" autocomplete="off" required>

   	 	</div>
    	<div class="form-group">
    		<label>Autor do Livro</label>
    		<input type="text" class="form-control" name="autordolivro" placeholder="Insira o nome do autor livro" autocomplete="off" required>

    	</div>
    	<div class="form-group">
    		<label>Categoria</label>
    		<input type="text" class="form-control" name="categoria" placeholder="Insira a categoria do livro" required>

    	</div>
    	<div class="form-group">
    		<label>Quantidade</label>
    		<input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade de livros" required>

    	</div>
    	<div style="text-align: right;">
   		 	<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
            <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
		</div>
	</form>	
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>