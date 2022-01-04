<?php

//Conexão com Banco de Dados
 class ClassConexao
{
    public function conectaDB()
    {
        try {
            $con=new PDO("mysql:host=localhost;dbname=crudpdo","root", "");
            return $con;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
