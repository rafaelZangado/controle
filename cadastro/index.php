<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>CRUD com Bootstrap 3</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">

 <?php
 session_start();

include("config/conect.php");
$consulta="SELECT * FROM cadastro";
$result=mysqli_query($conn, $consulta);
?>
</head>
<body>

 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
   
   </div>
   <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
    
    </ul>
   </div>
  </div>
 </nav>

 <div id="main" class="container-fluid" style="margin-top: 50px">
 
 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Lista de Intes</h2>
		</div>
		<div class="col-sm-6">
			
			<div class="input-group h2">
				<input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
			
		</div>
		<div class="col-sm-3">
			<a href="add.html" class="btn btn-primary pull-right h2">CADASTRAR NOVO PRODUTO</a>
		</div>
	</div> <!-- /#top -->
 
 
	 <hr />
	 <?php echo $_SESSION['msg']; ?>
 	<div id="list" class="row">
	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr> 
					<th>Codigo do produto</th>
					<th>Nome do item</th>
					<th>Tipo</th>
					<th>Data da compra</th>
					<th class="actions">Ações</th>
				</tr>
			</thead>
			<tbody>
      <?php while ($lista =mysqli_fetch_assoc($result)){ ?>
          <input type="hidden" name="id" value="<?php echo $lista['id'];?>">
				<tr>
					<td><?php echo $lista['codigo'];?></td>
					<td><?php echo $lista['nome_produto'];?></td>
					<td><?php echo $lista['descricao'];?></td>
					<td><?php echo $lista['categoria'];?></td>
					<td class="actions">
          
			<?php echo "	<a class='btn btn-success btn-xs' href='visualizar.php? id=".$lista['id']."'>Visualizar</a>"; ?>
            <?php echo "	<a class='btn btn-warning btn-xs' href='editar.php? id=".$lista['id']."'>Editar</a>"; ?>
			<?php echo "	<a class='btn btn-danger btn-xs' href='apagar.php? id=".$lista['id']."'>Excluir</a>"; ?>
					</td>
				</tr>
        <?php } ?>  
			</tbody>
		</table>
	</div>
	
	</div> <!-- /#list -->
	
	<div id="bottom" class="row">
		<div class="col-md-12">
			<ul class="pagination">
				<li class="disabled"><a>&lt; Anterior</a></li>
				<li class="disabled"><a>1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
			</ul><!-- /.pagination -->
		</div>
	</div> <!-- /#bottom -->
 </div> <!-- /#main -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sim</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>

 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>