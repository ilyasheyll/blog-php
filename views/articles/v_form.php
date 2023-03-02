<section class="add-article">
  <div class="title add-article__title">Добавление статьи</div>
  <form action="" method="post" class="form add-article__form">
    <div class="input-block">
      <div class="input__label-block">
        <label for="title">Заголовок статьи</label>
      </div>
      <input type="text" name="title" value="<?=$fields['title']?>" maxlength="100" id="" class="form__input" required />
    </div>

    <div class="input-block">
      <div class="input__label-block">
        <label for="category">Выберите категорию</label>
      </div>
      <select name="id_category" id="" class="form__select" required>

        <? foreach ($categories as $category): ?>
          <? if ($category['id_category'] == $fields['id_category']): ?>
            <option value="<?=$category['id_category']?>" class="select__option" selected>
              <?=$category['name'] ?>
            </option>
          <? else: ?>
            <option value="<?=$category['id_category']?>" class="select__option">
              <?=$category['name'] ?>
            </option>
          <? endif; ?>
        <? endforeach; ?>
        
      </select>
    </div>

    <div class="input-block">
      <div class="input__label-block">
        <label for="min_descr">Небольшое описание</label>
      </div>
      <textarea name="min_descr" id="" maxlength="150" cols="30" class="form__textarea" required><?=$fields['min_descr']?></textarea>
    </div>

    <div class="input-block">
      <div class="input__label-block">
        <label for="content">Текст статьи</label>
      </div>
      <textarea name="descr" id="" cols="30" rows="10" class="form__textarea" required><?=$fields['descr']?></textarea>
    </div>

    <div class="input-block">
      <button type="submit" class="input__button">Отправить</button>
    </div>
  </form>

  <? if (!empty($err)): ?>
    <div class="errors">
      <? foreach ($err as $error): ?>
        <p><?=$error?></p>
      <? endforeach; ?>
    </div>
  <? endif; ?>
</section>