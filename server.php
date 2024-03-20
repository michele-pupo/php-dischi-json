<?php

$database = file_get_contents(__DIR__ . '/albums.json');
$albums = json_decode($database);


header('Content-Type: application/json');

echo json_encode($albums);