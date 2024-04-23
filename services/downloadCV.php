<?php 
require_once '../bootstrap.php';

$file = $lang === 'fr' ? $_ENV['CV_FR_FILE'] : $_ENV['CV_ENG_FILE'];
$path = $_ENV['CV_PATH'];

if(preg_match('/^[^.][-a-z0-9_.]+[a-z]$/i', $file)){
    $filepath = '../'.$path ."/". $file;
    // Process téléchargement
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush();
        readfile($filepath);
        die();
    } else {
        http_response_code(404);
        die();
    }
} else {
    die("Invalid file name!");
}