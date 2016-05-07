<?php

function NWDIteracyjnie($a, $b) {
    while ($b != 0) {
        $temp = $a;
        $a = $b;
        $b = $temp % $b;
    }
    return $a;
}

function NWDRekurencyjnie($a, $b) {
    if ($b == 0) {
        return $a;
    }
    return NWDRekurencyjnie($b, $a % $b);
}
