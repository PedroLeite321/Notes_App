<?php
function handleContent($title, $text)    {

    require("../dbConnect/db_connection.php");
    require("../dbConnect/config.php");
    

    //echo a variable
    $insertValues = [
        'title' => $title, 
        'text' => $text
    ];

    $myDbConf = basicConfig();
    $myDb = new MyDatabase($myDbConf['dbConf']);
    $sqlStatement = "INSERT INTO notes(title, toDo) VALUES(:title, :text)";
    $myDb->createQuery($sqlStatement, $insertValues);

}//make a function that setup the db insertion/connection.

function handlePriorities($priority) {

    require("../dbConnect/db_connection.php");
    $myDbConf = require("../dbConnect/config.php");
    $myDb = new MyDatabase($myDbConf);
    
}//make a function that setup the db insertion/connection.
    //Create notes conf
?>