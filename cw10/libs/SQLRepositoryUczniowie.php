<?php
require_once 'IRepositoryUczniowie.php';
class SQLRepositoryUczniowie implements IRepositoryUczniowie {
    private function getConnection(){
        $conn = new mysqli('localhost', 'user', 'user', 'szkola');
        if($conn->connect_error){
            die("Błąd połaczenia z bazą {$conn->connect_errno}");
        }
        $conn->query("SET NAMES utf8");
        return $conn;
    }

    public function deleteStudent($id) {
        $conn = $this->getConnection();
        $sqlquery = "DELETE FROM uczniowie where id = {$id}";
        $conn->query($sqlquery);
    }
    private function rowToStudent(array $row){
        return new Student((int)$row[0],$row[1],
                $row[2],(float)$row[3],(int)$row[4]);
    }

    public function getAll() {
        $conn = $this->getConnection();
        $sqlQuery = "SELECT * FROM uczniowie";
        $result = $conn->query($sqlQuery);
        $data = $result->fetch_all();
       // var_dump($data);
        $students = [];
        foreach ($data as $row) {
            $students[] = $this->rowToStudent($row);
        }
        $conn->close();
        return $students;
    }

    public function getStudent($id) {
        $conn = $this->getConnection();
        $sqlQuery = "SELECT * FROM uczniowie WHERE id = {$id}";
        $result = $conn->query($sqlQuery);
        if($result->num_rows>0){
            $student = $this->rowToStudent($result->fetch_row());
            return $student;
        }
        return null;
    }

    public function insertStudent(Student $student) {
        $conn = $this->getConnection();
        $sqlquery = "INSERT INTO uczniowie ( Nazwisko, Imie, Srednia, KlasaID)"
                . " VALUES ( ?, ?, ?, ?)";
        $stm = $conn->prepare($sqlquery);
        $stm->bind_param('ssdi', $student->getName(),$student->getSurrname(),
                $student->getAverage(), $student->getIdClass());
        $stm->execute();
    }

    public function updateStudent(Student $student) {
        $conn = $this->getConnection();
        $sqlquery = "UPDATE uczniowie SET Imie=?,Nazwisko=?,Srednia=?,KlasaID=?"
                . " WHERE id={$student->getId()}";
         $stm = $conn->prepare($sqlquery);
        $stm->bind_param('ssdi', $student->getName(),$student->getSurrname(),
                $student->getAverage(), $student->getIdClass());
        $stm->execute();
    }

//put your code here
}
