<?php

namespace App\Http\Controllers;

use App\Traits\Teacher\ManageCourses;
use App\Traits\Teacher\ManageUnits;

class TeacherController extends Controller
{
    use ManageCourses, ManageUnits;

    public function index()
    {
        return view('teacher.index');
    }
}
