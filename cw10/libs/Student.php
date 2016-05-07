<?php

class Student {
    private $id;
    private $name;
    private $surrname;
    private $average;
    private $idClass;
    function __construct($id, $name, $surrname, $average, $idClass) {
        $this->id = $id;
        $this->name = $name;
        $this->surrname = $surrname;
        $this->average = $average;
        $this->idClass = $idClass;
    }
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getSurrname() {
        return $this->surrname;
    }

    function getAverage() {
        return $this->average;
    }

    function getIdClass() {
        return $this->idClass;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurrname($surrname) {
        $this->surrname = $surrname;
    }

    function setAverage($average) {
        $this->average = $average;
    }

    function setIdClass($idClass) {
        $this->idClass = $idClass;
    }
    public function __toString() {
        return "<p>Informacje o uczniu:"
        . " {$this->getName()} {$this->getSurrname()} {$this->getAverage()}</p>\n ";
    }


}
