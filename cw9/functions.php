<?php
require_once './IWorker.php';
function PrintAll(array $dane){
    foreach ($dane as $item) {
        echo $item;
    }
}

function GetAllSalary(array $dane){
    $sum = 0;
    foreach ($dane as $worker) {
        if($worker instanceof IWorker){
            echo "<p>Pensja "
            . "dla {$worker->getSurrname()}:"
            . " {$worker->getSalary()}</p>";
            $sum += $worker->getSalary();
        }else{
            echo "<p>{$worker->getSurrname()}: nie jest pracownikiem</p>";
        }
        
    }
    echo "<p>Całkowita pensja wszystkich: ".$sum."</p>\n";
}