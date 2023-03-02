<section class="category-articles">
  <h2 class="title category-articles__title">Категория: <?=$categoryName?></h2>
  <? if ($access): ?>
    <? foreach ($articles as $article): ?>
    <div class="article">
      <h2 class="article__title"><?=$article['title'] ?></h2>
      <p class="article__content"><?=$article['min_descr'] ?></p>
      <p class="article__date"><?=$article['dt_add'] ?></p>
      <a href="/article/<?=$article['id_article']?>" class="article__link">Читать</a>
    </div>
    <? endforeach; ?>
  <? else: ?>
    <p>В данной категории не опубликовано ни одной статьи!</p>
    <p><a href="/">Вернуться на главную</a></p>
  <? endif; ?>

</section>