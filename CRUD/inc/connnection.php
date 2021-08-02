<?php 


        $serverName ="localhost";

        $username ="root";

        $password ="";


try{
    // $dbConnection = new PDO("sqlite:".__DIR__."/database.db");
    $dbConnection = new PDO("mysql:host=$serverName;dbname=time_tracker_db",$username, $password);

    // $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){

    echo $e->getMessage();

    exit();

}




