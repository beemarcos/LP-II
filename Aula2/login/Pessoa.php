<?php

require_once "ConnectionFactory.php";

class Pessoa
{
    private $nome;
    public static $_count = 0;

    public function __construct()
    {
        Pessoa::$_count++;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function __toString()
    {
        return $this->nome;
    }

}


class Funcionario extends Pessoa
{
    private $salario;

    public function __construct()
    {
        parent::__construct();
        $this->salario = 1000;
    }

    public function aumentarSalario($porcentagem)
    {
        $this->salario *= porcentagem;
    }

    public function getSalario()
    {
        return $this->salario;
    }
}

$p = new Funcionario;
$p->setNome('Marcos');
echo $p;

echo "<br /><br />";

$joao = new Funcionario;
$joao->setNome('Joao');
echo $joao;

echo "<br /><br />";

echo Pessoa::$_count;

echo "<br /><br />"; 

echo ConnectionFactory::getConnection();






