<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    
    public function index(){
        return view('survey.index', [
            'surveys' => Survey::all(),
        ]);
    }

    public function create(){
        return view('survey.create');
    }
}
