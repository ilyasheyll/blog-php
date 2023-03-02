<section class="register">
<h2 class="login__title">Регистрация</h2>
<form action="" method="post" class="form add-article__form">
<div class="input-block">
    <div class="input__label-block">
    <label for="title">Логин</label>
    </div>
    <input type="text" name="login" maxlength="50" id="" class="form__input" />
</div>

<div class="input-block">
    <div class="input__label-block">
    <label for="title">Пароль</label>
    </div>
    <input type="password" name="password" id="" class="form__input" />
</div>

<div class="input-block">
    <button type="submit" class="input__button">Регистрация</button>
</div>
</form>
<div class="errors">
    <? foreach ($err as $error): ?>
        <p><?=$error?></p>
    <? endforeach; ?>
</div>
</section>