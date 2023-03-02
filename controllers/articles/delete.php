<?php 

    deleteArticle($id);
    $_SESSION['article_action'] = 'delete';
    header('Location: /');
    exit;

?>