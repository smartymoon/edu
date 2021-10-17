<?php
if (!function_exists('ts')) {
    function ts() {
        return broadcast(new \App\Events\Chat('student',2,'peter', 'teacher',1, 'hello there'));
    }
}