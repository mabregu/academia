<?php

namespace App\Http\Controllers;

use App\Traits\Teacher\ManageCourses;

class TeacherController extends Controller
{
    use ManageCourses;
    
    public function index()
    {
        return view('teacher.index');
    }
}
