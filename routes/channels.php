<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('chat.{mark}', function ($user, $mark) {
    if($user instanceof \App\Teacher) {
        $identity = 'teacher';
    } else {
        $identity = 'student';
    }
    return $identity.$user->id === $mark;
});
