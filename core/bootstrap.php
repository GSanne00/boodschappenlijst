<?php
$config = include 'config.php';
include 'database/connection.php';
include 'database/QueryBuilder.php';

return new QueryBuilder(Connection::make($config['database']));