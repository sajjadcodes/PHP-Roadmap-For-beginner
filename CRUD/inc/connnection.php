<?php 


try{
    $dbConnection = new PDO("sqlite:".__DIR__."/database.db");

    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){

    echo $e->getMessage();

    exit();

}


var_dump($dbConnection);

