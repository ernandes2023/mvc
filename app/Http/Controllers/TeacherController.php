<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Matter;

class TeacherController extends Controller
{
    public function Index() {

        $teacher = Teacher::all();
        $matter = Matter::all();
        // dd($teachers);
        return view('teacher', ['teacher'=>$teacher], ['matter'=>$matter] ); 
        
        
    }


}
