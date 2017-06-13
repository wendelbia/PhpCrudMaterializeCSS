<?php 
require '../funcoes/Funcoes.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>update</title>
	<!--para ícones-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css"> 
	<!-- estilo personalizado -->
	<link rel="stylesheet" type="text/css" href="css/styleCrud.css">
 
	   
</head>
<body>
<div class="container">
<div>
<br>
		<h5>Atualizar Produtos</h5>
		<?php $funcoes = new Funcoes();?>


<?php 
			if (isset($_GET['acao']) && $_GET['acao'] == 'excluir') {
			$id = (int)$_GET['id'];
			if ($funcoes->delete($id)) {
				header('location: update.php');	
			}
		}
?>
	

	<?php	$read = $funcoes->read();?>
	<div class="row">
      <form action="update.php" method="post">
      	  <div class="input-field col s12 xs12 brown-text">
          <i class="material-icons prefix  brown-text">search</i>
          <input class="validate" type="text" id="myInput" onkeyup="myFunction()">
          <label for="icon_prefix" class="grey-text">Pesquisar nome produto</label>
        </div>
      </form>
	</div>     
	<table class="table highlight  responsive-table">
		<thead>
			<th width="110px;">cod.</th>
			<th width="110px;">produto</th>
			<th width="110px;">valor</th>
			<th width="110px;">descrição</th>
			<th width="110px;">atualizar</th>
		</thead>
	</table>
	<div style="overflow:auto; width: auto; height: 265px;">
		<table id="myTable" class="table highlight responsive-table">
			<?php foreach ($read as $key => $value) {?>
			<tbody>
				<tr class="header">
					<td width="100px;"><?php echo $value['id'];?></td>
					<td width="100px;"><?php echo $value['nome_produto'];?></td>
					<td width="100px;"><?php echo $value['valor_produto']; ?></td>
					<td width="100px;"><?php echo $value['descricao_produto']; ?></td>
					<td width="100px;">
						

<button class="waves-effect waves-light"><?php echo "<a href='update.php?acao=excluir&id=" . $value['id'] . "' onclick='return confirm(\"Deseja realmente excluir?\")'>"; ?><i class="material-icons red-text">delete</i></button>

<button class="waves-effect waves-grey darken-1"><?php echo "<a href='editar.php?acao=editar&id=" . $value['id'] . "' >";?>
 <i class="material-icons black-text">edit</i></button>

					</td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
        </div>
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
		    </div><!--end id conteudo-->
</div><!--end container-->

	  <!--jquery-->
	  <script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous"></script>

	 
	  <!--text javascript-->
	  <script src="../js/javascript.js"></script>	 	  

	  <!--ajax-->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	 
	  <!-- Compiled and minified JavaScript -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>




</body>
</html>