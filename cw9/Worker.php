<?php
require_once './Person.php';
require_once './IWorker.php';

class Worker extends Person implements IWorker{
    private $jobs = [];
    private $salary;
            function __construct($name,$surrname,$age,$jobs,$salary=3000) {
        parent::__construct($name, $surrname, $age);
        $this->jobs = $jobs;
        $this->setSalary($salary);
    }
    function getJobs() {
        return $this->jobs;
    }

    function setJobs(array $jobs) {
        $this->jobs = $jobs;
    }
     private function fromArray(){
        $html = "<ul>Zakres obowiązków:";
        foreach ($this->jobs as $job) {
            $html .= "<li>{$job}</li>\n";
        }
        $html .= "</ul>\n";
        return $html;
    }
    public function __toString() {
         $html = "<div class='worker'>".parent::__toString();
         $html .= $this->fromArray();
         $html .= "<p>Pensja: {$this->getSalary()}</p>";
         $html .="</div>";
         return $html;
    }

    public function Abstrakcyjna() {
        return " z workera";
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
         $this->salary = $salary<0? -$salary : $salary;
    }

}
