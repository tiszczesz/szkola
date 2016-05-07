<?php
function LoadFromFile($filename){
    $wynik = [];
    if(file_exists($filename)){
        $fp = fopen($filename, 'r');
        if($fp){
            while (($line = fgets($fp))!=false){
               $wynik[]=$line; 
            }
            if(!feof($fp)){
                $wynik[]="niepoprawnie wczytany plik";
            }
            fclose($fp);   
        }else{
            $wynik[]="Błąd otwarcia pliku";
        }
    }else{
        $wynik[]="Błąd otwarcia pliku";
    }
    return $wynik;
}


function FromLineToArray($line){
    return explode('|', $line);
}
function ArrayToHtmlTable(array $dane){
    $html = "<table>\n<tr>\n<th>Imię</th><th>Nazwisko</th><th>Stanowisko</th>"
            . "<th>Pensja</th></tr>\n";
    foreach ($dane as $line) {
        $row = FromLineToArray($line);
        $html .= "<tr><td>{$row[0]}</td><td>{$row[1]}</td>"
                    . "<td>{$row[2]}</td><td>{$row[3]}</td></tr>\n";
    }
    $html .= "</table>\n";
    return $html;
}
function RowToString(array $row){
    $line = "";
    foreach ($row as $value) {
        $line .= $value.'|';
    }
    return trim($line,'|');
}
function RowToFile($filename,array $row){
    $fp = fopen($filename, 'a');
    if($fp){
        fwrite($fp, RowToString($row).PHP_EOL);
        fclose($fp);
    }
}

function StringValidate($tekst){
    if(strlen( trim($tekst))>2){
        return true;
    }else{
        return false;
    }
}
