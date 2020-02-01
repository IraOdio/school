<div class="current-players">
    <div class="current-season l-current-season">
        <div class="current-season-date-start">Дата начала: <?= $curr[0]['date_start'] ?></div>
        <div class="current_season_name">
            Текущий сезон: <?= $curr[0]['name_season'] ?>
        </div>
        <div class="current-season-date-end">Дата конца: <?= $curr[0]['date_end'] ?></div>
    </div>
    <div class="l-table table">
        <?php foreach ($curr as $key => $item): ?>
        <form action="" method="post" class="table-row">
            <div class="table-col-name">
                <?=$item['name'] ?> <?=$item['family'] ?>
                <input type="hidden" name="player" value="<?=$item['id_player'] ?>">
            </div>
            <div class="table-col-progress">
                <div class="group_progress"><label for="stage1">Этап №1</label>
                    <input name="stage1" id="stage1" type="number" min="0" max="100" value="<?=$item['stage1'] ?>" class="progress"></div>
                <div class="group_progress"> <label for="stage2">Этап №2</label>
                    <input name="stage2" id="stage2" type="number" min="0" max="100" value="<?=$item['stage2'] ?>" class="progress"></div>
                <div class="group_progress">  <label for="stage3">Этап №3</label>
                    <input name="stage3" id="stage3" type="number" min="0" max="100" value="<?=$item['stage3'] ?>" class="progress"></div>
                <div class="group_progress">  <label for="stage4">Этап №4</label>
                    <input name="stage4" id="stage4" type="number" min="0" max="100" value="<?=$item['stage4'] ?>" class="progress"></div>
                <div class="group_progress">  <label for="stage5">Этап №5</label>
                    <input name="stage5" id="stage5" type="number" min="0" max="100" value="<?=$item['stage5'] ?>" class="progress"></div>
                <div class="group_progress">  <label for="stage6">Этап №6</label>
                    <input name="stage6" id="stage6" type="number" min="0" max="100" value="<?=$item['stage6'] ?>" class="progress"></div>
                <div class="group_progress"> <label for="stage7">Этап №7</label>
                    <input name="stage7" id="stage7" type="number" min="0" max="100" value="<?=$item['stage7'] ?>" class="progress"></div>
                <div class="group_progress"> <label for="stage8">Этап №8</label>
                    <input name="stage8" id="stage8" type="number" min="0" max="100" value="<?=$item['stage8'] ?>" class="progress"></div>
                <div class="group_progress"> <label for="stage9">Этап №9</label>
                    <input name="stage9" id="stage9" type="number" min="0" max="100" value="<?=$item['stage9'] ?>" class="progress"></div>
                <div class="group_progress">
                    <button type="submit" name="submit_player" class="progress-submit">Принять</button>
                </div>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
</div>
