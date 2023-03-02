<?php

    if ($user !== null) {
        header('Location: /');
        exit;
    }
    
    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fields = extractFields($_POST, ['login', 'password']);

        $errors = validateFormRegister($fields);

        if (empty($errors)) {
            $fields['login'] = htmlspecialchars($fields['login']);
            $fields['password'] = password_hash($fields['password'], PASSWORD_BCRYPT);
            registerUser($fields);

            $userId = (int)(getIdUserByLogin($fields['login'])['id_user']);
            $token = generateToken();
            addSession($userId, $token);

            setcookie('token', $token, time()+60*60*24*30);
            header('Location: /');
            exit;
        }
    }

    $pageTitle = 'Регистрация';
    $pageContent = template('auth/register', [
        'err' => $errors
    ]);

?>