<?php

namespace App\Model;

class CategoriaDao
{
    public function create ( Categoria $c )
    {
        //cadastra uma categoria
        $stmt = Conexao::getConexao()->prepare( 'INSERT INTO categorias (nome) VALUES (:nome)');
        $stmt->bindParam(':nome', $c->getNome());
        if ( $stmt->execute() ){
            return true;
        } else {
            return false;
        }
    }
    public function read ()
    {
        //le as categorias
        $sql = 'SELECT * FROM categorias';
        $enviar = Conexao::getConexao()->prepare($sql);
        $enviar->execute();
        if ( $enviar->rowCount() >0 ) {
            $resultado = $enviar->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }
        return [];
    }
    public function update ( Categoria $c )
    {
        //atualiza os dados da categoria
        $stmt = Conexao::getConexao()->prepare( 'UPDATE categorias SET nome = :nome WHERE id = :id');
        $stmt->bindParam(':nome', $c->getNome());
        $stmt->bindParam(':id', $c->getId());
        if ( $stmt->execute() ){
            return true;
        } else {
            return false;
        }
    }
    public function delete ( $codigo )
    {
        //remove a categoria
        $stmt = Conexao::getConexao()->prepare( 'DELETE FROM categorias WHERE id = :id');
        $stmt->bindParam(':id', $codigo);
        if ( $stmt->execute() ){
            return true;
        } else {
            return false;
        }
    }
}