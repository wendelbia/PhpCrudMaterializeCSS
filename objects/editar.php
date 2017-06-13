<?php require '../funcoes/Funcoes.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--para ícones-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css"> 
	<!-- estilo personalizado -->
	<link rel="stylesheet" type="text/css" href="css/styleCrud.css">
	<title>editar</title>
	   <!--ajax-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/javascript.js"></script>


<?php 
	$funcoes = new Funcoes();
?>

<?php

	if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){
	$id = (int) $_GET['id'];	
	$readOn = $funcoes->readOn($id);

 ?>

 <div class="container">	
 <div class="card medium">
    <!-- Card Content -->
    <div class="container">
    <br>
	<h5>Editar Produto</h5><br>

  		<form method="post" action="editar.php">
	

		<input type="text" name="nome_produto" value="<?php echo $readOn['nome_produto'];?>" placeholder="Digite o Nome do Produto..."/><br>

		<input type="text" name="valor_produto" value="<?php echo $readOn['valor_produto'];?>" placeholder="Digite o Valor do Produto..."/><br>

		<input type="text" name="descricao_produto" value="<?php echo $readOn['descricao_produto'];?>" placeholder="Descrição do Produto..."/>

		<input type="hidden" name="id" id="id" value="<?php echo $readOn['id'];?>" placeholder="Descrição do Produto..."/>
		<button class="btn waves-effect waves-light grey darken-2" input type="submit" name="atualizar">Atualizar
  		</button>
  		<a href="update.php" class="btn waves-effect waves-light grey darken-2" >cancelar
  		</a>
  		</form>	
	</div>	
  </div>
 </div>		
<?php } ?>

<?php 

								if (isset($_POST['atualizar'])) {
									$id = (int) $_POST['id'];
									$nome_produto = $_POST['nome_produto'];
									$valor_produto = $_POST['valor_produto'];
									$descricao_produto = $_POST['descricao_produto'];

									$funcoes->setNome_produto($nome_produto);
									$funcoes->setValor_produto($valor_produto);
									$funcoes->setDescricao_produto($descricao_produto);
									if ($funcoes->update($id)) {
										
										?>
 <div class="row">
        <div class="col xs12 s12 m12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Produto Editado</span>
              <p>
              	<?php $readOn = $funcoes->readOn($id); ?>

		<span class="orange-text text-darken-2">Código produto:</span><?php echo $readOn['id'];?><br><br>

		<span class="orange-text text-darken-2">Valor produto:</span> <?php echo $readOn['valor_produto'];?><br><br>

		<span class="orange-text text-darken-2">Descrição produto:</span><?php echo $readOn['descricao_produto'];?><br><br>

		<span class="orange-text text-darken-2">Nome produto:</span> <?php echo $readOn['nome_produto'];?> <br><br>


              </p>
            </div>
            <div class="card-action">
              <a href="update.php">Voltar</a>
              <a href="http://localhost/PhpCrudMaterializeCSS">Página Inicial</a>
            </div>
          </div>
        </div>
      </div>
							<?php	}
								}

?>

<div class="fixed-action-btn horizontal click-to-toggle">
		      <a class="btn-floating btn-large  grey lighten-2  pulse">
		        <i class="material-icons grey-text">menu</i>
		      </a>
		      <ul>
			      <li><a class="btn-floating grey darken-4"><i class="material-icons">insert_chart</i></a></li>
			      <li><a class="btn-floating  grey darken-3"><i class="material-icons">format_quote</i></a></li>
			      <li><a class="btn-floating  grey darken-1"><i class="material-icons">publish</i></a></li>
			      <li><a href="http://localhost/PhpCrudMaterializeCSS/" class="btn-floating grey lighten-1"><i class="material-icons">home</i></a></li>
		      </ul>
		    </div>


  <!--jquery-->
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
 
       <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
		

</body>
</html>