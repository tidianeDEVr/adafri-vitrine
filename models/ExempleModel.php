<?php
namespace ism\models;
use ism\lib\AbstractModel;
class AnnuaireModel extends AbstractModel{

    public function __construct() {
        parent::__construct();
        $this->tableName = "annuaires";
        $this->primaryKey = "ID";
    }
    public function selectAll():array {
        $sql="SELECT * FROM annuaires";
        $result=$this->selectBy($sql);
        return $result["data"];
    }
    public function selectAnnuaireWhat($what):array {
        $sql="SELECT * FROM annuaires WHERE NOM LIKE %$what%";
        $result=$this->selectBy($sql);
        return $result["data"];
    }
    
    // public function selectById(int $id):array{
    //     $sql="SELECT * FROM annuaires a, propietaire p WHERE b.proprietaire_id=p.id_proprietaire  AND b.id_bien=?";
    //     $result=$this->selectBy($sql,[$id],true);
    //     return $result["data"];
    // }
}