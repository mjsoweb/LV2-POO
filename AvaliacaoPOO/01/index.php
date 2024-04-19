<?php 
include 'Fatura.php';
$produto1= new Fatura();
$produto1->setNumero("001");
$produto1->setDescricao("Mouse");
$produto1->setQtdItem(3);
$produto1->setPrecoItem(25.59);

echo "Número item: " . $produto1->getNumero() . "\n";
echo "Descrição: " . $produto1->getDescricao() . "\n";
echo "Quantidade de itens: " . $produto1->getQtdItem() . "\n";
echo "Preço por item: " . $produto1->getPrecoItem() . "\n";
echo "Total da fatura: " . $produto1->getTotalFatura() . "\n";

?>
