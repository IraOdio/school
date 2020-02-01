<?php


namespace app\models;


use vendor\core\Model;

class Admin extends Model
{
    public $table = 'users';

    public function complexF($idplayer){
        $this->insertRow($idplayer);
        $this->updatePlayer($idplayer);
        return true;
    }
    public function insertRow($idplayer){
        $sql = "INSERT INTO seasons (id_season,id_player) values (3,{$idplayer})";
        //echo $sql;
        return $this->query($sql);
    }

    public function updatePlayer($idplayer){
        $sql = "UPDATE player SET active = 1 where id_player = {$idplayer}";
        return $this->query($sql);
    }

    public function getNotActivePlayers(){
        $sql = "Select * from user,player where user.id_user = player.id_user and player.active = 0";
        return $this->pdo->query($sql);
    }
    public function findFull()
    {
        $sql = "Select name_season,`date_start`,`date_end`,`player`.*,`user`.`name`,`user`.`family` from `seasons` inner join `season` on `seasons`.`id_season` = `season`.`id_season` inner join `player` on `seasons`.`id_player` = `player`.`id_player` inner join `user` on `player`.`id_user` = `user`.`id_user`";
        return $this->pdo->query($sql);
    }
}