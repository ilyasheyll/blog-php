<?php

    if ($user === null) {
        header('Location: /login');
        exit;
    }

    $categories = getCategories();

    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fields = extractFields($_POST, ['title', 'min_descr', 'id_category', 'descr']);

        $errors = validateFormArticle($fields);

        if (empty($errors)) {
            $fields['title'] = htmlspecialchars($fields['title']);
            $fields['min_descr'] = htmlspecialchars($fields['min_descr']);
            $fields['descr'] = htmlspecialchars($fields['descr']);

            $fields['id_user'] = $user['id_user'];

            addArticle($fields);
            $_SESSION['article_action'] = 'add';
            header('Location: /');
            exit;
        }
    } else {
        $fields = ['title' => '', 'min_descr' => '', 'descr' => ''];
    }


    $pageTitle = 'Добавление статьи';
    $pageContent = template('articles/v_form', [
        'categories' => $categories,
        'fields' => $fields,
        'err' => $errors
    ]);

?>