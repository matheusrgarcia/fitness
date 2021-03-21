<?php

class conexao {

    private static $instance;

    public function getInstance() {
        try
        {
            self::$instance = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS,PDO::NULL_EMPTY_STRING);
            echo 'Conexão MySQL ok<br>';
        }
        catch ( PDOException $e )
        {
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }        

        return self::$instance;
    }

}

