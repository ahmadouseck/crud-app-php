<?php

require 'database.php';

$sql = 'SELECT * FROM people';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ); 

?>


<?php require "header.php"?>


<div class="container">

<div class="card mt-5">
    <div class="card-header">
        <h2>Les Employes</h2>
    </div>
    <div class="card-body">
       <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php foreach($people as $person): ?>
            <tr>
                <td><?= $person->id; ?> </td>
                <td><?= $person->name; ?></td>
                <td><?= $person->email; ?></td>
                <td>
                    <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit<ion-icon name="create-outline"></ion-icon></a>
                    <a onclick ="return confirm('Etes vous sur de supprimer?')" href="delete.php?id=<?= $person->id ?>" class="btn btn-danger">Delete
                    <ion-icon name="trash-outline"></ion-icon></a>
                </td>
            </tr>
        <?php endforeach; ?>

       </table>
    </div>
</div>
</div>

<?php require "footer.php"?>
