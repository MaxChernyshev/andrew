<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Telegram\Bot\Exceptions\TelegramResponseException;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramService
{
    public function send($text)
    {
        $data = false;
        $user = config('telegram.bots.mybot.chat_id');

        try {
            $data = Telegram::sendMessage([
                'chat_id'       => $user,
                'parse_mode'    => 'HTML',
                'text'          => $text,
            ]);

//            dd($data);


        } catch (TelegramResponseException $e) {
            Log::alert('error send message to user '.$user.'. Message: '.$e->getMessage());
        } catch (TelegramSDKException $e) {
            Log::alert('error send message to user '.$user.'. Message: '.$e->getMessage());
        }
        return $data;
    }
}
