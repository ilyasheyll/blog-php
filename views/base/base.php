<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/reset.css" />
    <title><?=$title?></title>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <h1 class="header__title">
          <a class="header__title-link" href="/">Блог</a>
        </h1>
        <nav class="nav">
          <ul class="nav__list">
            <li class="nav__list-item"><a href="/add">Добавить</a></li>
            <? if ($user === null): ?>
              <li class="nav__list-item"><a href="/login">Войти</a></li>
            <? else: ?>
              <li class="nav__list-item"><a href="/logout">Выйти</a></li>
            <? endif; ?>
          </ul>
        </nav>
        <div class="line header__line"></div>
      </div>
    </header>

    <main class="main">
      <div class="container">
        <?=$content?>
        <div class="line main__line"></div>
      </div>
    </main>

    <footer class="footer">
      <div class="container">
        <p class="footer__content">(c) 2023 Blog</p>
      </div>
    </footer>
  </body>
</html>
