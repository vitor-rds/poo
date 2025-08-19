<?php 
require 'Pessoa.php';


echo 'IntroPOO'.'<br>';

$pessoa1 = new Pessoa();
$pessoa2 = new Pessoa();
$pessoa1->setNome("Leandro");
$pessoa2->setNome("Bryan");


$pessoa1->setSobrenome("M.");
$pessoa2->setSobrenome("M.");

echo "Pessoa1 = ".$pessoa1->getNome().'<br>';
echo "Pessoa2 = ".$pessoa2->getNome().'<br>';

echo $pessoa1->saudar() . '<br>';
echo $pessoa2->saudar() . '<br>';
/*nao posso acessar ela diretamente fora da minha classe pq nao estou usando metodo para ela*/
//$pessoa1->sobrenome = "M.";

$endereco = new Endereco();
$endereco->setLogradouro("Rua");
$endereco->setNome("Dos Agulhas");
$endereco->setNumero("123");
$endereco->setBairro("Grandioso");
$endereco->setCidade("Maravilha");
$endereco->setCep("89456777");


$pessoa1->setEndereco($endereco);
echo $pessoa1->saudar() . '<br>';
$pessoa1->dizerEndereco();


?>