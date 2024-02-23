<?php

$database = include 'core/bootstrap.php';


$database->insert('groceries', [
    'name' => $_POST['name'],
    'number' => $_POST['number'],
    'price' => $_POST['price']
]);

header('Location: /');
