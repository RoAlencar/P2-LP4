<?php

namespace App\Db;

use \PDO;

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
}