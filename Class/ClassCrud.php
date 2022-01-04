<?php

include("../Class/ClassConexao.php");

class ClassCrud extends ClassConexao
{
    private $Crud;
    private $Contador;

    public function preparedStatements($Query, $Parametros)
    {
        $this->countParamentros($Parametros);
        $this->Crud = $this->conectaDB()->prepare($Query);
        if ($this->Contador > 0) {
            for ($i = 1; $i <= $this->Contador; $i++) {
                $this->Crud->bindValue($i, $Parametros[$i - 1]);
            }
        }

        $this->Crud->execute();
    }


    #Contador de paramentros
    private function countParamentros($Parametros)
    {
        $this->Contador = count($Parametros);
    }

    #Insercao BD
    public function insertDB($tabela, $condicao, $Parametros)
    {
        $this->preparedStatements("INSERT INTO {$tabela} VALUES ({$condicao})", $Parametros);
        return $this->Crud;
    }

    #Selecao BD
    public function selectDB($campos, $tabela, $condicao, $Parametros)
    {
        $this->preparedStatements("SELECT {$campos} FROM {$tabela} {$condicao}", $Parametros);
        return $this->Crud;
    }

    #Deletar Dados no DB
    public function deleteDB($tabela, $condicao, $Parametros)
    {
        $this->preparedStatements("DELETE FROM {$tabela} where {$condicao}", $Parametros);
        return $this->Crud;
    }


    #Update Dados no DB
    public function updateDB($tabela, $set, $condicao, $Parametros)
    {
        //$this->preparedStatements("UPDATE marca set nome='Gol' WHERE id=10", $Parametros);
        $this->preparedStatements("UPDATE {$tabela} set {$set} WHERE {$condicao}", $Parametros);
        return $this->Crud;
    }
}
