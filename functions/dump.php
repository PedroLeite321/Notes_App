<?php
    function seeContent($value) {
        var_dump($value);
        echo("<h1>{$value}</h1>");
        die();
    }
