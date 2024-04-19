<?php     
include 'Empregado.php';

$empregado1 = new Empregado("Pedro","Santos", 1700);
$empregado2 = new Empregado("Gabriel","Ferreira", 2500);

echo "\nSalário sem aumento empregado 1: " . $empregado1->getsalarioMensal();
echo "\nSalário  sem aumento empregado 2:" . $empregado2->getsalarioMensal();


$empregado1->aplicarAumento(10); 
$empregado2->aplicarAumento(10); 

echo "\nNome empregado 1: " . $empregado1->getNome() . "\n";
echo "\nSobrenome empregado 1: " . $empregado1->getSobrenome() . "\n";

echo "\nNome empregado 2: " . $empregado2->getNome() . "\n";
echo "\nSobrenome empregado 2: " . $empregado2->getSobrenome() . "\n";


echo "\nSalário com aumento empregado1: " . $empregado1->getsalarioMensal();
echo "\nSalário com aumento empregado2: " . $empregado2->getsalarioMensal();
?>
