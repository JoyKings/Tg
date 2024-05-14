
<?php

define('TOKEN', '6955205284:AAEfiOcVT4EHPguedfVpqBriD7npsmXejKs');

$update = json_decode(file_get_contents('php://input'), TRUE);

// Получаем id чата
$chat_id = $update['message']['chat']['id'];

// Получаем текст сообщения
$text = $update['message']['text'];

// Отправляем ответ на сообщение
if($text == 'привет' || $text == 'здравствуйте') {
    sendMessage('Приветствую вас!', $chat_id);
}

// Функция для отправки сообщения
function sendMessage($message, $chat_id) {
    file_get_contents('https://api.telegram.org/bot'.TOKEN.'/sendMessage?chat_id='.$chat_id.'&text='.urlencode($message));
}
