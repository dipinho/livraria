<?php

include 'conexao.php';

$nomeproduto = $_POST['nomeproduto'];
$sinopse = $_POST['sinopse'];
$categoria = $_POST['categoria'];
$editora = $_POST['editora'];
$preco = $_POST['preco'];

$sql = "INSERT INTO `estoque`(`nomeproduto`, `categoria`, `editora`, `preco`) 
VALUES ('$nomeproduto','$categoria','$editora',$preco)";

?>