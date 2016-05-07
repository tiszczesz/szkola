<?php
require_once './functions.php';
if(filter_has_var(INPUT_POST, 'imie')
        && filter_has_var(INPUT_POST, 'nazwisko')
        && filter_has_var(INPUT_POST, 'pensja')){
    $imie = filter_input(INPUT_POST, 'imie');
    $nazwisko = filter_input(INPUT_POST, 'nazwisko');
    $stanowisko = filter_input(INPUT_POST, 'stanowisko');
    $pensja = intval(filter_input(INPUT_POST, 'pensja'));
    if(StringValidate($imie)&& StringValidate($nazwisko)){
        RowToFile("dane.txt", [$imie,$nazwisko,$stanowisko,$pensja]);
        header("Location: cw7.php");
    }else{
        header("Location: AddWorker.html");
    }
}
