<?php
use Dotenv\Dotenv;
require_once 'vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Loading accepted languages
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$acceptLang = ['fr', 'es', 'en']; 
$lang = in_array($lang, $acceptLang) ? $lang : 'en';
include_once $_ENV['LANG_PATH'] . "/txt_{$lang}.php"; 

require 'template-cv.php';
?>