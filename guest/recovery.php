<? top('Восстановление пароля') ?>

<h1>Восстановление пароля</h1>

<form onsubmit="return false">
<p><input type="text" placeholder="E-mail" id="email"></p>
<p><input type="text" placeholder="<?captcha()?>" id="captcha"></p>
<p><button onclick="post_query('gform', 'recovery', 'email.captcha')">Восстановить</button></p>
</form>

<? bottom() ?>