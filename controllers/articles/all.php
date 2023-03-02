<?php
    
    $articles = getArticles();
    $categories = getCategories();

    $articleAction = null;
    if (isset($_SESSION['article_action'])) {
        $articleAction = $_SESSION['article_action'];
        unset($_SESSION['article_action']);
    }

    $pageTitle = 'Блог';
    $pageContent = template('articles/v_all', [
        'articles' => $articles,
        'categories' => $categories,
        'articleAction' => $articleAction
    ]);

?>