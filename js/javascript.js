//document para carregar a página create.php
 $(document).ready(function(){
    $("#create").click(function(){
      $("#retorno_Ajax").load("objects/create.php");
    });
  });

//document para carregar a página read.php 
  $(document).ready(function(){
    $("#read").click(function(){
      $("#retorno_Ajax").load("objects/read.php");
    });
  });

//navegador lateral
  $( document ).ready(function(){
    $(".button-collapse").sideNav({
      menuWidth: 224, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
    );
  });

function alertCreate(){
 	Materialize.toast('Cadastrado com sucesso!', 3000, 'rounded');
 }

function validar(){
	//validação
var nome_produto, valor_produto, descricao_produto;
nome_produto = document.getElementById("nome_produto").value;
valor_produto = document.getElementById('valor_produto').value;
descricao_produto = document.getElementById('descricao_produto').value;

if (nome_produto === "" || valor_produto === "" || descricao_produto === "") {
	Materialize.toast('Preencha todos os campos!', 3000, 'rounded');
	return false;
} else {
	//alert de inserido
 	Materialize.toast('Cadastrado com sucesso!', 3000, 'rounded');

}
}

function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}