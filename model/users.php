<?php

    function getIdUserByLogin(string $login) : ?array {
        $sql = "SELECT id_user FROM users WHERE login = '$login'";
        $userId = dbQuery($sql)->fetch();

        return $userId === false ? null : $userId;
    }

    function getUserByLogin(string $login) : ?array {
        $sql = "SELECT * FROM users WHERE login = :login";
        $user = dbQuery($sql, ['login' => $login])->fetch();

        return $user === false ? null : $user;
    }

    function getUserByToken(string $token) : ?array {
        $sql = "SELECT users.id_user, login, password, token 
            FROM users INNER JOIN session ON users.id_user = session.id_user
            WHERE token like :token";
        $user = dbQuery($sql, ['token' => $token])->fetch();

        return $user === false ? null : $user;
    }

    function validateFormRegister(array $fields) : array {
        $err = [];

        if (strlen($fields['login']) < 5) {
            $err[] = 'Логин должен быть больше 5 символов';
        }

        if (strlen($fields['password']) < 8) {
            $err[] = 'Пароль должен быть более 8 символов';
        }
        
        $user = getIdUserByLogin($fields['login']);
        if ($user !== null) {
            $err[] = 'Данный логин занят другим пользователем';
        }

        return $err;
    }

    function registerUser(array $fields) : bool {
        $sql = "INSERT INTO users (login, password) VALUES (:login, :password)";
        dbQuery($sql, $fields);
        return true;
    }