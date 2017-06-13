<!DOCTYPE html>
<html>
<head>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="css/styleCrud.css">
   <!--ajax-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
</head>

  <body class="body">
  <nav>
    <div class="nav-wrapper white">
      <ul id="slide-out" class="side-nav">
        <li>
          <div class="userView">
            <div class="background">
              <img src="img/deserto.jpg">
            </div>
            <a href="#!user"><img class="circle" src="img/CF2F1C38-52CE-4195-92EA-F0708F293CC7.jpg"></a>
            <a href="#!name"><span class="white-text name">Wwwendel B</span></a>
            <a href="#!email"><span class="white-text email">wwwendel@live.com</span></a>
          </div>
        </li>
        <li>
          <a href="http://wendeloliveira.site40.net/" target="_blank"><i class="material-icons">whatshot
          </i>Portifolio site</a>
        </li>
        <li>
          <div class="divider"></div>
        </li>
        <li>
          <a class="subheader"><i class="material-icons">http
          </i>Link site</a>
        </li>
        <li>
          <a class="waves-effect" href="https://github.com/wendelbia" target="_blank"><i class="material-icons">grain</i>Git</a>
        </li>
      </ul>
       <a href="#" data-activates="slide-out" class="button-collapse show-on-large pulse"><i class="material-icons grey-text hide-on-med-and-down ">menu</i></a>
       <a href="#" id="menu-mobile" data-activates="slide-out" class="button-collapse pulse">
       <i class="material-icons grey-text">menu</i></a>
  
 
  <!--================================================-->
        <h5 class="brand-logo black-text center hide-on-med-and-down">
          Cadastro de Produtos
        </h5>
        <h5 class="brand-logo black-text right">
          <div class="chip">
            <img src="img/CF2F1C38-52CE-4195-92EA-F0708F293CC7.jpg" alt="Contact Person">
            WendelBia
            <i class="close material-icons">close</i>
          </div>
        </h5>
    </div>   
  </nav>
  <div class="container">  
    <div class="card-panel hoverable large">
      <div class="row">
        <div id="pulse" class="section scrollspy">
            <div id="radioset"> 
              <div style="display: flex; justify-content: space-around;">
                <button class="btn #9e9e9e grey lighten- btn-floating btn-large" id="create"><i class="material-icons">add</i></button>
            
                <button class="btn brown lighten-2  btn-floating btn-large" id="read"><i class="material-icons">assignment</i></button>

                <a href="objects/update.php" class="btn btn-floating btn-large grey darken-3"><i class="material-icons">edit</i></a>
              </div>  
            </div><!--end section scrollspy-->
          <div id="retorno_Ajax">
            <center>
              <br>
              <img src="img/cadastrando.png">
              <span><h4>Cadastre e Atualize os Produtos</h4></span>
            </center>
          </div><!--end ajax-->
        </div><!--end scrollspy-->
      </div><!--end row-->
    </div><!--end panel card-->
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
  </div><!--end container--> 

  
       <!--jquery-->
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
 
       <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
          
</body>
</html>