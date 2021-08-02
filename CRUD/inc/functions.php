
<?php

function get_project_list(){

    include 'connnection.php';


    try{
            return $dbConnection->query('SELECT project_id,title, category FROM projects');
    }
    catch(Exception $e){

        echo "Error!:" . $e->getMessage()."</br>";
        
        return array();

    }



}