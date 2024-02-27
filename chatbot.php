<?php 

require_once 'vendor/autoload.php';
require_once 'bootstrap.php';
require_once 'questions.php';


use GuzzleHttp\Client;

$client = new Client();

if(isset($_POST['message'])) {
    foreach ($general as $key => $value) {
        if(strpos($_POST['message'], $key) !== false) {
           echo $value;
           return true;
        }
    }
    $userMessage = $_POST['message'];
    $botResponse = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
        'headers' => [
            'Authorization' => 'Bearer '.$_ENV['OPENAI_API_KEY'],
            'Content-Type' => 'application/json',
        ],
        'json' => [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'Vous êtes maintenant connecté avec un assistant virtuel. Comment puis-je vous aider aujourd\'hui ?'],
                ['role' => 'user', 'content' => $userMessage]
            ],
            'temperature' => 0.7,
            'max_tokens' => 150,
        ],
    ]);

    // Lire et afficher le contenu de la réponse
    $body = $botResponse->getBody();
    $contents = $body->getContents(); 

    // Si la réponse est au format JSON et que vous souhaitez la convertir en tableau/array PHP
    $responseArray = json_decode($contents, true);
    $messageBot =  $responseArray['choices'][0]['message']['content'];
    echo $messageBot;
} else {
    echo "Aucun message reçu";
}




