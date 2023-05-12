<?php

    function checkUrl($checker) {
        $myUrl = $_SERVER['REQUEST_URI'];
        return $checker === $myUrl;
    }
