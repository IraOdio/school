<?php


namespace app\models;


use vendor\core\Model;

class Player extends Model
{
    public $table = 'player';
    public $pk = 'id_player';
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($fields){
        $table = $this->table;
        $sql = "INSERT INTO `{$table}` (`id_user`) values ({$fields['id_user']})";
        return $this->query($sql);
    }

    public function fullUpdate($fields,$id){
        $table = $this->table;
        $pk = $this->pk;
        $sql = "UPDATE `{$table}` SET ";
        foreach ($fields as $key => $item){
            $separator =",";
            if($key=="stage9"){
                $separator ="";
            }
            $sql .= ` stage `.$key."=".$item.$separator." ";
        }
        $sql .=" where {$this->pk} = ".$id;
        return $this->query($sql);
        //pp($sql);
    }
}