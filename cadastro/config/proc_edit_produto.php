<?php
session_start();
include_once("conect.php");



$id = filter_input( INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_STRING);
$nome_produto = filter_input(INPUT_POST, 'nome_produto', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_INT);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);

$result="UPDATE  cadastro SET codigo='$codigo', nome_produto='$nome_produto', preco='$preco', descricao='$descricao', categoria='$categoria' modifi=NOW() WHERE id='$id' ";
$resultado= mysqli_query($conn, $result);	

if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] ="<h2 style='color:green'>ALTERAÇÃO FEITA COM SUCESSO.</h2>";
    header("Location: ../index.php");
	
}else{
	
    $_SESSION['msg'] ="<h2 style='color:red'>NÃO FOI POSSIVEL REALIZAR ESTA ALTERAÇÃO.</h2>";
    header("Location: ../index.php");
	
}