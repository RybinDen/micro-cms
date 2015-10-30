<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="keywords" content="Ваши ключевые слова до 1000 знаков для поиска сайта в интернете">
<meta name="description" content="Краткое описание сайта до 200 знаков, отображается как фрагмент текста в результате поиска">
<title><?=$this->e($title)?></title>
<link rel="stylesheet" type="text/css" href="media/style.css">
</head>
<body>

<?=$this->errors?>
<?=$this->message?>
<nav role="navigation" aria-labelledby="title-nav" title="главное меню">
<h1 id="title-nav">Главное меню</h1>
<?= $this->uri('/', 'Главная', '<a href="/">Главная</a>')?>
<?=$this->uri('/about', 'О нас', '<a href="about">О нас</a>')?>
<?=$this->uri('/login', 'Вход', '<a href="login">Вход</a>')?>
<?=$this->uri('/forum', 'Форум', '<a href="forum">dforum</a>')?>
<?=$this->uri('/shop', 'Магазин', '<a href="shop">Магазин</a>')?>
<?=$this->uri('/user', 'Профиль', '<a href="user">Профиль</a>')?>
<?=$this->uri('/contacts', 'Контакты', '<a href="contacts">Контакты</a>')?>
</nav>

<main role="main">
<?= $this->section('content')?>
</main>
<div role="complementary" title="мои дополнения">
<?= $this->section('menu') ?>
</div>
<? $this->insert('footer') ?>
<p> время: <?= round((microtime(1) - LARAVEL_START), 3) ?> </p>
  <p> память: <?= memory_get_usage () ?> </p>