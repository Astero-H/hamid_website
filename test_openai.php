<?php

$openai_token = $_ENV['API_KEY'];

$openai_endpoint    = "https://api.openai.com/v1/chat/completions";
$authorization      = "Authorization: Bearer ".$openai_token;

if(isset($_POST['msg'])) {
$data = array (
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        ['role' => 'system', 'content' => 'Vous parlez avec ChatGPT!'],
        ['role' => 'user', 'content' => $_POST['msg']],
    ],
    'temperature' => 0.7
);


$headers = array('Content-Type: application/json' , $authorization );

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $openai_endpoint);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);

$chatBotResponse = $result['choices'][0]['message']['content']; 

var_dump($chatBotResponse); exit;
}




// echo $result->choices[0]->message->content; // Hello! How can I assist you today?


