<?php

    // $access_token = "105164575832900";
    // $recipient_id = "<RECIPIENT_ID>";

    // $message_data = [
    // "recipient" => [
    //     "id" => $recipient_id
    // ],
    // "message" => [
    //     "text" => "Hello, world!"
    // ]
    // ];

    // $ch = curl_init('https://graph.facebook.com/v11.0/me/messages?access_token=' . $access_token);
    // curl_setopt($ch, CURLOPT_POST, 1);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message_data));
    // curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    // $response = curl_exec($ch);
    // curl_close($ch);

    $access_token = "105164575832900";

    $ch = curl_init("https://graph.facebook.com/v11.0/me/messages?access_token=$access_token");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $messages = json_decode($response, true);
    // print_r($message['data']);

    // Loop through the messages and display their content
    foreach ($messages['data'] as $message) {
    echo "Sender ID: " . $message['sender']['id'] . "\n";
    echo "Recipient ID: " . $message['recipient']['id'] . "\n";
    echo "Message text: " . $message['message']['text'] . "\n\n";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>