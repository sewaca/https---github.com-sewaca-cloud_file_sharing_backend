<?php

define('BASE_PATH', ($_ENV['IS_BUILD'] ? '' : '.'));

include_once BASE_PATH."/server/headers.php";
include_once BASE_PATH."/server/definitions.php";
include_once BASE_PATH."/server/vendor/autoload.php";
include_once BASE_PATH."/server/functions/index.php";

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

// ~ ENDPOINTS: 

// ! POST /users/login
endpoint("users/login", "POST");
// ! POST /users/register
endpoint("users/register", "POST");
// ! POST /containers/create
endpoint("containers/create", "POST");

// FIXME: 
endpoint("test");


include BASE_PATH."/server/404.php";
?>