<?php
require_once './Person.php';

class Student extends Person {
    private $average;
    function __construct($name,$surrname,$age,$average=4.0) {
        parent::__construct($name, $surrname, $age);
        $this->average = $average;
    }
    function getAverage() {
        return $this->average;
    }

    function setAverage($average) {
        $this->average = $average;
    }
    public function __toString() {
        $html = "<div class='student'>".parent::__toString();
        $html .= "<p>Średnia ocen: {$this->getAverage()}</p>\n";
        $html .= "</div>";
        return $html;
    }

    public function Abstrakcyjna() {
        return " ze studenta";
    }

}
