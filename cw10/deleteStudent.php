<?php

require_once './libs/SQLRepositoryUczniowie.php';
require_once './libs/StudentToHtml.php';
if (filter_has_var(INPUT_GET, 'id')) {
    $id = intval(filter_input(INPUT_GET, 'id'));
    $conn = new SQLRepositoryUczniowie();
    $conn->deleteStudent($id);
    
}
header('Location: cw10.php');
