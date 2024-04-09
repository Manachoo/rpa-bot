<?php

$token = "6751431914:AAE-46VjfDouTjlm6VIptodffiSTGG_VGGc"
$url = "https://api.telegram.org/bot" . $token;

$input = file_get_contents('php://input');
$update = json_decode($input, TRUE);

$chatId = $input['message']['chat']['id'];
$message = $input['message']['text'];

switch($message) {
    case "/start":
        sendMessage($chatId, "hola soy un bot para tus compras del super");
        break;
    case "/carne":
        sendMessage($chatId, "Hello! How are you?");
        break;
    case "/carne":
            sendMessage($chatId, "Hello! How are you?");
            break;
    default:
        sendMessage($chatId, "I don't understand what you are saying.");
        break;
}
?>