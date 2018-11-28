<?php

namespace App\Model;

class PessoaDao
{
    public function create(Pessoa $p)
    {
        //Cadastra uma pessoa
        $sql = "INSERT INTO usuario (usuario, senha) VALUES ( '{$p->getUsuario()}', '{$p->getSenha()}')";
        $enviar = Conexao::getConexao()->prepare($sql);
        if ( $enviar->execute() ){
            return true;
        } else {
            return false;
        }
    }

    public function read(Pessoa $p)
    {
        //Busca uma pessoa
        $sql = "SELECT usuario FROM usuario WHERE usuario = '{$p->getUsuario()}'AND senha = '{$p->getSenha()}'";//
        $enviar = Conexao::getConexao()->prepare($sql);
        $enviar->execute();
        if ($enviar->rowCount() > 0) {
            return true;
        }
        return false;
    }
}