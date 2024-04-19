<?php 
class Fatura {
private $numero;
private $descricao;
private $qtdItem;
private $precoItem;

public function getNumero () {
    return $this->numero;
}

public function setNumero ($numero) {
    $this->numero = $numero;
}
public function getDescricao () {
    return $this->descricao;
}

public function setDescricao ($descricao) {
    $this->descricao = $descricao;
}
public function getQtdItem () {
    return $this->qtdItem;
}

public function setQtdItem ($qtdItem) {
    $this->qtdItem = $qtdItem;
}
public function getPrecoItem () {
    return $this->precoItem;
}


public function setPrecoItem ($precoItem) {
    if ($precoItem < 0) {
        $this->precoItem = 0.0;
    } else {
        $this->precoItem = $precoItem;
    }
}

public function getTotalFatura (){
    $totalFatura = $this->qtdItem * $this->precoItem;
    if ($totalFatura < 0) {
        $totalFatura = 0;
    }
    return $totalFatura;
}
}