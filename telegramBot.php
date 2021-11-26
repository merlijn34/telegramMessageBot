<?php


$telegrambot = ''; // "chat id:api key"
$telegramchatid = ; //chat id


// Telegram function which you can call
function telegram($msg)
{
    global $telegrambot, $telegramchatid;
    $url = 'https://api.telegram.org/bot' . $telegrambot . '/sendMessage';
    $data = array('chat_id' => $telegramchatid, 'text' => $msg);
    $options = array('http' => array('method' => 'POST', 'header' => "Content-Type:application/x-www-form-urlencoded\r\n", 'content' => http_build_query($data),),);
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    return $result;
}


// send a message to user
telegram("Here aaaa is your message!!");



?>