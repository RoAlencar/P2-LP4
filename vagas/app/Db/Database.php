<?php

namespace App\Db;

use Exception;
use \PDO;
use PDOException;

class Database{

    /**
     * Host de conexão com o banco de dados
     * @var string
     */
    const HOST = 'localhost';

    /**
     * Nome do banco de dados
     * @var string
     */
    const NAME = 'P2_LP4';

    /**
     * Usuário do banco
     */
    const USER = 'admin';

    /**
     * Senha de acesso ao banco de dados
     * @var string
     */
    const PASS = 'admin';


    /**
     * Nome da table a ser manipulada
     * @var string
     */
    private $table;

    /**
     *Instancia de conexão com o banco de dado
     *@var PDO 
     */
    private $connection;

    /**
     * Define a tabela e instancia a conexão
     * @param string $table
     */
    public function __construct($table=null){
        $this->table =$table;
        $this->setConnection();
    }
    
    /**
     * Método responsável por criar uma conexão com o banco de dados
     */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            //Lançar exception caso ocorra algo inesperado
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

}