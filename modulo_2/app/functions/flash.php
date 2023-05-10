<?php

    function flash($key, $message, $type = 'danger')
    {
        if (!isset($_SESSION['flash'][$key])) {
            $class = "alert  alert-{$type}";
            $_SESSION['flash'][$key] = "<span class=\"$class\">$message</span>";
        }
    }

    function get($key)
    {
        if (isset($_SESSION['flash'][$key])) {
            $message = $_SESSION['flash'][$key];

            unset($_SESSION['flash'][$key]);

            return $message ?? '';
        }
    }
