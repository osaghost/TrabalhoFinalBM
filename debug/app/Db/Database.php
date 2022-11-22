<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database{

    /**
     * HOST DE CONEXÃO COM O BANCO DE DADOS
     */
    const HOST = '127.0.0.1';

    /**
     * NOME DO BANCO DE DADOS
     */
    const NAME = 'bd-sql';
    
    /**
     * USUÁRIO DO BANCO DE DADOS
     */
    const USER = 'root';

    const PASS = '';

    /**
     * NOME DA TABELA A SER MANIPULADA
     */
    private $table;

    /**
     * INSTANCIA DE CONEXÃO COM BANCO DE DADOS
     * PDO
     */
    private $connection;

    /**
     * Define a tabela e instancia a conexao
     */
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

    /**
     * Método responsável por criar uma conexão com o banco de dados
     */
    private function setConnection(){
        try {
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR' . $e->getMessage());
        }
    }

    /**
     * Método responsável por executar queries dentro doo banco de dados
     */
    public function execute($query,$params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die('ERROR' . $e->getMessage());
        }
    }



    /**
     * Método responsável por inserir dados no banco
     */
    public function insert($values){
        //DADOS DA QUERY
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');
        
        //MONTA A QUERY
        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
       
        //EXECUTA O INSERT
        $this->execute($query,array_values($values));

        return $this->connection->lastInsertId();
    }

       
  
    /**
     * Método responsável por realizar uma consulta no banco de dados
     */
   
    public function select($where = '',$order = '',$limit = '', $fields = '*'){
      
        //DADOS DA QUERY
        if($where = strlen($where)){
            $where = 'WHERE';
        }else{
            $where = '';
        }
        if($order = strlen($order)){
            $order = 'ORDER BY';
        }else{
            $order = '';
        }
        if($limit = strlen($limit)){
            $limit = 'LIMIT';
        }else{
            $limit = '';
        }
       
        //MONTA A QUERY
        $query = 'SELECT '.$fields. 'FROM ' .$this->table.' '.$where.' '.$order.' '.$limit;
        
        //EXECUTA A QUERY
        return $this->execute($query);
        
        
    }
}  /**
       * 
       *   $pdo = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);          
       *   $pdo->setAtribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
*
       *   $sql = $pdo->prepare("SELECT * FROM teams");
       *   $sql->execute();
*
       *   $fetchTeams = $sql->fetchAll();
       *   $fields = array_keys($values);
       *   $binds = array_pad([],count($fields),'?');  
*
       *   foreach ($fetchTeams as $key => $value) {
       *      */
          