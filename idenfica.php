<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      



<?php

$estado1=array($_POST["estado"]);
$cidade1=array($_POST["cidade"]);    
$stringCidade= implode(",", $cidade1);
$stringEstado= implode(",", $estado1);      
$cidade=$stringCidade;
$estado=$stringEstado;     

?>
  
      
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Estado e Cidade </h4>
  <p>O estado escolhido no combo anterior foi.</p>
  <hr>
  <p class="mb-0"><?php echo $estado; ?></p>
</div>
          
      
<div class="alert alert-primary" role="alert">
 A cidade que Escolheu foi ?
</div>

<div class="alert alert-dark" role="alert">
 A cidade de: <?php echo $cidade; ?> 
</div>            
      
      
 
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Array no PHP  </h4>
  <p>$estado1=array($_POST["estado"]);<br>
$cidade1=array($_POST["cidade"]);<br>    
$stringCidade= implode(",", $cidade1);<br>
$stringEstado= implode(",", $estado1);<br>      
$cidade=$stringCidade;<br>
$estado=$stringEstado;  </p>
  <hr>
  <p class="mb-0"></p>
</div>      
      
<div class="alert alert-dark" role="alert">
  Voltando para página anterior <a href="index.php" class="alert-link"> Voltar </a>. A página onde está todas as cidades e todos os estados do Brasil.
</div>
      
      
      
      

      
      
      
      






  <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


