<?php
$config = include_once 'configuration.php';
include_once 'QueryBuilder.php';
include_once 'Connection.php';

$db = new QueryBuilder(Connection::make($config['database']));
return $db;
