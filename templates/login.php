<?php $this->layout('template') ?>
<?php $this->title = 'Вход на сайт' ?>
<h1>Вход на сайт</h1>
<?php $this->start('content') ?>
<h1>Вход на сайт</h1>
<h1>вход</h1>
<form action="" method="POST">
Логин: <input type="text" name="login" />
Пароль: <input type="password" name="password" />
<input type="submit" value="Войти" />
</form>
<?php $this->end()?>