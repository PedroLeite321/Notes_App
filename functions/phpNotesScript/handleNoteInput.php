<?php
//Sending all data into db_connection

function handleContent($title, $text)    {
    require("../dbConnect/db_connection.php");
    require("../dbConnect/config.php");
    require("debug.php");
    stupidDebuggers($text); //echo a variable
    $myDbConf = basicConfig();
    $myDb = new MyDatabase($myDbConf['dbConf']);
    $myDbInjection = "INSERT INTO 'notes' (title, todo) VALUES (':title', ':text'); ";
    $myDb->createQuery($myDbInjection, [$title, $text]);
}//make a function that setup the db insertion/connection.
function handlePriorities($priority) {
    require("../dbConnect/db_connection.php");
    $myDbConf = require("../dbConnect/config.php");
    $myDb = new MyDatabase($myDbConf);
    //INjec
    
}//make a function that setup the db insertion/connection.