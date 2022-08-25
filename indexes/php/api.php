<?php
require __DIR__ . '/json.php';

header('Content-Type: applicatione/json');
echo json_encode($albums);
?>