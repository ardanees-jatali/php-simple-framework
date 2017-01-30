<?php
require_once 'Session.class.php';
$DB_HOST ="127.0.0.1";
$DB_USER = "root";
$DB_PASS = "azmat";
$DB_NAME = "php_level02";

$BASE_URL = "http://localhost/php/php/2017/sfw";
$BASE_PATH = "/home/virgo/MyDisk/virgo/public_html/php/php/2017/sfw";


require_once 'Database.class.php';
require_once 'Helper.class.php';

$db = new Database($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$helper = new Helper();
$session = new Session();

?>
