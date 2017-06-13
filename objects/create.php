<?php require '../funcoes/Funcoes.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="css/styleCrud.css">
   <!--ajax-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/javascript.js"></script>
</head>
<body>
<br>
	
		<?php
			$funcoes = new Funcoes();

			if (isset($_POST['cad'])) {
				$nome_produto = $_POST['nome_produto'];
				$valor_produto = $_POST['valor_produto'];
				$descricao_produto = $_POST['descricao_produto'];

				$funcoes->setNome_produto($nome_produto);
				$funcoes->setValor_produto($valor_produto);
				$funcoes->setDescricao_produto($descricao_produto);

				if ($funcoes->inserir()) {
					echo "<script>alertCreate();</script>";

				}
			}
		?>
	<center>
		<form action="objects/create.php" method="post" target="iAjax" onsubmit="return validar();">
			<h5>Cadastro de Produto</h5>
			<input type="text" name="nome_produto" onfocus="this.value='';" id="nome_produto" placeholder="Digite o Produto..."/><br>
			<input type="text" name="valor_produto" onfocus="this.value='';" id="valor_produto" placeholder="Digite o Valor do Produto..."/><br>
			<input type="text" name="descricao_produto" onfocus="this.value='';" id="descricao_produto" placeholder="Descrição do Produto..."/>
			<button class="btn waves-effect waves-light grey darken-2" input type="submit" name="cad">Cadastrar
    			<i class="material-icons right">send</i>
  			</button>
		</form>
		<iframe name="iAjax" style="display:none;"></iframe>
	</center>
	   <!--jquery-->
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
 
       <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>