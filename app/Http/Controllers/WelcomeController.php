<?php
/**
 * Created by PhpStorm.
 * User: jijin
 * Date: 2016/11/6
 * Time: 22:00
 */
namespace App\Http\Controllers;
use App\Models\Student;

class WelComeController
{
    public function index()
    {
        $student = Student::first();
        $data = $student->getAttributes();
        return "student id=".$data['id']."; student name="
            .$data['name']."; student age=".$data['age'];
    }
}