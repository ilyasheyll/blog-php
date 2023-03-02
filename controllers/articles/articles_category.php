<?php 

    $categoryId = (int)(URL_PARAMS['id']);

    $category = getOneCategory($categoryId);

    if ($category === null) {
        include_once('controllers/errors/e404.php');
    } else {
        $articles = getArticlesByCategory($categoryId);
        $access = $articles !== null ? true : false;

        $categoryName = $category['name'];
        $pageTitle = $categoryName;
        $pageContent = template('articles/v_category_articles', [
            'access' => $access,
            'articles' => $articles,
            'categoryName' => $categoryName
        ]);
    }

?>