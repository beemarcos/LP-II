<?php

namespace App\Model;

class PessoaDao
{
    public function create(Pessoa $p)
    {
        //Cadastra uma pessoa
        $sql = "INSERT INTO usuario (usuario, senha) VALUES ( '{$p->getUsuario()}', '{$p->getSenha()}')";
        $enviar = Conexao::getConexao()->prepare($sql);
        $enviar->execute();
    }

    public function read()
    {
        //Busca uma pessoa
        $sql = 'SELECT * FROM usuario';
        $enviar = Conexao::getConexao()->prepare($sql);
        $enviar->execute();
        if ($enviar->rowCount() > 0) {
            $resultado = $enviar->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
        return [];
    }
}