<?php
require_once './libs/Student.php';
require_once './libs/SQLRepositoryUczniowie.php';
if (filter_has_var(INPUT_POST, 'imie') &&
        filter_has_var(INPUT_POST, 'nazwisko') &&
        filter_has_var(INPUT_POST, 'srocen') &&
        filter_has_var(INPUT_POST, 'klasa')) {
    $imie = filter_input(INPUT_POST, 'imie');
    $nazwisko = filter_input(INPUT_POST, 'nazwisko');
    $srocen = floatval(filter_input(INPUT_POST, 'srocen'));
    $klasaid = intval(filter_input(INPUT_POST, 'klasa'));
    $student = new Student(0,$imie, $nazwisko, $srocen, $klasaid);
    $sqlRepo = new SQLRepositoryUczniowie();
    $sqlRepo->insertStudent($student);
   // var_dump($student);
}
header("Location: cw10.php");
