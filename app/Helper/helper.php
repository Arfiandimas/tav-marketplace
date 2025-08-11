<?php

if (!function_exists('randomCode')) {
    function randomCode($length) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
}

if (!function_exists('randomAlphabet')) {
    function randomAlphabet($length, $uppercase_or_lowercase = null) {
        if ($uppercase_or_lowercase == "uppercase") {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        } elseif ($uppercase_or_lowercase == "lowercase") {
            $characters = 'abcdefghijklmnopqrstuvwxyz';
        } else {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        }
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
}