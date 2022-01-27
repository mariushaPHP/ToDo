<?php require 'view/_partials/head.view.php'; ?>


<div class="container" style="margin-top: 30px">
    <div class="card">
        <div class="card-header">
            TODO APP
        </div>
        <?php if(isset($_POST['save'])) :?>

        <?php endif; ?>
        <form method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Užduoties pavadinimas" name="subject">
            </div>

            <div class="form-group">
                <select class="form-control" name="priority">
                    <option selected disabled>Prioritetas</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-control">Atliko data:</label>
                <input type="date" class="form-control" name="dueDate">
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="save">Saugoti</button>
            </div>
        </form>
    </div>
</div>
<?php require "view/_partials/htmlEnd.php";?>


