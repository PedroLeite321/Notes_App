<?php
    class MyDatabase {
        public $pdoFunctions;

        public function __construct($dbData)    {
            $name = "pedro";
            $password = "12112003pk";
            $dbConnector = http_build_query($dbData, "", ";"); //uses the dbData array as http format.
            $this->pdoFunctions = new PDO($dbConnector, $name, $password);
        }
        public function createQuery($myQuery, $dbSearch = [])   {
            $queryStart = $this->pdoFunctions->prepare($myQuery);//converts string to sql code
            $queryStart->execute($dbSearch);//uses the converted string as sql 
            return($queryStart->fetch(PDO::FETCH_ASSOC)); //returns the pdo fetchable value as one associative array.
        }
    }