<?php
require_once 'Student.php';

class StudentToHtml {
    public static function AllToTab(array $students){
         $html = "<table>\n<tr>\n<th>Lp</th><th>Imię</th><th>Nazwisko</th><th>Średnia</th>"
            . "<th>KlasaID</th><th></th></tr>\n";
         $i=0;
    foreach ($students as $student) {
        $i++;
        $html .= "<tr><td>{$i}</tdt><td>{$student->getName()}</tdt>"
        . "<td>{$student->getSurrname()}</tdt><td>{$student->getAverage()}</tdt>"
        . "<td>{$student->getIdClass()}</tdt>"
        . "<td><a href='editStudent.php?id=".$student->getId()."'>Edytuj</a> "
                . "<a href='deleteStudent.php?id=".$student->getId()."'>Usuń</a></td></tr>\n";
    }
    $html .= "</table>\n";
    return $html;
    }
    public static function StudentForm(Student $student = null, $isEdit = false){
        $action = $isEdit ? "updateStudent.php":"addStudent.php";
        if($isEdit){
            $id=$student->getId();
            $name = $student->getName();
            $surrname = $student->getSurrname();
            $average = $student->getAverage();
            $klasaID = $student->getIdClass();
            $label = "Zapisz" ;
        }  else {
            $id="";
            $name = "";
            $surrname = "";
            $average = "";
            $klasaID ="";
            $label = "Dodaj";
        }
        $html = <<<TEXT
               
     <form action="{$action}" method="POST" name="formstudent">
             <fieldset>                 
                    <legend>Dane ucznia</legend>
                    <input type="hidden" id="id" name="id" value='{$id}'/>
                    <div class="line">
                        <span class="info">Imię:</span>
                        <input type="text" id="imie" name="imie" value='{$name}'/>
                        <span class="error" id="errorimie"></span>
                    </div>
                    <div class="line">
                        <span class="info">Nazwisko</span>
                        <input type="text" id="nazwisko" name="nazwisko" value='{$surrname}'/>
                        <span class="error" id="errornazwisko"></span>
                    </div>
                    <div class="line">
                        <span class="info">Średnia ocen</span>
                         <input type="text" id="srocen" name="srocen" value='{$average}'/>
                        <span class="error" id="errorsrocen"></span>
                    </div>
                   <div class="line">
                        <span class="info">Klasa</span>
                        <input type="text" id="klasa" name="klasa" value='{$klasaID}'/>
                        <span class="error" id="errorklasa"></span>
                    </div> 
                    <div class="line">
                        <span class="info"></span>
                        <input type="submit" id="dodaj" value="$label"/>
                        
                    </div> 
                </fieldset>
        </form>            
                
TEXT;
        return $html;
    } 

    
}
