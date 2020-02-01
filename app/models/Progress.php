<?php


namespace app\models;


use vendor\core\Model;

class Progress extends Model
{
    public $table = "seasons";
    public $pk = "id_note";

    public function findFull()
    {
        $sql = "Select name_season,`date_start`,`date_end`,`player`.*,`user`.`name`,`user`.`family` from `seasons` inner join `season` on `seasons`.`id_season` = `season`.`id_season` inner join `player` on `seasons`.`id_player` = `player`.`id_player` inner join `user` on `player`.`id_user` = `user`.`id_user`";
        return $this->pdo->query($sql);
    }
}