<?php

require_once "Pessoa.php";

$Pessoa = new Pessoa('castanho', 'Feminino');

$Pessoa->setNome('Carol');
$Pessoa->setIdade(24);
$Pessoa->setCorDosOlhos('Castanho');
$Pessoa->setGenero('Feminino');
$Pessoa->setAltura(1.67);
$Pessoa->setPeso(60);


Echo "---- TESTE ----- ";
echo "<br>";
echo "Nome: " . $Pessoa->nome;
echo "<br>";
echo "Idade: " . $Pessoa->idade;
echo "<br>";
echo "Cor dos olhso: ". $Pessoa->getCorDosOlhos();
echo "<br>";
echo "Genero: " . $Pessoa->getGenero();
echo "<br>";
echo "Altura: " . $Pessoa->altura;
echo "<br>";
echo "Peso: " . $Pessoa->peso;
echo "<br>";
