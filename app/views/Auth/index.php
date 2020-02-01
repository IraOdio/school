<div class="auth_wrapper">
    <form class="auth_form" method="post">
        <div class="auth_form_input">
            <div class="label">Логин:</div> <input type="text" name="user"/></div>
        <div class="auth_form_input"> <div class="label">Пароль:</div> <input type="password" name="pass"/></div>
        <div class="auth_form_input"><input type="submit" name="submitAuth" value="Войти"/></div>
        <?php if(isset($text)) echo $text; ?>
    </form>
</div>
<style>
#content{
   background-color: ghostwhite;
}
</style>