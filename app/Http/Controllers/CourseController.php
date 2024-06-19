<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class CourseController extends Controller
{

    public function index(){
        return view('course.index', [
            'confirmed_courses' => Course::whereNot('at', Null)
                ->orderBy('at')
                ->get(),
            'pending_courses' => Course::where('at', Null)
                ->orderBy('at', 'desc')
                ->get()
        ]);
    }
}
