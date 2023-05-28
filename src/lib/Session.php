<?php

class Session {
    
// شروع سشن
    static public function start() {
        session_start();
    }

//بررسی سطح دسترسی کاربر
    static public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    static public function get($key) {
        if (isset($_SESSION[$key]))
            return $_SESSION[$key];
    }

    static public function remove($key) {
        unset($_SESSION[$key]);
    }
}