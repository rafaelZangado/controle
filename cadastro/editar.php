<!DOCTYPE html>
<html lang="pt-br">
	<?php
	include_once("config/conect.php");
	$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$resulta_produto="SELECT * FROM cadastro WHERE id='$id'"; //ta errado
	$resultado_protuo= mysqli_query($conn, $resulta_produto);
	$edit_produto= mysqli_fetch_assoc($resultado_protuo);
	?>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>CADASTRO DE PRODUTO</title>

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
  
  <h3 class="page-header">Adicionar Item</h3>
  
  <form action="config/proc_edit_produto.php" method="POST">

  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label>CODIGO</label>
  	  	<input type="text" name="codigo" value="<?php echo $edit_produto['codigo']?>" >
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label >NOME DO PRODUTO</label>
  	  	<input type="text" name="nome_produto" class="form-control" value="<?php echo $edit_produto['nome_produto']?>" placeholder="Digite o valor">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label >PREÇO R$</label>
  	  	<input type="text" name="preco" class="form-control" value="<?php echo $edit_produto['preco']?>"placeholder="R$ 00,000">
  	  </div>
	</div>
	
	<div class="row">
  	  <div class="form-group col-md-3">
  	  	<label >DESCRIÇÃO</label>
  	  	<input type="text" name="descricao" class="form-control" value="<?php echo $edit_produto['descricao']?>" placeholder="Digite o valor">
  	  </div>
	 
	  <div class="form-group col-md-3">
  	  	<label>CATEGORIA</label>
  	  	<input type="text" name="categoria" class="form-control" value="<?php echo $edit_produto['categoria']?>" placeholder="Digite o valor">
  	  </div>
	 
	</div>
	

	<hr />
	<center>
	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">atualizar</button>
		<a href="index.php" class="btn btn-default">Cancelar</a>
	  </div>
	</div>
</center>
  </form>
 </div>
 

 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>