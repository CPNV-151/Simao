<?php

$dbConnector = null;
$dsn = "mysql:host=localhost;dbname=snows";
$usr = "snows-connector";
$pwd = "simao2005";

try{
    $dbConnector = new PDO($dsn,$usr,$pwd);

    $query = "SELECT * FROM snows";
    $queryResult = null;

    $statement = $dbConnector->prepare($query);
    $statement->execute();
    $queryResult = $statement->fetchAll();

    $dbConnexion = null;
    return $queryResult;
}
catch (PDOException $ex){
    print($ex);
}