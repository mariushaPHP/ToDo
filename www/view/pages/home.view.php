<?php require 'view/_partials/head.view.php'; ?>
<div class="container">
    <h3>My Todo List</h3>
    <div class="card-header">
        <a class="btn btn-primary" href="/add-task">Nauja uzduotis</a>
    </div>
    <ul class="list-group list-group-flush">
        <?php foreach ($tasks->allTasks() as $task):?>
        <div class="row">
            <li class="list-group-item" style="display: flex;">
                <div class="col-6">
                    <?php if($task['status'] == 1) :?>
                        <p style="text-decoration: line-through; margin: 0; color: firebrick"><?=$task['subject']; ?></p>
                    <?php else :?>
                        <p><?=$task['subject']; ?></p>
                    <?php endif ;?>
                </div>
                <div class="col-2">
                    <?=$task['dueDate']; ?>
                </div>

                <!--<?=$task['status']; ?>-->

                <div class="col-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $task['id'] ;?>">
                        Trinti
                    </button>
                    <?php require 'view/_partials/modalDelete.php'?>
                </div>

                <div class="col-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModalA<?= $task['id'] ;?>">
                        Užduotis atlikta
                    </button>
                    <?php require 'view/_partials/modalAdd.php'?>
                </div>


                <!--
             <a href="/delete-task/id/<?= $task['id'] ;?>">Salinti</a>
             <a href="/set-complete/id/<?= $task['id'] ;?>">Uzduotis atlikta</a> -->
            </li>
        </div>

        <?php endforeach; ?>
    </ul>
</div>
<?php require "view/_partials/htmlEnd.php";?>


