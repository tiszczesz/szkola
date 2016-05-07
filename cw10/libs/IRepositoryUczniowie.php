<?php
require_once 'Student.php';
interface IRepositoryUczniowie {
    function getAll();
    function getStudent($id);
    function insertStudent(Student $student);
    function deleteStudent($id);
    function updateStudent(Student $student);
}
