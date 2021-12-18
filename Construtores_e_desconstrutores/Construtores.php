<?php

include_once 'Pessoa2.class.php';
include_once 'Conta2.class.php';

$carlos = new Pessoa(10, "Carlos da Silva", 1.86, 25, "10/04/1981", "Ensino Medio", 650.00);

echo "Manipulando o objeto {$carlos->Nome}: <br>";

echo "{$carlos->Nome} e formado em: {$carlos->Escolaridade}<br>";
$carlos->Formar("Tecnico em Eletricista");
echo "{$carlos->Nome} e formado em: {$carlos->Escolaridade}<br>";
echo "<br>";
echo "{$carlos->Nome} tem: {$carlos->Idade}<br>";
$carlos->Envelhecer(5);
echo "{$carlos->Nome} tem: {$carlos->Idade}<br>";
echo "<br>";
echo "{$carlos->Nome} tem de Altura: {$carlos->Altura}<br>";
$carlos->Crescer(0.15);
echo "{$carlos->Nome} tem de Altura: {$carlos->Altura}<br>";

echo "<br>";



$conta_carlos = new Conta(7213, "CC.9121.89", "10/09/2021", $carlos, 9123, 678.452, false);
echo "O Saldo em Reais: {$conta_carlos->ObterSaldo()}<br>";
echo "<br>";
$conta_carlos->Depositar(100.000);
echo "O Saldo em Reais: {$conta_carlos->ObterSaldo()}<br>";
$conta_carlos->Retirar(4.00);
echo "O Saldo em Reais: {$conta_carlos->ObterSaldo()}<br>";


?>