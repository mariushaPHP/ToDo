<?php

use ToDo\Request;
use ToDo\Database;
use ToDo\Task;

$id = intval(basename(Request::uri()));  // get id
$conection = Database::connect();       // connect to db
$task = new Task($conection);//
$task->deleteTask($id);
