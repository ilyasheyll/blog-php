<?php 

    function getCategories() : array {
        $sql = 'SELECT * FROM category';
        return dbQuery($sql)->fetchAll();
    }

    function getOneCategory(int $id) : ?array {
        $sql = "SELECT * FROM category WHERE id_category = :id";
        $category = dbQuery($sql, ['id' => $id])->fetch();

        return $category === false ? null : $category;
    }

    function validateFormArticle(array $fields) : array {
        $err = [];

        if (strlen($fields['title']) < 5) {
            $err[] = 'Заголовок не менее 5 символов';
        }

        if (strlen($fields['min_descr']) < 10) {
            $err[] = 'Минимальное описание не менее 10 символов';
        }

        if (strlen($fields['descr']) < 20) {
            $err[] = 'Текст статьи не менее 20 символов';
        }

        return $err;
    }

    function addArticle(array $fields) : bool {
        $sql = "INSERT INTO articles (title, id_category, descr, id_user, min_descr) VALUES (:title, :id_category, :descr, :id_user, :min_descr)";
        dbQuery($sql, $fields);
        return true;
    }

    function getArticles() : array {
        $sql = "SELECT * FROM articles ORDER BY dt_add DESC";
        return dbQuery($sql)->fetchAll();
    }

    function getOneArticle(int $id) {
        $sql = "SELECT id_article, articles.id_category, name, login, title, min_descr, descr, dt_add 
            FROM users INNER JOIN (category INNER JOIN articles ON category.id_category = articles.id_category) 
            ON users.id_user = articles.id_user
            WHERE id_article = :id";
        return dbQuery($sql, ['id' => $id])->fetch();
    }

    function getArticlesByCategory(int $id) : ?array {
        $sql = "SELECT * FROM articles WHERE id_category = :id ORDER BY dt_add DESC";
        $articles = dbQuery($sql, ['id' => $id])->fetchAll();

        return count($articles) === 0 ? null : $articles;
    }

    function deleteArticle(int $id) : bool {
        $sql = "DELETE FROM articles WHERE id_article = :id";
        dbQuery($sql, ['id' => $id]);
        return true;
    }

    function updateArticle(array $fields) : bool {
        $sql = "UPDATE articles SET id_category=:id_category, id_user=:id_user, title=:title,
                min_descr=:min_descr, descr=:descr
                WHERE id_article = :id_article";
        dbQuery($sql, $fields);
        return true;
    }

?>