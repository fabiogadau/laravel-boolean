<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Properties
    private $students;
    private $genders;

    public function __construct(){
        $this->students = config('students.students');
        $this->genders = config('students.genders');
    }

    // Students Main Page
    public function index(){
        $data = [
            'students' => $this->students,
            'genders' => $this->genders
        ];

        return view('students.index', $data);
    }

    // Show Student
    public function show($slug){
        $student = $this->searchStudent($slug, $this->students);

        if (!$student){
            abort('404');
        }

        return view('students.show', compact('student'));
    }

    // UTILITIES
    // Check by id if student exists
    private function searchStudent($slug, $array){
        foreach ($array as $student){
            if ($student['slug'] == $slug ){
                return $student;
            }
        }
        
        return false;
    }
}
