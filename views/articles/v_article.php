<section class="one-article">
    <div class="one-article">
        <h2 class="article__title"><?=$article['title']?></h2>
        <p class="article__content"><?=$article['min_descr']?></p>
        <p class="article__text"><?=$article['descr']?></p>
        <p class="article__author"><span>Автор статьи: </span><?=$article['login']?></p>
        <p class="articles-item__date"><?=$article['dt_add']?></p>
    </div>
    <? if ($articleRights): ?>
        <div class="article-rights">
            <p><a href="/article/<?=$article['id_article']?>?action=update">Редактировать</a></p>
            <p><a href="/article/<?=$article['id_article']?>?action=delete">Удалить</a></p>
        </div>
    <? endif; ?>
</section>