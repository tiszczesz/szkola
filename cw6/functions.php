<?php
function FromArrayToList(array $dane, $title){
    $html = "<p>{$title}</p>\n<ul class='list'>\n";
    foreach ($dane as $elem) {
        $html .= "<li>{$elem}</li>\n";
    }
    $html .= "</ul>\n";
    return $html;
}