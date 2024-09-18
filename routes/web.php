<?php

use Illuminate\Support\Facades\Route;
use NotificationChannels\Telegram\TelegramUpdates;

Route::get('/', function () {
    // return view('welcome');
    $updates = TelegramUpdates::create()
        ->limit(2)
        ->options([
            'timeout' => 0,
    ])
    ->get();
dd($updates);
if($updates['ok']) {
    // Chat ID
    $chatId = $updates['result'][0]['message']['chat']['id'];
    dd($chatId);
}
});
