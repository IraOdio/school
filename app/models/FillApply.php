<?php


namespace app\models;


use vendor\core\Model;

class FillApply extends Model
{
    public $table = "user";
    public $pk = "id_user";
    public $fields = [
        "name" => "name",
        "family" => "family",
        "age" => "age",
        "skills" => "skills",
        "self" => "self",
        "email" => "email"
    ];

//    public function __construct()
//    {
//        parent::__construct();
//    }
    public function lastId()
    {
       $sql = "select max(`{$this->pk}`) from `{$this->table}`";
       //echo $sql;
       $result = $this->pdo->query($sql);
       $result = $result[0]['max(`id_user`)'];
       return $result;
    }

    public function insert($fields_v)
    {
        $table = $this->table;
        $fields = $this->fields;
        $sql = "INSERT INTO `{$table}` (`{$fields['name']}`,`{$fields['family']}`,`{$fields['age']}`,`{$fields['skills']}`,`{$fields['self']}`,`{$fields['email']}`) values ({$fields_v['name']},{$fields_v['family']},{$fields_v['age']},{$fields_v['skills']},{$fields_v['self']},{$fields_v['email']})";
        //echo $sql;
        return $this->query($sql);
        //return $this->pdo->query($sql);
    }
}