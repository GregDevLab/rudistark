<?php

namespace App\Services;

class FlashMessage
{
    public static function addFlash(string $key, string $message)
    {
        $_SESSION[$key] = $message;
    }

    public static function getFlash(string $key)
    {
        if (!isset($_SESSION[$key])) {
            return;
        }
        $flash = $_SESSION[$key];
        unset($_SESSION[$key]);
        return $flash;
    }
}
