<?php

define('ADMIN_PATH', dirname(__FILE__));
define('PROJECT_PATH', dirname(ADMIN_PATH));
define('INCLUDES_PATH', PROJECT_PATH . '/includes');
define('HTML_PATH', PROJECT_PATH . '/html');

$protocol = $_SERVER['HTTPS'] == '' ? 'http://' : 'https://';
define('WEB_ROOT', $protocol . $_SERVER['HTTP_HOST'].'/comp0016-web');
define('WEB_HTML', WEB_ROOT . '/html');
define('WEB_CSS', WEB_ROOT . '/css');