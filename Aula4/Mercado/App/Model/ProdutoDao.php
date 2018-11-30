<?php

namespace App\Model;

class ProdutoDao
{
    public function create ( Produto $p )
    {
        //cadastra um produto
        $stmt = Conexao::getConexao()->prepare( 'INSERT INTO produtos (nome, id_categoria) VALUES (:nome,:id_categoria)');
        $stmt->bindParam(':nome', $p->getNome());
        $stmt->bindParam(':id_categoria', $p->getId_categoria());
        if ( $stmt->execute() ){
            return true;
        } else {
            return false;
        } 
    }
    public function read ()
    {
        //le os produtos
        $sql = 'SELECT * FROM produtos';
        $enviar = Conexao::getConexao()->prepare($sql);
        $enviar->execute();
        if ( $enviar->rowCount() >0 ) {
            $resultado = $enviar->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
        return [];
    }
    public function update ( Produto $p )
    {
        //atualiza os dados do produto
        $stmt = Conexao::getConexao()->prepare( 'UPDATE produtos SET nome = :nome, id_categoria = :id_categoria WHERE id = :id');
        $stmt->bindParam(':nome', $p->getNome());
        $stmt->bindParam(':id', $p->getId());
        $stmt->bindParam(':id_categoria', $p->getId_categoria());
        if ( $stmt->execute() ){
            return true;
        } else {
            return false;
        }
    }
    public function delete ( $codigo )
    {
        //remove o produto
        $stmt = Conexao::getConexao()->prepare( 'DELETE FROM produtos WHERE id = :id');
        $stmt->bindParam(':id', $codigo);
        if ( $stmt->execute() ){
            return true;
        } else {
            return false;
        }
    }
}