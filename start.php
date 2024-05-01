<?php

// $connection = new PDO('sqlite:./banco.sqlite');

header('Content-type: text/plain');
print_r($_POST);
exit;

include 'classes/Cliente.php';
include 'classes/Endereco.php';
include 'classes/Pedido.php';
include 'classes/Pizza.php';
include 'classes/Refrigerante.php';
include 'classes/Batatinha.php';

$cliente = new Cliente();
$cliente->setNome(readline("Digite o nome: "));
$cliente->setContato(readline("Contato: "));

$endereco = new Endereco();
$endereco->setRua("Rua 01");
$endereco->setBairro("Centro");
$endereco->setCidade("Erechim");

$cliente->setEndereco($endereco);

$pedido = new Pedido();
$pedido->setCliente($cliente);

$pizza = new Pizza();
$pizza->setSabor('4 queijos');
$pizza->setTamanho('Média');
$pedido->addItem($pizza);

// $pizza = new Pizza();
// $pizza->setSabor('Frango');
// $pizza->setTamanho('Média');
// $pizza->setBorda('catupiri');
// $pedido->addItem($pizza);

// $refrigerante = new Refrigerante();
// $refrigerante->setSabor('Citrus');
// $pedido->addItem($refrigerante);

// $batatinha = new Batatinha();
// $batatinha->setTamanho('Pequena');
// $pedido->addItem($batatinha);

