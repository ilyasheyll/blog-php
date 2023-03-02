<? if ($articleAction !== null): ?>
  <? if ($articleAction === 'update'): ?>
    <div class="alert">Ваша статья успешно отредактирована!</div>
  <? elseif ($articleAction === 'delete'): ?>
    <div class="alert">Ваша статья успешно удалена!</div>
  <? elseif ($articleAction === 'add'): ?>
    <div class="alert">Ваша статья успешно добавлена!</div>
  <? endif; ?>
<? endif; ?>

<section class="categories">
  <div class="categories-block">
    <p class="categories-title">Список категорий</p>
    <ul class="categories-list">
      
      <? foreach ($categories as $category): ?>
        <li class="categories-name">
          <a href="/category/<?=$category['id_category']?>"><?=$category['name']?></a>
        </li>
      <? endforeach; ?>
      
    </ul>
  </div>
</section>

<section class="articles">

  <? foreach ($articles as $article): ?>
    <div class="articles-item">
      <h2 class="articles-item__title"><?=$article['title'] ?></h2>
      <p class="articles-item__content"><?=$article['min_descr'] ?></p>
      <p class="article__date"><?=$article['dt_add'] ?></p>
      <a href="/article/<?=$article['id_article']?>" class="article__link">Читать</a>
    </div>
  <? endforeach; ?>

</section>

