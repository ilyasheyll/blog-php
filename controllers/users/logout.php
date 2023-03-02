<?php

    setcookie('token', '', time()-60*60*24*30);

    header('Location: /');
    exit;