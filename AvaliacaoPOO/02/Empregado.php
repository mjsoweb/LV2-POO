<?php
class Empregado
{
    private $nome;
    private $sobrenome;
    private $salarioMensal;

    public function __construct($nome, $sobrenome, $salarioMensal)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function getsalarioMensal()
    {
        return $this->salarioMensal;
    }
    public function setsalarioMensal($salarioMensal)
    {
        $this->salarioMensal = $salarioMensal;
    }

    public function aplicarAumento($porcentagem)
    {
        $this->salarioMensal *= (1 + ($porcentagem / 100));
        return $this->salarioMensal;
    }
}
?>
