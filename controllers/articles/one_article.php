<?php 
    $id = (int)(URL_PARAMS['id']);
    $article = getOneArticle($id);

    if (!$article) {
        $pageTitle = 'Ошибка 404';
        $pageContent = template('errors/v_404');
    } else {
        $articleRights = false;
        if ($user !== null && $user['login'] === $article['login']) {
            $articleRights = true;
        }

        $pageTitle = $article['title'];
        $pageContent = template('articles/v_article', [
            'article' => $article,
            'articleRights' => $articleRights
        ]);
        
        if (isset($_GET['action'])) {
            if ($user !== null && $user['login'] === $article['login']) {
                if ($_GET['action'] === 'delete') {
                    include_once('controllers/articles/delete.php');
                }
        
                if ($_GET['action'] === 'update') {
                    include_once('controllers/articles/update.php');
                }
            }
        } 
    }

    
?>