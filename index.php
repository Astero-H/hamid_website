<?php
use Dotenv\Dotenv;
require_once 'vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

switch ($lang) {
    case 'fr': 
        include $_ENV['LANG_PATH']. '/txt_fr.php';
        break;
    case 'en': 
        include $_ENV['LANG_PATH']. '/txt_en.php';
        break;
    case 'es': 
        include $_ENV['LANG_PATH']. '/txt_es.php';
        break;
    default: 
        include $_ENV['LANG_PATH']. '/txt_en.php';
        break;
}
require 'template-cv.php';
?>