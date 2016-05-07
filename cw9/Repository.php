<?php
require_once './Person.php';
require_once './Student.php';
require_once './Teacher.php';
require_once './Worker.php';
class Repository {
    public static function GetAll(){
        return [
            //new Person("Adam", "Nowak", 56),
            new Student("Monika", "Hajduk", 23,4.4),
            new Student("Krzysztof ", "Turecki", 56,5.5),
            new Teacher("Dariusz", "Gałązka", 44
                    , ["fizyka","matematyka","informatyka"],4500),
            new Teacher("Urszula", "Gałązka", 44
                    , ["język angielski","plastyka"],4000),
            new Worker("Tadeusz", "Wiśnia", 55, 
                    ["sekretariat","prace ogrodowe"]),
            new Worker("Malwina", "Kura", 35, 
                    ["sekretariat","prace biurowe"],2500)
        ];
    }
}
