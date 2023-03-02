<?php

// const HOST = 'http://localhost';
// const BASE_URL = '/8-done/';

const DB_HOST = 'localhost';
const DB_NAME = 'blog';
const DB_USER = 'root';
const DB_PASS = '';

include_once('core/db.php');
include_once('core/system.php');

include_once('model/articles.php');
include_once('model/sessions.php');
include_once('model/users.php');
