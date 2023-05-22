<?php
    class MyDatabase {
        public $connection;

        public function __construct($dsn)    {
            $name = "pedro";
            $password = "12112003pk";
            $dbConnector = "mysql:".http_build_query($dsn, "", ";"); //Connect to the database by using the http
            $this->connection = new PDO($dbConnector, $name, $password);
        }
        public function createQuery($myQuery, $dbSearch = [])   {
            $queryStart = $this->connection->prepare($myQuery);//converts string to sql code
            //you need to associate the preparations query value with the execution parameters.
            $queryStart->bindParam(':title', $dbSearch[0]);
            $queryStart->bindParam(':text', $dbSearch[1]);
            $queryStart->execute($dbSearch); //uses the converted string as sql 
            return($queryStart->fetch(PDO::FETCH_ASSOC)); //returns the pdo fetchable value as one associative array.
        }
    }