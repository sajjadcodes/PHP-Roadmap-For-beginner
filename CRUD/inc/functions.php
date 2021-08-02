
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



// Task list



function get_task_list(){

    include 'connnection.php';

        $sql = 'SELECT tasks.*, projects.title as project FROM tasks'. 'JOIN projects ON tasks.project_id = projects.project_id';
    try{
            return $dbConnection->query($sql);

    }
    catch(Exception $e){

        echo "Error!:" . $e->getMessage()."</br>";
        
        return array();

    }



}

function add_project($title, $category)
{

    include 'connnection.php';

    $sql = "INSERT INTO projects(title, category) VALUE(?, ?)";
    
    
    try{
        $result = $dbConnection->prepare($sql);
        $result ->bindValue(1, $title,PDO::PARAM_STR);
        $result ->bindValue(2, $category, PDO::PARAM_STR);

        $result->execute();
    }
    catch(Exception $e){

        echo "Error!:" . $e->getMessage() . "<br>";

        return false;
            
    }
    return true;

}