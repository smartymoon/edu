<?php
use LINE\Laravel\Facade\LINEBot;

if (!function_exists('ts')) {
    function ts()
    {
        return broadcast(new \App\Events\Chat('student', 2, 'peter', 'teacher', 1, 'hello there'));
    }
}

if (!function_exists('lineMessage')) {
    function lineMessage($line_user_id, $content)
    {
        LINEBot::pushMessage($line_user_id, new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($content));
    }
}
