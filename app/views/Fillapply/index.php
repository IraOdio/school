<div class="l-FillApply-page FillApply-page">
    <div class="l-FA-Form FA-Form">
        <div class="FA-Form-title">Заполнить заявку</div>
        <form action="<?= $this->route['controller'] ?>/processing" method="get" class="Form">
            <div class="Form-col">
                <div class="Form-subcol">
                    <label class="l-Form-Label Form-Label" for="FA-Name">Имя</label>
                    <input id="FA-Name" name="FA-Name" class="l-Form-Control Form-Control" type="text" required>
                </div>
                <div class="Form-subcol">
                    <label class="l-Form-Label Form-Label" for="FA-Family">Фамилия</label>
                    <input id="FA-Family" name="FA-Family" class="l-Form-Control Form-Control" type="text" required>
                </div>
                <div class="Form-subcol">
                    <label class="l-Form-Label Form-Label" for="FA-Age">Возраст</label>
                    <input id="FA-Age" name="FA-Age" class="l-Form-Control Form-Control" type="text" required>
                </div>
                <div class="Form-subcol">
                    <label class="l-Form-Label Form-Label" for="FA-Email">Email</label>
                    <input id="FA-Email" name="FA-Email" class="l-Form-Control Form-Control" type="email" required>
                </div>
            </div>
            <div class="Form-col">
                <div class="Form-subcol">
                    <label class="l-Form-Label Form-Label" for="FA-Skill">Навыки</label>
                    <textarea id="FA-Skill" name="FA-Skill" class="l-Form-Control Form-Control"></textarea>
                </div>
                <div class="Form-subcol">
                    <label class="l-Form-Label Form-Label" for="FA-Self">О Себе</label>
                    <textarea id="FA-Self" name="FA-Self" class="Form-Control"></textarea>
                </div>
                <div class="Form-subcol">
                    <button id="FA-Submit" name="FA-Submit" value="FA-Submitted" class="Form-ControlButton Form-ControlButton-hover" type="submit">Отправить</button>
                </div>
            </div>
        </form>
    </div>
</div>