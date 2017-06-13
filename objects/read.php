<?php require '../funcoes/Funcoes.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styleCrud.css">
	<title>Read</title>
	
  <script type="text/javascript" src="js/javascript.js"></script>
</head>
<body>
<div>
		<?php 
			$funcoes = new Funcoes();
			$read = $funcoes->read();
		?>
<div class="row">
        <div class="input-field col s12 xs12 brown-text">
          <i class="material-icons prefix">search</i>
          <input class="validate" type="text" id="myInput" onkeyup="myFunction()">
          <label for="icon_prefix" class="grey-text">Pesquisar nome produto</label>
        </div>
</div>        
<table class="table highlight  responsive-table">
	<thead>
		<th width="90px;">cod.</th>
		<th width="90px;">produto</th>
		<th width="90px;">valor</th>
		<th width="90px;">descrição</th>
		<th width="70px">data/hora</th>
	</thead>
</table>
<div style="overflow:auto; width: auto; height: 235px;">
<table id="myTable" class="table highlight responsive-table">
		<?php foreach ($read as $key => $value) {?>
	<tbody>
		<tr class="header">
			<td width="100px;"><?php echo $value['id'];?></td>
			<td width="100px;"><?php echo $value['nome_produto'];?></td>
			<td width="100px;"><?php echo $value['valor_produto']; ?></td>
			<td width="100px;"><?php echo $value['descricao_produto']; ?></td>
			<td width="105px;"><?php echo $value['data_produto'];?></td>
		</tr>
	</tbody>
	<?php } ?>
</table>
</div>
</div>
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