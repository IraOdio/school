<div class="l-Progress-page Progress-page">
    <div class="Progress-page-title">На данной странице вы можете наблюдать прогресс участников текущего и прошлого
        сезона.
    </div>
    <div class="l-Progress-Slider Progress-Slider">
        <div class="PS-Row">
            <div class="PS-Col">
                <div class="JS-Data-Start-Show PS-Data">Дата начала:  <?=$curr[0]['date_start'] ?></div>
            </div>
            <div class="PS-Col">
                <div class="JS-Season-Show PS-Season">
                    Текущий (<?=$curr[0]['name_season'] ?>) сезон:
                </div>
            </div>
            <div class="PS-Col">
                <div class="JS-Data-End-Show PS-Data">Дата окончания:  <?=$curr[0]['date_end'] ?></div>
            </div>
        </div>
        <div class="PS-Row">
            <div class="PS-Col">
                <div class="Description-Course">
                    <div class="DC-Title">Front-end</div>
                    Этап №1 - Основы HTML & CSS <br>
                    Этап №2 - Препроцессоры SASS & LESS <br>
                    Этап №3 - Дополнительные библиотеки для верстки
                    (Bootstrap, Foundation, Skeleton и т.д.) <br>
                    Этап №4 - Основы нативного JavaScript <br>
                    Этап №5 - Дополнительные библиотеки (JQuery,
                    JQuery UI и т.д.) и их актуальность.
                </div>
                <button id="SlideSwapLeft" class="SlideSwap"><img src="images/arrowLeft.png" alt=""></button>
            </div>
            <div class="PS-Col">
                <div class="JS-PS-Slide PS-Slide PS-Slide-Hide ">
                    <?php foreach($pred as $key => $item): ?>
                    <div class="PS-Slide-Element">
                        <div class="PS-Slide-Row-Main">
                            <div class="PS-Slide-Row-Main-Title">
                                №<?= $item['id_player'] ?> <?= $item['name'] ?> <?=$item['family'] ?>
                            </div>
                            <div class="JS-PS-Slide-Row-Main-Show PS-Slide-Row-Main-Show PS-Slide-Row-Main-Show-hover">(раскрыть)</div>
                        </div>
                        <div class="JS-PS-Slide-Rows-Second-Hide PS-Slide-Rows-Second PS-Slide-Rows-Second-Hide ">
                            <div class="PS-Slide-Row-Second">
                                <div class="PS-Slide-Row-Second-SubRow">
                                    <div class="PS-Slide-Row-Second-Title">Курс: Front-end</div>
                                </div>
                                <div class="PS-Slide-Row-Second-SubRow">
                                    <div class="PS-Slide-Row-Second-SubElement">
                                        <div class="SubElement-Title">Этап №1</div>
                                        <progress class="SubElement-Progress" value="<?=$item['stage1'] ?>" max="100"></progress>
                                    </div>
                                    <div class="PS-Slide-Row-Second-SubElement">
                                        <div class="SubElement-Title">Этап №2</div>
                                        <progress class="SubElement-Progress" value="<?=$item['stage2'] ?>" max="100"></progress>
                                    </div>
                                    <div class="PS-Slide-Row-Second-SubElement">
                                        <div class="SubElement-Title">Этап №3</div>
                                        <progress class="SubElement-Progress" value="<?=$item['stage3'] ?>" max="100"></progress>
                                    </div>
                                    <div class="PS-Slide-Row-Second-SubElement">
                                        <div class="SubElement-Title">Этап №4</div>
                                        <progress class="SubElement-Progress" value="<?=$item['stage4'] ?>" max="100"></progress>
                                    </div>
                                    <div class="PS-Slide-Row-Second-SubElement">
                                        <div class="SubElement-Title">Этап №5</div>
                                        <progress class="SubElement-Progress" value="<?=$item['stage5'] ?>" max="100"></progress>
                                    </div>
                                </div>
                            </div>
                            <div class="PS-Slide-Row-Separator">F & B -> Separator</div>
                            <div class="PS-Slide-Row-Second">
                                <div class="PS-Slide-Row-Second-SubRow">
                                    <div class="PS-Slide-Row-Second-Title">Курс: Back-end</div>
                                </div>
                                <div class="PS-Slide-Row-Second-SubRow">
                                    <div class="PS-Slide-Row-Second-SubElement">
                                        <div class="SubElement-Title">Этап №1</div>
                                        <progress class="SubElement-Progress" value="<?=$item['stage6'] ?>" max="100"></progress>
                                    </div>
                                    <div class="PS-Slide-Row-Second-SubElement">
                                        <div class="SubElement-Title">Этап №2</div>
                                        <progress class="SubElement-Progress" value="<?=$item['stage7'] ?>" max="100"></progress>
                                    </div>
                                    <div class="PS-Slide-Row-Second-SubElement">
                                        <div class="SubElement-Title">Этап №3</div>
                                        <progress class="SubElement-Progress" value="<?=$item['stage8'] ?>" max="100"></progress>
                                    </div>
                                    <div class="PS-Slide-Row-Second-SubElement">
                                        <div class="SubElement-Title">Этап №4</div>
                                        <progress class="SubElement-Progress" value="<?=$item['stage9'] ?>" max="100"></progress>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="JS-Slide-Season-Info">
                        <div class="JS-Data-Start">Дата начала: <?=$pred[0]['date_start'] ?></div>
                        <div class="JS-Season">Предыдущий (<?=$pred[0]['name_season'] ?>) сезон:</div>
                        <div class="JS-Data-End">Дата окончания:  <?=$pred[0]['date_end'] ?></div>
                    </div>
                </div>
                <div class="JS-PS-Slide PS-Slide ">
                    <?php foreach($curr as $key => $item): ?>
                        <div class="PS-Slide-Element">
                            <div class="PS-Slide-Row-Main">
                                <div class="PS-Slide-Row-Main-Title">
                                    №<?= $item['id_player'] ?> <?= $item['name'] ?> <?=$item['family'] ?>
                                </div>
                                <div class="JS-PS-Slide-Row-Main-Show PS-Slide-Row-Main-Show PS-Slide-Row-Main-Show-hover">(раскрыть)</div>
                            </div>
                            <div class="JS-PS-Slide-Rows-Second-Hide PS-Slide-Rows-Second PS-Slide-Rows-Second-Hide ">
                                <div class="PS-Slide-Row-Second">
                                    <div class="PS-Slide-Row-Second-SubRow">
                                        <div class="PS-Slide-Row-Second-Title">Курс: Front-end</div>
                                    </div>
                                    <div class="PS-Slide-Row-Second-SubRow">
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №1</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage1'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №2</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage2'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №3</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage3'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №4</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage4'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №5</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage5'] ?>" max="100"></progress>
                                        </div>
                                    </div>
                                </div>
                                <div class="PS-Slide-Row-Separator">F & B -> Separator</div>
                                <div class="PS-Slide-Row-Second">
                                    <div class="PS-Slide-Row-Second-SubRow">
                                        <div class="PS-Slide-Row-Second-Title">Курс: Back-end</div>
                                    </div>
                                    <div class="PS-Slide-Row-Second-SubRow">
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №1</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage6'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №2</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage7'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №3</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage8'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №4</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage9'] ?>" max="100"></progress>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="JS-Slide-Season-Info">
                        <div class="JS-Data-Start">Дата начала: <?=$curr[0]['date_start'] ?></div>
                        <div class="JS-Season">Текущий (<?=$curr[0]['name_season'] ?>) сезон:</div>
                        <div class="JS-Data-End">Дата окончания:  <?=$curr[0]['date_end'] ?></div>
                    </div>
                </div>
                <div class="JS-PS-Slide PS-Slide PS-Slide-Hide">
                    <?php foreach($next as $key => $item): ?>
                        <div class="PS-Slide-Element">
                            <div class="PS-Slide-Row-Main">
                                <div class="PS-Slide-Row-Main-Title">
                                    №<?= $item['id_player'] ?> <?= $item['name'] ?> <?=$item['family'] ?>
                                </div>
                                <div class="JS-PS-Slide-Row-Main-Show PS-Slide-Row-Main-Show PS-Slide-Row-Main-Show-hover">(раскрыть)</div>
                            </div>
                            <div class="JS-PS-Slide-Rows-Second-Hide PS-Slide-Rows-Second PS-Slide-Rows-Second-Hide ">
                                <div class="PS-Slide-Row-Second">
                                    <div class="PS-Slide-Row-Second-SubRow">
                                        <div class="PS-Slide-Row-Second-Title">Курс: Front-end</div>
                                    </div>
                                    <div class="PS-Slide-Row-Second-SubRow">
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №1</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage1'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №2</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage2'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №3</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage3'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №4</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage4'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №5</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage5'] ?>" max="100"></progress>
                                        </div>
                                    </div>
                                </div>
                                <div class="PS-Slide-Row-Separator">F & B -> Separator</div>
                                <div class="PS-Slide-Row-Second">
                                    <div class="PS-Slide-Row-Second-SubRow">
                                        <div class="PS-Slide-Row-Second-Title">Курс: Back-end</div>
                                    </div>
                                    <div class="PS-Slide-Row-Second-SubRow">
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №1</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage6'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №2</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage7'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №3</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage8'] ?>" max="100"></progress>
                                        </div>
                                        <div class="PS-Slide-Row-Second-SubElement">
                                            <div class="SubElement-Title">Этап №4</div>
                                            <progress class="SubElement-Progress" value="<?=$item['stage9'] ?>" max="100"></progress>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="JS-Slide-Season-Info">
                        <div class="JS-Data-Start">Дата начала: <?=$next[0]['date_start'] ?></div>
                        <div class="JS-Season">Следующий (<?=$next[0]['name_season'] ?>) сезон:</div>
                        <div class="JS-Data-End">Дата окончания:  <?=$next[0]['date_end'] ?></div>
                    </div>
                </div>
            </div>
            <div class="PS-Col">
                <div class="Description-Course">
                    <div class="DC-Title">
                        Back-end
                    </div>
                    Этап №1 - Основы PHP <br>
                    Этап №2 - Современные СУБД и их работа <br>
                    Этап №3 - Организация работы с БД при
                    помощи PHP, вопросы ORM & PDO <br>
                    Этап №4 - PHP-Фреймворки - зачем они нужны
                    и что они решают.
                </div>
                <button id="SlideSwapRight" class="SlideSwap"><img src="images/arrowRight.png" alt=""></button>
            </div>
        </div>
    </div>
</div>
