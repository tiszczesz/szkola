<?php

abstract class Person {
    protected $name;
    protected $surrname;
    protected $age;
    public function __construct($name, $surrname, $age) {
        $this->name = $name;
        $this->surrname = $surrname;
        $this->age = $age;
    }
    public function getName() {
        return $this->name;
    }
    public abstract function Abstrakcyjna();

    public function getSurrname() {
        return $this->surrname;
    }

    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSurrname($surrname) {
        $this->surrname = $surrname;
    }

    public function setAge($age) {
        $this->age = $age;
    }
    public function __toString() {
        $html = "<p> Informacje o osobie </p>\n";
        $html .= "<p>Nazwsko: {$this->getSurrname()}</p>\n";
        $html .= "<p>Imię: {$this->getName()}</p>\n";
        $html .= "<p>Wiek: {$this->getAge()}</p>\n";
        return $html;
    }
    

}
