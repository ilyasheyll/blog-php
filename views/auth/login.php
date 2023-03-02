<section class="login">
<h2 class="login__title">Вход в аккаунт</h2>
    <form action="" method="post" class="form add-article__form">
        <div class="input-block">
            <div class="input__label-block">
            <label for="title">Логин</label>
            </div>
            <input type="text" name="login" id="" class="form__input" />
        </div>

        <div class="input-block">
            <div class="input__label-block">
            <label for="title">Пароль</label>
            </div>
            <input type="password" name="password" id="" class="form__input" />
        </div>

        <div class="register-user">
            <p>Нет аккаунта? <a href="/register">Регистрация</a></p>
        </div>

        <div class="input-block">
            <button type="submit" class="input__button">Войти</button>
        </div>
    </form>

    <? if ($err): ?>
        <p>Неправильное имя пользователя или пароль!</p>
    <? endif; ?>
</section>