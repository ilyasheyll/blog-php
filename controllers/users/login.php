<?php 

    if ($user !== null) {
        header('Location: /');
        exit;
    }
    
    $err = false;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $err = true;
        $fields = extractFields($_POST, ['login', 'password']);

        if ($fields['login'] !== '' && $fields['password'] !== '') {
            $user = getUserByLogin($fields['login']);

            if ($user !== false && password_verify($fields['password'], $user['password'])) {
                $token = generateToken();
                addSession($user['id_user'], $token);
                setcookie('token', $token, time()+60*60*24*30);

                header('Location: /');
                exit;
            }
        }
    }

    $pageTitle = 'Авторизация';
    $pageContent = template('auth/login', [
        'err' => $err
    ]);

?>