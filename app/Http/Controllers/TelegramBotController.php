<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    public function updatedActivity()
    {
        $message = "*[NEW DLD]*\nNama : Andika Andra\nAlamat: Jalan tambakboyo no 1 klakah\nAlamat: Jalan tambakboyo no 1 klakah\nAlamat: Jalan tambakboyo no 1 klakah ";
    	Telegram::sendMessage([
            'chat_id' => '-392376502',
            'text' => $message,
            'parse_mode' => 'Markdown'
        ]);
    }

}
