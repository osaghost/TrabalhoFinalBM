<?php

namespace Source\App\Model\Entity;

use \Source\App\Db\Database;
use \PDO;

class Time{
    /**
     * Identificador unico do cadastro
     */
    public $id;

    public $name;

    public $contact;

    public $modality;

    public $gender;

    public $state;

    public $city;
    
    /**
     * Método responsável por cadastrar os times no banco de dados
     */
    public function cadastrar(){
        //Inserir o time no banco
        $obDatabase = new Database('teams');
        $this->id = $obDatabase->insert([
                                        'team_name' => $this->name,
                                        'contact' => $this->contact,
                                        'modality' => $this->modality,
                                        'gender' => $this->gender,
                                        'state' => $this->state,
                                        'city' => $this->city  
                                    ]);
                                    
        //retornar sucesso
        return true;
        
    }

    /**
     * Método responsável por obter os times do banco de dados
     */
    public static function getTime($where = '',$order = '',$limit = ''){
        return (new Database('teams'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}