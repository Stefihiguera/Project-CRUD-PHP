<?php

session_start();
$user = "root";
$pass ="";

try{
    $dsn = "mysql: host=localhost; dbname=project";
    $dbh = new PDO($dsn, $user, $pass);

} catch(PDOException $e){
    $e->getMessage();
}

?>