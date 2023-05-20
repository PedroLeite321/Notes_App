<?php
//Gather all info and parse into db_connection
class DbWrapperNotes {
    public function __construct($titleData, $textData){
        if(isset($titleData) && isset($textData)){
            dataSuccess($titleData, $textdata);
        }else{
            throwError("One one these values was empty, please insert something");
        }
        
    }
    public throwError($error)   {
        
    }
    public dataSuccess($titleSuccess, $textSuccess)  {

    }
}
class DbWrapperPriorities   {
    public function __construct($priorityData)  {

    }
}
class dataConnect   {
    public function __construct($dbConnector)   {
        $dbConnector = require("./config.php");
        require("./db_connection.php");
        function stablishConnection()   {

        }
    }
}

    
    
