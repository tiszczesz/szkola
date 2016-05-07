<?php

function Nazwa($argument){
            echo "<p>To jest z funkcji: {$argument}</p>\n";
}

function GetData($ile = 100){
    $dane = [];
    for($i=0;$i<$ile;$i++){
        $dane[] = rand(0,100);
    }
    return $dane;
}
function TabToHtmlTab(array $dane){
    //todo
    $html = '<table>'."\n";
    $html .= '<tr><th>Lp</th><th>Dane</th></tr>'."\n";
    $maxmin = GetMaxMin($dane);    
    for($i=0;$i<count($dane);$i++){
        if($i === $maxmin['min'] || $i === $maxmin['max']){
            $cc = " class='wyr' ";
        }else{
            $cc="";
        }
        $html .= "<tr><td >{$i}</td><td {$cc}>{$dane[$i]}</td></tr>\n";
    }
    $html .= '</table>';
    return $html;
}
function GetMaxMin(array $dane){
    $min = PHP_INT_MAX;
    $max = -PHP_INT_MAX;
    $wynik = [];
    for($i=0;$i<count($dane);$i++){
        if($dane[$i]>$max){
            $max = $dane[$i];
            $wynik['max']= $i;
        }
        if($dane[$i]<$min){
            $min = $dane[$i];
            $wynik['min']= $i;
        }
    }
    return $wynik;
}
