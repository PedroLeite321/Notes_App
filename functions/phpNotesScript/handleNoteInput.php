<?php
//Gather all info and parse into db_connection
require("../modalControl/createNote.php");
require("../modalControl/createPriority.php");

function handleContent($title, $text)    {
    require("../dbConnect/db_connection.php");
}
function handlePriorities($priority) {
    require("../dbConnect/db_connection.php");
}