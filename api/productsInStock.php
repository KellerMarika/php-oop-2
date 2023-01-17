<?php
// leggo i dati dal DB
/**
 * @var string
 */
$pdoductList = file_get_contents("../dbJson/stock.json");

header("Content-Type: application/json");

echo $pdoductList;