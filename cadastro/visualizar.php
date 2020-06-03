<!DOCTYPE html>
<html lang="pt-br">

<?php
	include_once("config/conect.php");
	$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$resulta_produto="SELECT * FROM cadastro WHERE id='$id'"; //ta errado
	$resultado_protuo= mysqli_query($conn, $resulta_produto);
	$visualizar_produto= mysqli_fetch_assoc($resultado_protuo);
    ?>
<head>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>visualizar produto</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
</head>
<body>

 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <div class="navbar-header">
   </div>
   <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="index.php">INICIO</a></li>
     <li><a href="#">LISTA DOS PRODUTOS</a></li>
     <li><a href="#">MAIS PEDIDOS</a></li>
     <li><a href="#">Ajuda</a></li>
    </ul>
   </div>
  </div>
 </nav>
 

 <div id="main" class="container-fluid">
  <h3 class="page-header">Visualizar ID <?php echo $visualizar_produto['id']?></h3>
  
  <div class="row">
    <div class="col-md-4">
      <p><strong>CODIGO DO PRODUTO</strong></p>
  	  <p><?php echo $visualizar_produto['codigo']?></p>
    </div>
	
	<div class="col-md-4">
      <p><strong>NOME DO ITEM</strong></p>
  	  <p><?php echo $visualizar_produto['nome_produto']?></p>
    </div>
	
	<div class="col-md-4">
      <p><strong>TIPO</strong></p>
  	  <p><?php echo $visualizar_produto['preco']?></p>
    </div>

    <div class="col-md-4">
      <p><strong>DATA</strong></p>
  	  <p><?php echo $visualizar_produto['data']?></p>
    </div>

    <div class="col-md-4">
      <p><strong>DATA</strong></p>
  	  <p><?php echo $visualizar_produto['descricao']?></p>
    </div>

    <div class="col-md-4">
      <p><strong>DATA</strong></p>
  	  <p><?php echo $visualizar_produto['categoria']?></p>
    </div>

 </div>
 
 <hr />
 <div id="actions" class="row">
   <div class="col-md-12">
     <a href="index.php" class="btn btn-primary">Fechar</a>
    <?php echo "	<a class='btn btn-default btn-xs' href='editar.php? id=".$visualizar_produto['id']."'>Editar</a>"; ?>
     <?php echo "	<a class='btn btn-default btn-xs' href='apagar.php? id=".$visualizar_produto['id']."'>Excluir</a>"; ?>
   </div>
 </div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>