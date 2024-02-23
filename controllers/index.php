<?php

$database = include 'core/bootstrap.php';
$boodschappen = $database->selectAll('groceries');

include 'views/index.view.php';

// var_dump($_POST);

?>