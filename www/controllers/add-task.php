<?php
use ToDo\Database;
use ToDo\Task;
use ToDo\Validation;

if(isset($_POST['save'])){
    var_dump($_POST);
    $errors = Validation::validator($_POST);
    //echo 'belenkas' . var_dump($errors);
    if(empty($errors)){
        $connection = Database::connect(); // prisijungimas prie db
        $task = new Task($connection);    // sukuria task objekta
        $task->createTask($_POST);         //
    }

}

require 'view/pages/add-task.view.php';
?>