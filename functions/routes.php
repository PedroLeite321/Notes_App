<?php

    function routes()   {
        function error()    {
            require("./controls/error.php");
            die();
        }
        function setUpUrl()   {
            $getUrl = parse_url($_SERVER["REQUEST_URI"])["path"];//array associativa, filtro path.
            return $getUrl;
        }
        function setUpRoutes()  {
            $routes = [
                "/" => "./controls/home.php",
                "/notes" => "./controls/notes.php",
            ];
            return $routes;
        }
        function urlCheck($path, $route)    {
            if(array_key_exists($path, $route)){
                require($route[$path]);
            }else{
                error();
            }
        }
        $route = setUpRoutes();
        $path = setUpUrl();
        urlCheck($path, $route);
        
    }
    routes();