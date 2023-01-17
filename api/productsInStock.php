<?php
// leggo i dati dal DB
/**
 * @var string
 */
$pdoductList = file_get_contents("../dbJson/stock.json");

// informo il browser che gli sto inviando un json
header("Content-Type: application/json");

// stampo la stringa contente il json
echo $pdoductList;