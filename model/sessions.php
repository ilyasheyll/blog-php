<?php

    function generateToken() : string {
        $str = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789';
        $randStr = '';

        for ($i = 0; $i < 32; $i++) {
            $randStr .= $str[mt_rand(0, strlen($str) - 1)];
        }

        return md5($randStr);
    }

    function addSession(int $id, string $token) : bool {
        $sql = "INSERT INTO session (id_user, token) VALUES ($id, '$token')";
        dbQuery($sql);
        return true;
    }
