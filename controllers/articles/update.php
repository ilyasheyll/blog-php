<?php

    $categories = getCategories();
    $fields = extractFields($article, ['title', 'id_category', 'min_descr', 'descr']);

    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fields = extractFields($_POST, ['title', 'min_descr', 'id_category', 'descr']);

        $errors = validateFormArticle($fields);

        if (empty($errors)) {
            $fields['title'] = htmlspecialchars($fields['title']);
            $fields['min_descr'] = htmlspecialchars($fields['min_descr']);
            $fields['descr'] = htmlspecialchars($fields['descr']);

            $fields['id_user'] = $user['id_user'];
            $fields['id_article'] = $id;

            updateArticle($fields);
            $_SESSION['article_action'] = 'update';
            header('Location: /');
            exit;
        }
    }

    $pageTitle = 'Обновление статьи';
    $pageContent = template('articles/v_form', [
        'categories' => $categories,
        'fields' => $fields,
        'err' => $errors
    ]);

?>