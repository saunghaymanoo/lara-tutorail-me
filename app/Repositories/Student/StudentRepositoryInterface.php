<?php
namespace App\Repositories\Student;
interface StudentRepositoryInterface{
    public function getAllStudents();
    public function getStudent($id);
    public function deleteStudent($id);
    public function updateStudent($data);
}