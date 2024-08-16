<?php
  require_once "validator.php";
?>

<?php
/* fizemos uma array vazia */
  $chamado = array();
/*abrimos um arquivo e colocamos o r para ler */
  $arquivo = fopen("arquivo.hd","r");
/* criamos o while para que tudo que esteja na variavel arquivo repita ate ser satisfeita, o feof segnifica fim do arquivo mas como temos o ! ele nao sera satisfeito e vai continuar repitindo*/
 while(!feof($arquivo)) {
    $registro = fgets($arquivo); /*aqui criamos uma variavel com o fgets para le linha por linha do arquivo*/
    $chamado[] = $registro; /*aqui criamos outra variavel para que tudo que esteja no registro seja guardado na chamada */
  }
?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
               <!--colocamos uma variavel que queremos percorrer e a outra para guardar o valor -->
              <?php foreach($chamado as $chamado) {?>

                    <?php 
                    /* colocamos um explode para que um fique embaixo do outro */
                          $chamado_dados=explode('#',$chamado);
                          /* se o chamado_dados for menor que 3(que e a quantidade de irformaçoes que temos para colocar)se ficar um em branco mesmo com erro continue  */ 
                            if (count($chamado_dados) < 3){
                            continue;
                            }
                          ?>

                          
              <div class="card mb-3 bg-light">
              <div class="card-body">
                <h5 class="card-title"><?=$chamado_dados[0]?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[1]?></h6>
                <p class="card-text"><?=$chamado_dados[2]?></p>

              </div>
            </div>
              
             
            <?php } ?> 


              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>\