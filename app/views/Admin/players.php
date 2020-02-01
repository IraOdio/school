<div class="table-player">
    <div class="table-player-title">
        Новые заявки
    </div>
    <div class="table-player-row main-row">
        <div class="table-player-col">Имя и фамилия</div>
        <div class="table-player-col">Возраст</div>
        <div class="table-player-col">Навыки</div>
        <div class="table-player-col">О себе</div>
        <div class="table-player-col">Почта e-mail</div>
    </div>
    <?php foreach ($result as $item): ?>
        <div class="table-player-row">
            <div class="table-player-col"><?= $item['name'] . " {$item['family']}" ?></div>
            <div class="table-player-col"><?= $item['age'] ?></div>
            <div class="table-player-col"><?= $item['skills'] ?></div>
            <div class="table-player-col"><?= $item['self'] ?></div>
            <div class="table-player-col"><?= $item['email'] ?></div>
            <form class="table-player-submit" action="" method="POST">
                <input name="newplayer_id" type="hidden" value="<?= $item['id_player'] ?>">
                <button name="submit_newplayer" class="submit_newplayer" type="submit">Принять</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>