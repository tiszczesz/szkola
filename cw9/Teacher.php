<?php

require_once './Person.php';
require_once './IWorker.php';
class Teacher extends Person implements IWorker {
    private $subjects=[];
    private $salary;
    function __construct($name,$surrname,$age,array $topics,$salary=4000) {
        parent::__construct($name, $surrname, $age);
        $this->subjects = $topics;
        $this->setSalary($salary);
    }
    function getSalary() {
        return $this->salary;
    }
            function getTopics() {
        return $this->subjects;
    }

    function setTopics(array $topics) {
        $this->subjects = $topics;
    }
    private function fromArray(){
        $html = "<ul>Nauczane przedmioty:";
        foreach ($this->subjects as $subject) {
            $html .= "<li>{$subject}</li>\n";
        }
        $html .= "</ul>\n";
        return $html;
    }

    public function __toString() {
         $html = "<div class='teacher'>".parent::__toString();
         $html .= $this->fromArray();
         $html .= "<p>Pensja: {$this->getSalary()}</p>";
         $html .="</div>";
         return $html;
    }

    public function Abstrakcyjna() {
        return " z teachera";
    }

    public function setSalary($salary) {
        $this->salary = $salary<0? -$salary : $salary;
    }

}
