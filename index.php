<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Language" content="pt-br">


      
       <script language="JavaScript" type="text/javascript" src="cidades-estados-1.4-utf8.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
      
         
      
      
      
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      
      
      
      
     
  </head>
  <body>
 
      
      <p></p>
      
      <!-- Fluid Jumbotron --> 
      
   <div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Brasil - Todas as cidades e Estados</h1>
    <p class="lead">Todas as Cidades e estados do Brasil</p>
  </div>
  </div>
   </div>    
      
      
   <!-- Inserir Usuário -->      
      
 <div class="container-fluid">    

  <form class="was-validated"  name="regform" method="POST" action="idenfica.php" onsubmit="return valida()">
 
 
      
   
      
      
    
        
    </div>
      
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Estado:</label>
      <select id="estado4" name="estado"></select>
      <div class="invalid-feedback">Favor Selecionar Estado</div>
    
        
    </div>
      
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Senha">Cidade</label>
      <select id="cidade4" name="cidade"></select>
      <div class="invalid-feedback">Favor preencher a cidade</div>
    
        
    </div>
       
     
      
   
    <script language="JavaScript" type="text/javascript" charset="utf-8">
      new dgCidadesEstados({
        cidade: document.getElementById('cidade4'),
        estado: document.getElementById('estado4')
      })
    </script>

      
      
      
      
    
    </div>

      
 
       <div class="form-row">
    <div class="form-group col-md-6">

     <input type="submit" class="btn btn-primary" Value="Identifica">
        
    </div>
      
      
     

   </form>
      
       
     
      </div>     

      
     
      
       <?php include("rodapeLimpo.php"); ?>
      

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>