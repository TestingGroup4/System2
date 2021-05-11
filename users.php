<?php
require 'common.php';

//Grab all the users from our database
$users = $database->select("users", [
    'id',
    'name',
    'rfid_uid'
]);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Närvarosystem</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Närvarosystem</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="attendance.php" class="nav-link">Närvaro</a>
            </li>
            <li class="nav-item">
                <a href="users.php" class="nav-link active">Användare</a>
            </li>
             <li class="nav-item">
                <a href="index.php" class="nav-link active">Startsida</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row">
            <h2>Users</h2>
        </div>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Namn</th>
                    <th scope="col">RFID S/N</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Loop through and list all the information of each user including their RFID UID
                foreach($users as $user) {
                    echo '<tr>';
                    echo '<td scope="row">' . $user['id'] . '</td>';
                    echo '<td>' . $user['name'] . '</td>';
                    echo '<td>' . $user['rfid_uid'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</html>
