<?php

require_once('LaptopsMapper.php');

$laptopsMapper = new LaptopsMapper();

if (isset($_POST['where'])) {
    if (empty($_POST['where']) === false) {
        $result = $laptopsMapper->getLaptops($_POST['where']);
    } else {
        $result = $laptopsMapper->getLaptops();
    }
}
echo json_encode($result);