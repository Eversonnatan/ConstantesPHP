<?php

 include_once 'fornecedor.php';
 include_once 'produto.php';

 //instancia Fornecedor
$fornecedor = new Fornecedor();

$fornecedor->Codigo = 848;
$fornecedor->$RazaoSocial = 'Bom gosto alimentos S.A .';
$fornecedor->Endereco = 'Rua Ipiranga' ;
$fornecedor->Cidade = 'Poço de Caldas;

//instancia Produto'
$produto = new Produto();

$produto->Codigo = 462; 
$produto->$Descricao = 'Doce de Pêssego';
$produto->Preco = 1.24;
$produto->Fornecedor = $fornecedor;

//Imprime atributos
echo 'Codigo: ' . $produto->Codigo . "<br>";
echo 'Descrição: ' . $produto->Descricao. "<br>";
echo 'Coódigo: ' . $produto->Fornecedor->Codigo . "<br>";
echo 'Razão SOcial: ' . $produto->Fornecedor->RazaoSocial . "<br>";

$produto->Codigo . "<br>";
$produto->$Descricao . "<br>";
$produto->Fornecedor->Codigo . "<br>";
$produto->Fornecedor->RazãoSocial . "<br>";





?>